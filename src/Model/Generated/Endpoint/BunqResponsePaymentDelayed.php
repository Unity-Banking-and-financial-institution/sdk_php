<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponsePaymentDelayed extends BunqResponse
{
    /**
     * @return PaymentDelayedApiObject
     */
    public function getValue(): PaymentDelayedApiObject
    {
        return parent::getValue();
    }
}
