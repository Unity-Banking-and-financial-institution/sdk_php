<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\PaymentApiObject;
use bunq\Model\Generated\Endpoint\PaymentBatchApiObject;
use bunq\Model\Generated\Object\AmountObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 * PaymentBatch
 * Payment
 */
class PaymentBatchTest extends BunqSdkTestBase
{
    /**
     * Test constants
     */
    const PAYMENT_CURRENCY = 'EUR';
    const PAYMENT_DESCRIPTION = 'php sdk Batch test';
    const MAXIMUM_PAYMENT_ENTRIES = 10;

    /**
     * Threshold constants.
     */
    const MONETARY_ACCOUNT_BALANCE_THRESHOLD = 0.10;

    /**
     */
    public function testSendBatchPayment()
    {
        $response = PaymentBatchApiObject::create($this->createPaymentArray());

        self::assertTrue(is_integer($response->getValue()));
    }

    /**
     * @return PaymentApiObject[]
     */
    private function createPaymentArray(): array
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        $allPayment = [];

        while (count($allPayment) < self::MAXIMUM_PAYMENT_ENTRIES) {
            $payment = new PaymentApiObject(
                amount: new AmountObject(self::PAYMENT_AMOUNT_DEFAULT, self::PAYMENT_CURRENCY),
                counterpartyAlias: $this->getPointerUserBravo(),
                description: self::PAYMENT_DESCRIPTION
            );

            $allPayment[] = $payment;
        }

        return $allPayment;
    }
}
