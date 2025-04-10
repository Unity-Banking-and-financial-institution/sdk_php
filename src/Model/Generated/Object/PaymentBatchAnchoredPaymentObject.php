<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\PaymentApiObject;

/**
 * @generated
 */
class PaymentBatchAnchoredPaymentObject extends BunqModel
{
    /**
     * @var PaymentApiObject[]
     */
    protected $payment;

    /**
     * @return PaymentApiObject[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentApiObject[] $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->payment)) {
            return false;
        }

        return true;
    }
}
