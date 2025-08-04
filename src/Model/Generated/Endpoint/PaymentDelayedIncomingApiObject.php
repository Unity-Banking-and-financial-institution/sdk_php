<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\LabelMonetaryAccountObject;
use bunq\Model\Generated\Object\PaymentArrivalExpectedObject;

/**
 * Payments that are not processed yet.
 *
 * @generated
 */
class PaymentDelayedIncomingApiObject extends BunqModel
{
    /**
     * The status of the delayed payment.
     *
     * @var string
     */
    protected $status;

    /**
     * The id of the monetary account.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The amount of the payment.
     *
     * @var AmountObject
     */
    protected $amount;

    /**
     * The LabelMonetaryAccount containing the public information of 'this' (party) side of the payment.
     *
     * @var LabelMonetaryAccountObject
     */
    protected $alias;

    /**
     * The LabelMonetaryAccount containing the public information of the other (counterparty) side of the payment.
     *
     * @var LabelMonetaryAccountObject
     */
    protected $counterpartyAlias;

    /**
     * The description of the payment.
     *
     * @var string
     */
    protected $description;

    /**
     * Information about the expected arrival of the payment.
     *
     * @var PaymentArrivalExpectedObject
     */
    protected $paymentArrivalExpected;

    /**
     * The resulting payment, only when it’s successful.
     *
     * @var PaymentApiObject
     */
    protected $paymentResult;

    /**
     * The status of the delayed payment.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The id of the monetary account.
     *
     * @return int
     */
    public function getMonetaryAccountId()
    {
        return $this->monetaryAccountId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param int $monetaryAccountId
     */
    public function setMonetaryAccountId($monetaryAccountId)
    {
        $this->monetaryAccountId = $monetaryAccountId;
    }

    /**
     * The amount of the payment.
     *
     * @return AmountObject
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * The LabelMonetaryAccount containing the public information of 'this' (party) side of the payment.
     *
     * @return LabelMonetaryAccountObject
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelMonetaryAccountObject $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
     * The LabelMonetaryAccount containing the public information of the other (counterparty) side of the payment.
     *
     * @return LabelMonetaryAccountObject
     */
    public function getCounterpartyAlias()
    {
        return $this->counterpartyAlias;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelMonetaryAccountObject $counterpartyAlias
     */
    public function setCounterpartyAlias($counterpartyAlias)
    {
        $this->counterpartyAlias = $counterpartyAlias;
    }

    /**
     * The description of the payment.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Information about the expected arrival of the payment.
     *
     * @return PaymentArrivalExpectedObject
     */
    public function getPaymentArrivalExpected()
    {
        return $this->paymentArrivalExpected;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentArrivalExpectedObject $paymentArrivalExpected
     */
    public function setPaymentArrivalExpected($paymentArrivalExpected)
    {
        $this->paymentArrivalExpected = $paymentArrivalExpected;
    }

    /**
     * The resulting payment, only when it’s successful.
     *
     * @return PaymentApiObject
     */
    public function getPaymentResult()
    {
        return $this->paymentResult;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentApiObject $paymentResult
     */
    public function setPaymentResult($paymentResult)
    {
        $this->paymentResult = $paymentResult;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->counterpartyAlias)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->paymentArrivalExpected)) {
            return false;
        }

        if (!is_null($this->paymentResult)) {
            return false;
        }

        return true;
    }
}
