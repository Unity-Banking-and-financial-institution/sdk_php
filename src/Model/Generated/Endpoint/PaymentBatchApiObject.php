<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\LabelMonetaryAccountObject;

/**
 * Create a payment batch, or show the payment batches of a monetary account.
 *
 * @generated
 */
class PaymentBatchApiObject extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/payment-batch';
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/payment-batch/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-batch/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment-batch';

    /**
     * Field constants.
     */
    const FIELD_PAYMENTS = 'payments';
    const FIELD_EXECUTION_TYPE = 'execution_type';
    const FIELD_STATUS = 'status';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentBatch';

    /**
     * The ID of the monetary account that this payment batch belongs to.
     *
     * @var int
     */
    protected $monetaryAccountId;

    /**
     * Whether the payment batch should be executed synchronously or asynchronously.
     *
     * @var string
     */
    protected $executionType;

    /**
     * The status of the payment batch.
     *
     * @var string
     */
    protected $status;

    /**
     * The label to display for the monetary account.
     *
     * @var LabelMonetaryAccountObject
     */
    protected $label;

    /**
     * The total amount of the payment batch.
     *
     * @var AmountObject
     */
    protected $amountTotal;

    /**
     * The total amount of the successful payments in the batch.
     *
     * @var AmountObject
     */
    protected $amountSuccessful;

    /**
     * The ID of the latest event for the payment batch.
     *
     * @var int
     */
    protected $eventId;

    /**
     * The list of mutations that were made.
     *
     * @var PaymentApiObject[]
     */
    protected $payments;

    /**
     * The entries that are part of this batch.
     *
     * @var PaymentBatchEntryApiObject[]
     */
    protected $entries;

    /**
     * The list of payments we want to send in a single batch.
     *
     * @var PaymentApiObject[]
     */
    protected $paymentsFieldForRequest;

    /**
     * Whether the payment batch should be executed synchronously or asynchronously.
     *
     * @var string|null
     */
    protected $executionTypeFieldForRequest;

    /**
     * The status of the payment batch, used to retry failed payments.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * @param PaymentApiObject[] $payments The list of payments we want to send in a single batch.
     * @param string|null $executionType Whether the payment batch should be executed synchronously or asynchronously.
     * @param string|null $status The status of the payment batch, used to retry failed payments.
     */
    public function __construct(array  $payments, string  $executionType = null, string  $status = null)
    {
        $this->paymentsFieldForRequest = $payments;
        $this->executionTypeFieldForRequest = $executionType;
        $this->statusFieldForRequest = $status;
    }

    /**
     * Create a payment batch by sending an array of single payment objects, that will become part of the batch.
     *
     * @param PaymentApiObject[] $payments The list of payments we want to send in a single batch.
     * @param int|null $monetaryAccountId
     * @param string|null $executionType Whether the payment batch should be executed synchronously or asynchronously.
     * @param string|null $status The status of the payment batch, used to retry failed payments.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function create(array  $payments, int $monetaryAccountId = null, string  $executionType = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            [self::FIELD_PAYMENTS => $payments,
self::FIELD_EXECUTION_TYPE => $executionType,
self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Revoke a bunq.to payment batch. The status of all the payments will be set to REVOKED.
     *
     * @param int $paymentBatchId
     * @param int|null $monetaryAccountId
     * @param string|null $status The status of the payment batch, used to retry failed payments.
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $paymentBatchId, int $monetaryAccountId = null, string  $status = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentBatchId]
            ),
            [self::FIELD_STATUS => $status],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * Return the details of a specific payment batch.
     *
     * @param int $paymentBatchId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatch
     */
    public static function get(int $paymentBatchId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponsePaymentBatch
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentBatchId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentBatch::castFromBunqResponse(
            static::fromJson($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * Return all the payment batches for a monetary account.
     *
     * This method is called "listing" because "list" is a restricted PHP word and cannot be used as constants, class names,
     * function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentBatchApiObjectList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponsePaymentBatchApiObjectList
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId)]
            ),
            $params,
            $customHeaders
        );

        return BunqResponsePaymentBatchApiObjectList::castFromBunqResponse(
            static::fromJsonList($responseRaw, self::OBJECT_TYPE_GET)
        );
    }

    /**
     * The ID of the monetary account that this payment batch belongs to.
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
     * Whether the payment batch should be executed synchronously or asynchronously.
     *
     * @return string
     */
    public function getExecutionType()
    {
        return $this->executionType;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $executionType
     */
    public function setExecutionType($executionType)
    {
        $this->executionType = $executionType;
    }

    /**
     * The status of the payment batch.
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
     * The label to display for the monetary account.
     *
     * @return LabelMonetaryAccountObject
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelMonetaryAccountObject $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * The total amount of the payment batch.
     *
     * @return AmountObject
     */
    public function getAmountTotal()
    {
        return $this->amountTotal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $amountTotal
     */
    public function setAmountTotal($amountTotal)
    {
        $this->amountTotal = $amountTotal;
    }

    /**
     * The total amount of the successful payments in the batch.
     *
     * @return AmountObject
     */
    public function getAmountSuccessful()
    {
        return $this->amountSuccessful;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $amountSuccessful
     */
    public function setAmountSuccessful($amountSuccessful)
    {
        $this->amountSuccessful = $amountSuccessful;
    }

    /**
     * The ID of the latest event for the payment batch.
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param int $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * The list of mutations that were made.
     *
     * @return PaymentApiObject[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentApiObject[] $payments
     */
    public function setPayments($payments)
    {
        $this->payments = $payments;
    }

    /**
     * The entries that are part of this batch.
     *
     * @return PaymentBatchEntryApiObject[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentBatchEntryApiObject[] $entries
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->monetaryAccountId)) {
            return false;
        }

        if (!is_null($this->executionType)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->label)) {
            return false;
        }

        if (!is_null($this->amountTotal)) {
            return false;
        }

        if (!is_null($this->amountSuccessful)) {
            return false;
        }

        if (!is_null($this->eventId)) {
            return false;
        }

        if (!is_null($this->payments)) {
            return false;
        }

        if (!is_null($this->entries)) {
            return false;
        }

        return true;
    }
}
