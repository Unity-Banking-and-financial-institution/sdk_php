<?php
namespace bunq\test\Http;

use bunq\Http\BunqResponse;
use bunq\Http\Pagination;
use bunq\Model\Generated\Endpoint\PaymentApiObject;
use bunq\Model\Generated\Object\AmountObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  Pagination
 */
class PaginationScenarioTest extends BunqSdkTestBase
{
    /**
     * Constants for scenario testing.
     */
    const PAYMENT_LISTING_PAGE_SIZE = 2;
    const PAYMENT_REQUIRED_COUNT_MINIMUM = self::PAYMENT_LISTING_PAGE_SIZE * 2;
    const NUMBER_ZERO = 0;

    /**
     * Constants for payment creation.
     */
    const PAYMENT_AMOUNT_EUR = '0.01';
    const PAYMENT_CURRENCY = 'EUR';
    const PAYMENT_DESCRIPTION = 'PHP test Payment';

    /**
     * RateLimit constants.
     */
    const RATE_LIMIT_TIMEOUT_LONG = 3;
    const RATE_LIMIT_TIMEOUT_SHORT = 1;

    /**
     */
    public function testApiScenarioPaymentListingWithPagination()
    {
        $this->ensureEnoughPayments();

        $paymentsExpected = static::getPaymentsRequired();
        $paginationCountOnly = new Pagination();
        $paginationCountOnly->setCount(self::PAYMENT_LISTING_PAGE_SIZE);

        sleep(self::RATE_LIMIT_TIMEOUT_LONG);
        $responseLatest = static::listPayments($paginationCountOnly->getUrlParamsCountOnly());
        $paginationLatest = $responseLatest->getPagination();

        $responsePrevious = static::listPayments($paginationLatest->getUrlParamsPreviousPage());
        $paginationPrevious = $responsePrevious->getPagination();

        $responsePreviousNext = static::listPayments($paginationPrevious->getUrlParamsNextPage());

        $paymentsActual = array_merge($responsePreviousNext->getValue(), $responsePrevious->getValue());

        static::assertEquals($paymentsExpected, $paymentsActual);
    }

    /**
     */
    private function ensureEnoughPayments()
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        for ($i = self::NUMBER_ZERO; $i < self::getPaymentEndpointsMissingCount(); ++$i) {
            $this->createPayment();
            sleep(self::RATE_LIMIT_TIMEOUT_SHORT);
        }
    }

    /**
     * @return int
     */
    private static function getPaymentEndpointsMissingCount(): int
    {
        return self::PAYMENT_REQUIRED_COUNT_MINIMUM - count(static::getPaymentsRequired());
    }

    /**
     * @return PaymentApiObject[]
     */
    private static function getPaymentsRequired(): array
    {
        $pagination = new Pagination();
        $pagination->setCount(self::PAYMENT_REQUIRED_COUNT_MINIMUM);

        return static::listPayments($pagination->getUrlParamsCountOnly())->getValue();
    }

    /**
     * @param string[] $urlParams
     *
     * @return BunqResponse
     */
    private static function listPayments(array $urlParams): BunqResponse
    {
        return PaymentApiObject::listing(null, $urlParams);
    }

    /**
     */
    public function createPayment()
    {
        PaymentApiObject::create(
            new AmountObject(self::PAYMENT_AMOUNT_EUR, self::PAYMENT_CURRENCY),
            $this->getSecondMonetaryAccountAlias(),
            self::PAYMENT_DESCRIPTION
        );
    }
}
