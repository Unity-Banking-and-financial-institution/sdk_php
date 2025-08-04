<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\ErrorObject;
use bunq\Model\Generated\Object\LabelMonetaryAccountObject;
use bunq\Model\Generated\Object\PaymentArrivalExpectedObject;

/**
 * Payments that are not processed yet.
 *
 * @generated
 */
class PaymentDelayedOutgoingApiObject extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

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
     * The pointer to which the payment should be sent.
     *
     * @var LabelMonetaryAccountObject
     */
    protected $counterpartyPointer;

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
     * The reason for the payment being delayed.
     *
     * @var string
     */
    protected $reason;

    /**
     * The time this payment should be executed.
     *
     * @var string
     */
    protected $timeExecution;

    /**
     * Information about the expected arrival of the payment.
     *
     * @var PaymentArrivalExpectedObject
     */
    protected $paymentArrivalExpected;

    /**
     * The reason why the payment failed.
     *
     * @var ErrorObject[]
     */
    protected $errorMessage;

    /**
     * The resulting payment, only when it’s successful.
     *
     * @var PaymentApiObject
     */
    protected $paymentResult;

    /**
     * The status of the payment, to cancel it.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param string|null $status The status of the payment, to cancel it.
     */
    public function __construct(string  $status = null)
    {
        $this->statusFieldForRequest = $status;
    }

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
     * The pointer to which the payment should be sent.
     *
     * @return LabelMonetaryAccountObject
     */
    public function getCounterpartyPointer()
    {
        return $this->counterpartyPointer;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelMonetaryAccountObject $counterpartyPointer
     */
    public function setCounterpartyPointer($counterpartyPointer)
    {
        $this->counterpartyPointer = $counterpartyPointer;
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
     * The reason for the payment being delayed.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The time this payment should be executed.
     *
     * @return string
     */
    public function getTimeExecution()
    {
        return $this->timeExecution;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $timeExecution
     */
    public function setTimeExecution($timeExecution)
    {
        $this->timeExecution = $timeExecution;
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
     * The reason why the payment failed.
     *
     * @return ErrorObject[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param ErrorObject[] $errorMessage
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
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

        if (!is_null($this->counterpartyPointer)) {
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

        if (!is_null($this->reason)) {
            return false;
        }

        if (!is_null($this->timeExecution)) {
            return false;
        }

        if (!is_null($this->paymentArrivalExpected)) {
            return false;
        }

        if (!is_null($this->errorMessage)) {
            return false;
        }

        if (!is_null($this->paymentResult)) {
            return false;
        }

        return true;
    }
}
