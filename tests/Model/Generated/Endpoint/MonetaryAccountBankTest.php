<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\MonetaryAccountBankApiObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  MonetaryAccountBank
 */
class MonetaryAccountBankTest extends BunqSdkTestBase
{
    /**
     *  Field constants.
     */
    const STATUS = 'CANCELLED';
    const SUB_STATUS = 'REDEMPTION_VOLUNTARY';
    const REASON = 'OTHER';
    const REASON_DESCRIPTION = 'Because this is a test';
    const CURRENCY = 'EUR';

    /**
     *  Prefix for the monetary account description.
     */
    const PREFIX_MONETARY_ACCOUNT_DESCRIPTION = 'PHPtest_';

    /**
     * @var int
     */
    private static $monetaryAccountBankToCloseId;

    /**
     *  Deletes the new created monetary account.
     */
    public static function tearDownAfterClass(): void
    {
        if (!is_null(static::$monetaryAccountBankToCloseId)) {
            MonetaryAccountBankApiObject::update(
                monetaryAccountBankId: static::$monetaryAccountBankToCloseId,
                status: self::STATUS,
                subStatus: self::SUB_STATUS,
                reason: self::REASON,
                reasonDescription: self::REASON_DESCRIPTION
            );
        }
    }

    /**
     * Test making a new monetary account with an unique description.
     *
     * This test has no assertion as of its testing to see if the code runs without errors.
     */
    public function testCreateNewMonetaryAccount()
    {
        static::$monetaryAccountBankToCloseId = MonetaryAccountBankApiObject::create(
            currency: self::CURRENCY,
            description: uniqid(self::PREFIX_MONETARY_ACCOUNT_DESCRIPTION)
        )->getValue();

        static::assertTrue(is_integer(static::$monetaryAccountBankToCloseId));
    }
}
