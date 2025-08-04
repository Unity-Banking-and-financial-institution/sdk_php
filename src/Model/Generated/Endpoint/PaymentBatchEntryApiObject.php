<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\ErrorObject;
use bunq\Model\Generated\Object\PointerObject;

/**
 * Manage entries inside of a payment batch.
 *
 * @generated
 */
class PaymentBatchEntryApiObject extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-batch/%s/entry/%s';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/payment-batch/%s/entry/%s';

    /**
     * Field constants.
     */
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentBatchEntry';

    /**
     * The ID of the monetary account from which the payment was made.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * The ID of the Payment Batch Entry.
     *
     * @var int
     */
    protected $paymentBatchId;

    /**
     * The status of the Payment.
     *
     * @var string
     */
    protected $status;

    /**
     * The amount.
     *
     * @var AmountObject
     */
    protected $amount;

    /**
     * The pointer to the party where the payment should be made to.
     *
     * @var PointerObject
     */
    protected $counterPointer;

    /**
     * The description for the Payment.
     *
     * @var string
     */
    protected $description;

    /**
     * The payment, if it was made.
     *
     * @var PaymentApiObject
     */
    protected $payment;

    /**
     * The errors encountered while executing the payment.
     *
     * @var ErrorObject[]
     */
    protected $errors;

    /**
     * The status of the payment batch, used to retry.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param string|null $status The status of the payment batch, used to retry.
     */
    public function __construct(string  $status = null)
    {
        $this->statusFieldForRequest = $status;
    }

    /**
     * @param int $paymentBatchId
     * @param int $paymentBatchEntryId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatchEntry
     */
    public static function get(int $paymentBatchId, int $paymentBatchEntryId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponsePaymentBatchEntry
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentBatchId, $paymentBatchEntryId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentBatchEntry::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * @param int $paymentBatchId
     * @param int $paymentBatchEntryId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the payment batch, used to retry.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $paymentBatchId, int $paymentBatchEntryId, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentBatchId, $paymentBatchEntryId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * The ID of the monetary account from which the payment was made.
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
     * The ID of the Payment Batch Entry.
     *
     * @return int
     */
    public function getPaymentBatchId()
    {
        return $this->paymentBatchId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param int $paymentBatchId
     */
    public function setPaymentBatchId($paymentBatchId)
    {
        $this->paymentBatchId = $paymentBatchId;
    }

    /**
     * The status of the Payment.
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
     * The amount.
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
     * The pointer to the party where the payment should be made to.
     *
     * @return PointerObject
     */
    public function getCounterPointer()
    {
        return $this->counterPointer;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PointerObject $counterPointer
     */
    public function setCounterPointer($counterPointer)
    {
        $this->counterPointer = $counterPointer;
    }

    /**
     * The description for the Payment.
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
     * The payment, if it was made.
     *
     * @return PaymentApiObject
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentApiObject $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * The errors encountered while executing the payment.
     *
     * @return ErrorObject[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param ErrorObject[] $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->paymentBatchId)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->counterPointer)) {
            return false;
        }

        if (!is_null($this->description)) {
            return false;
        }

        if (!is_null($this->payment)) {
            return false;
        }

        if (!is_null($this->errors)) {
            return false;
        }

        return true;
    }
}
