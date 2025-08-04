<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Http\BunqResponse;

/**
 */
class BunqResponsePaymentBatchEntry extends BunqResponse
{
    /**
     * @return PaymentBatchEntryApiObject
     */
    public function getValue(): PaymentBatchEntryApiObject
    {
        return parent::getValue();
    }
}
