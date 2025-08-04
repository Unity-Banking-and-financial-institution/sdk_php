<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Context\ApiContext;
use bunq\Exception\BunqException;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\Core\AnchorObjectInterface;
use bunq\Model\Core\BunqModel;

/**
 * Payments that are not processed yet.
 *
 * @generated
 */
class PaymentDelayedApiObject extends BunqModel implements AnchorObjectInterface
{
    /**
     * Error constants.
     */
    const ERROR_NULL_FIELDS = 'All fields of an extended model or object are null.';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_UPDATE = 'user/%s/monetary-account/%s/payment-delayed/%s';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/payment-delayed/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/payment-delayed';

    /**
     * Object type.
     */
    const OBJECT_TYPE_GET = 'PaymentDelayed';

    /**
     * @var PaymentDelayedIncomingApiObject
     */
    protected $paymentDelayedIncoming;

    /**
     * @var PaymentDelayedOutgoingApiObject
     */
    protected $paymentDelayedOutgoing;

    /**
     * @param int $paymentDelayedId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponseInt
     */
    public static function update(int $paymentDelayedId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponseInt
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->put(
            vsprintf(
                self::ENDPOINT_URL_UPDATE,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentDelayedId]
            ),
            [],
            $customHeaders
        );

        return BunqResponseInt::castFromBunqResponse(
            static::processForId($responseRaw)
        );
    }

    /**
     * @param int $paymentDelayedId
     * @param int|null $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentDelayed
     */
    public static function get(int $paymentDelayedId, int $monetaryAccountId = null, array $customHeaders = []): BunqResponsePaymentDelayed
    {
        $apiClient = new ApiClient(static::getApiContext());
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [static::determineUserId(), static::determineMonetaryAccountId($monetaryAccountId), $paymentDelayedId]
            ),
            [],
            $customHeaders
        );

        return BunqResponsePaymentDelayed::castFromBunqResponse(
            static::fromJson($responseRaw)
        );
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word and cannot be used as constants, class names,
     * function or method names.
     *
     * @param int|null $monetaryAccountId
     * @param string[] $params
     * @param string[] $customHeaders
     *
     * @return BunqResponsePaymentDelayedApiObjectList
     */
    public static function listing(int $monetaryAccountId = null, array $params = [], array $customHeaders = []): BunqResponsePaymentDelayedApiObjectList
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

        return BunqResponsePaymentDelayedApiObjectList::castFromBunqResponse(
            static::fromJsonList($responseRaw)
        );
    }

    /**
     * @return PaymentDelayedIncomingApiObject
     */
    public function getPaymentDelayedIncoming()
    {
        return $this->paymentDelayedIncoming;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentDelayedIncomingApiObject $paymentDelayedIncoming
     */
    public function setPaymentDelayedIncoming($paymentDelayedIncoming)
    {
        $this->paymentDelayedIncoming = $paymentDelayedIncoming;
    }

    /**
     * @return PaymentDelayedOutgoingApiObject
     */
    public function getPaymentDelayedOutgoing()
    {
        return $this->paymentDelayedOutgoing;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param PaymentDelayedOutgoingApiObject $paymentDelayedOutgoing
     */
    public function setPaymentDelayedOutgoing($paymentDelayedOutgoing)
    {
        $this->paymentDelayedOutgoing = $paymentDelayedOutgoing;
    }

    /**
     * @return BunqModel
     * @throws BunqException
     */
    public function getReferencedObject()
    {
        if (!is_null($this->paymentDelayedIncoming)) {
            return $this->paymentDelayedIncoming;
        }

        if (!is_null($this->paymentDelayedOutgoing)) {
            return $this->paymentDelayedOutgoing;
        }

        throw new BunqException(self::ERROR_NULL_FIELDS);
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->paymentDelayedIncoming)) {
            return false;
        }

        if (!is_null($this->paymentDelayedOutgoing)) {
            return false;
        }

        return true;
    }
}
