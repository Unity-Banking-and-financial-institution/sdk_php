<?php
namespace bunq\test;

use bunq\Context\ApiContext;
use bunq\Context\BunqContext;
use bunq\Exception\BunqException;
use bunq\Model\Generated\Endpoint\MonetaryAccountBankApiObject;
use bunq\Model\Generated\Endpoint\RequestInquiryApiObject;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\PointerObject;
use bunq\Util\BunqEnumApiEnvironmentType;
use bunq\Util\InstallationUtil;
use PHPUnit\Framework\TestCase;

/**
 * The base for all the Bunq SDK tests.
 */
class BunqSdkTestBase extends TestCase
{
    /**
     * Error constants.
     */
    const ERROR_COULD_NOT_DETERMINE_IBAN = 'Could not determine IBAN Pointer';
    const ERROR_COULD_NOT_DETERMINE_USER_ALIAS = 'Could not determine user alias.';
    const WARNING_TEST_SKIPPED_DUE_TO_INSUFFICIENT_BALANCE = 'Not enough money on primary account.';

    /**
     * MonetaryAccount constants.
     */
    const MONETARY_ACCOUNT_CURRENCY = 'EUR';
    const MONETARY_ACCOUNT_DESCRIPTION = 'test account php';
    const MONETARY_ACCOUNT_BALANCE_THRESHOLD = 0.00;

    /**
     * Pointer constants.
     */
    const POINTER_TYPE_IBAN = 'IBAN';
    const POINTER_TYPE_EMAIL = 'EMAIL';
    const EMAIL_BRAVO = 'bravo@bunq.com';

    /**
     * Full name of context config file to use for testing.
     */
    const FILE_PATH_CONTEXT_CONFIG = __DIR__ . '/../bunq-test.conf';
    const FILE_PATH_AVATAR = '/resource/vader.png';

    /**
     * Attachment constants.
     */
    const ATTACHMENT_CONTENT_TYPE = 'image/png';
    const ATTACHMENT_DESCRIPTION = 'TEST PNG PHP';
    const ATTACHMENT_PATH_IN = '/vader.png';

    /**
     * Default constants.
     */
    const PAYMENT_AMOUNT_DEFAULT = '0.01';

    /**
     * The index of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     * @var MonetaryAccountBankApiObject
     */
    protected $secondMonetaryAccountBank;

    /**
     * Spending money constants.
     */
    const SPENDING_MONEY_AMOUNT = '500';
    const SPENDING_MONEY_RECIPIENT = 'sugardaddy@bunq.com';
    const SPENDING_MONEY_DESCRIPTION = 'sdk php test, thanks daddy <3';

    /**
     */
    public static function setUpBeforeClass(): void
    {
        static::createApiContext();
        BunqContext::loadApiContext(
            ApiContext::restore(self::FILE_PATH_CONTEXT_CONFIG)
        );
    }

    /**
     */
    protected static function createApiContext()
    {
        InstallationUtil::automaticInstall(
            BunqEnumApiEnvironmentType::SANDBOX(),
            self::FILE_PATH_CONTEXT_CONFIG
        );
    }

    /**
     */
    protected function setUp(): void
    {
        $this->setSecondMonetaryAccountBank();
        $this->requestSpendingMoney();
        sleep(1); // ensure requests are auto accepted.
        BunqContext::getUserContext()->refreshUserContext();
    }

    /**
     * @return string
     */
    protected function getAttachmentContentType(): string
    {
        return self::ATTACHMENT_CONTENT_TYPE;
    }

    /**
     * @return string
     */
    protected function getAttachmentDescription(): string
    {
        return self::ATTACHMENT_DESCRIPTION;
    }

    /**
     */
    private function setSecondMonetaryAccountBank()
    {
        $createdId = MonetaryAccountBankApiObject::create(
            self::MONETARY_ACCOUNT_CURRENCY,
            self::MONETARY_ACCOUNT_DESCRIPTION
        );

        $this->secondMonetaryAccountBank = MonetaryAccountBankApiObject::get($createdId->getValue())->getValue();
    }

    /**
     */
    private function requestSpendingMoney()
    {
        RequestInquiryApiObject::create(
            new AmountObject(self::SPENDING_MONEY_AMOUNT, self::MONETARY_ACCOUNT_CURRENCY),
            new PointerObject(self::POINTER_TYPE_EMAIL, self::SPENDING_MONEY_RECIPIENT),
            self::SPENDING_MONEY_DESCRIPTION,
            false
        );

        RequestInquiryApiObject::create(
            new AmountObject(self::SPENDING_MONEY_AMOUNT, self::MONETARY_ACCOUNT_CURRENCY),
            new PointerObject(self::POINTER_TYPE_EMAIL, self::SPENDING_MONEY_RECIPIENT),
            self::SPENDING_MONEY_DESCRIPTION,
            false,
            $this->getSecondMonetaryAccountId()
        );
    }

    /**
     * @return PointerObject
     *
     * @throws BunqException
     */
    protected function getSecondMonetaryAccountAlias(): PointerObject
    {
        $allAlias = $this->secondMonetaryAccountBank->getAlias();

        foreach ($allAlias as $alias) {
            if ($alias->getType() === self::POINTER_TYPE_IBAN) {
                return $alias;
            }
        }

        throw new BunqException(self::ERROR_COULD_NOT_DETERMINE_IBAN);
    }

    /**
     * @return string
     */
    protected function getAttachmentFilePath(): string
    {
        return self::ATTACHMENT_PATH_IN;
    }

    /**
     * @return PointerObject
     *
     * @throws BunqException
     */
    protected function getUserAlias(): PointerObject
    {
        if (BunqContext::getUserContext()->isOnlyUserPersonSet()) {
            return BunqContext::getUserContext()->getUserPerson()->getAlias()[self::INDEX_FIRST];
        } elseif (BunqContext::getUserContext()->isOnlyUserCompanySet()) {
            return BunqContext::getUserContext()->getUserCompany()->getAlias()[self::INDEX_FIRST];
        } elseif (BunqContext::getUserContext()->isOnlyUserApiKeySet()) {
            return BunqContext::getUserContext()
                ->getUserApiKey()
                ->getRequestedByUser()
                ->getReferencedObject()
                ->getAlias()[self::INDEX_FIRST];
        } else {
            throw new BunqException(self::ERROR_COULD_NOT_DETERMINE_USER_ALIAS);
        }
    }

    /**
     * @return PointerObject
     */
    protected function getPointerUserBravo(): PointerObject
    {
        return new PointerObject(
            self::POINTER_TYPE_EMAIL,
            self::EMAIL_BRAVO
        );
    }

    /**
     * @return int
     */
    protected function getSecondMonetaryAccountId(): int
    {
        return $this->secondMonetaryAccountBank->getId();
    }

    /**
     * @return bool
     */
    protected function isMonetaryAccountBalanceSufficient(): bool
    {
        $balance = floatval(BunqContext::getUserContext()->getPrimaryMonetaryAccount()->getBalance()->getValue());

        return $balance > self::MONETARY_ACCOUNT_BALANCE_THRESHOLD;
    }

    /**
     * @return bool
     */
    protected function skipTestIfNeededDueToInsufficientBalance(): bool
    {
        if (!$this->isMonetaryAccountBalanceSufficient()) {
            static::markTestSkipped(self::WARNING_TEST_SKIPPED_DUE_TO_INSUFFICIENT_BALANCE);
        }

        return true;
    }
}
