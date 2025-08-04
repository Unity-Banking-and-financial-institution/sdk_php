<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\BunqResponseInt;
use bunq\Model\Generated\Endpoint\PaymentApiObject;
use bunq\Model\Generated\Object\AmountObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  Payment
 *  PaymentChat
 *  ChatMessageText
 */
class PaymentTest extends BunqSdkTestBase
{
    /**
     *  The amount of euros sent to the other account/user.
     */
    const PAYMENT_AMOUNT_IN_EUR = '0.01';

    /**
     *  The currency in which the money is sent.
     */
    const PAYMENT_CURRENCY = 'EUR';

    /**
     *  Description field for the request body.
     */
    const PAYMENT_DESCRIPTION = 'PHP unit test';

    /**
     *  The message send in the payment chat.
     */
    const PAYMENT_CHAT_TEXT_MESSAGE = 'send from PHP test';

    /**
     * Test sending money to other sandbox user.
     */
    public function testSendMoneyToOtherUser()
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        $response = PaymentApiObject::create(
            amount: new AmountObject(self::PAYMENT_AMOUNT_IN_EUR, self::PAYMENT_CURRENCY),
            counterpartyAlias: $this->getPointerUserBravo(),
            description: self::PAYMENT_DESCRIPTION
        );

        static::assertNotNull($response);
    }

    /**
     * Test sending money to other monetaryAccount.
     */
    public function testSendMoneyToOtherMonetaryAccount(): BunqResponseInt
    {
        $this->skipTestIfNeededDueToInsufficientBalance();

        $paymentId = PaymentApiObject::create(
            amount: new AmountObject(self::PAYMENT_AMOUNT_IN_EUR, self::PAYMENT_CURRENCY),
            counterpartyAlias: $this->getSecondMonetaryAccountAlias(),
            description: self::PAYMENT_DESCRIPTION
        );

        static::assertNotNull($paymentId);

        return $paymentId;
    }
}
