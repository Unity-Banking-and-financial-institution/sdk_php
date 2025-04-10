<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\AvatarObject;

/**
 * Manage Partner Cashback Promotions.
 *
 * @generated
 */
class PartnerPromotionCashbackApiObject extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_PROMOTION_CODE = 'promotion_code';
    const FIELD_STATUS = 'status';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DATE_START = 'date_start';
    const FIELD_DATE_END = 'date_end';
    const FIELD_CURRENCY = 'currency';
    const FIELD_AMOUNT_CASHBACK_PER_TRANSACTION_MAXIMUM = 'amount_cashback_per_transaction_maximum';
    const FIELD_NUMBER_OF_TRANSACTION_MAXIMUM = 'number_of_transaction_maximum';
    const FIELD_AMOUNT_TRANSACTION_MINIMUM = 'amount_transaction_minimum';
    const FIELD_URL_TOGETHER = 'url_together';
    const FIELD_DEEPLINK = 'deeplink';
    const FIELD_PARTNER_NAME = 'partner_name';
    const FIELD_PARTNER_AVATAR_UUID = 'partner_avatar_uuid';
    const FIELD_PROMOTION_TITLE_SHORT = 'promotion_title_short';
    const FIELD_PROMOTION_TITLE_LONG = 'promotion_title_long';
    const FIELD_PROMOTION_DESCRIPTION = 'promotion_description';
    const FIELD_ALL_PARTNER_IDENTIFIER = 'all_partner_identifier';

    /**
     * The public UUID of the cashback promotion.
     *
     * @var string
     */
    protected $publicUuid;

    /**
     * The status of the cashback promotion.
     *
     * @var string
     */
    protected $status;

    /**
     * The promotion code used in signup to indicate the partner that referred the user.
     *
     * @var string
     */
    protected $promotionCode;

    /**
     * The amount of cashback per transaction, will not be higher than the amount of the transaction.
     *
     * @var AmountObject
     */
    protected $amountCashbackPerTransactionMaximum;

    /**
     * The maximum number of transactions that can be made.
     *
     * @var int
     */
    protected $numberOfTransactionMaximum;

    /**
     * The minimum amount of a transaction.
     *
     * @var AmountObject
     */
    protected $amountTransactionMinimum;

    /**
     * The URL to the Together page with FAQs about this promotion.
     *
     * @var string
     */
    protected $urlTogether;

    /**
     * The deeplink to the cashback promotion.
     *
     * @var string
     */
    protected $deeplink;

    /**
     * The name of the partner.
     *
     * @var string
     */
    protected $partnerName;

    /**
     * The avatar of the partner.
     *
     * @var AvatarObject
     */
    protected $partnerAvatar;

    /**
     * The short title of the promotion.
     *
     * @var string[]
     */
    protected $promotionTitleShort;

    /**
     * The long title of the promotion.
     *
     * @var string[]
     */
    protected $promotionTitleLong;

    /**
     * The description of the promotion.
     *
     * @var string[]
     */
    protected $promotionDescription;

    /**
     * The promotion code used in signup to indicate the partner that referred the user.
     *
     * @var string
     */
    protected $promotionCodeFieldForRequest;

    /**
     * The status of the cashback promotion.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The internal description displayed in the admin.
     *
     * @var string
     */
    protected $descriptionFieldForRequest;

    /**
     * The date this cashback promotion starts.
     *
     * @var string
     */
    protected $dateStartFieldForRequest;

    /**
     * The date this cashback promotion ends.
     *
     * @var string
     */
    protected $dateEndFieldForRequest;

    /**
     * The currency of the cashback promotion.
     *
     * @var string
     */
    protected $currencyFieldForRequest;

    /**
     * The amount of cashback per transaction, will not be higher than the amount of the transaction.
     *
     * @var AmountObject
     */
    protected $amountCashbackPerTransactionMaximumFieldForRequest;

    /**
     * The maximum number of transactions that can be made.
     *
     * @var int
     */
    protected $numberOfTransactionMaximumFieldForRequest;

    /**
     * The minimum amount of a transaction.
     *
     * @var AmountObject
     */
    protected $amountTransactionMinimumFieldForRequest;

    /**
     * The URL to the Together page with FAQs about this promotion.
     *
     * @var string|null
     */
    protected $urlTogetherFieldForRequest;

    /**
     * The deeplink to the cashback promotion.
     *
     * @var string
     */
    protected $deeplinkFieldForRequest;

    /**
     * The name of the partner to display.
     *
     * @var string
     */
    protected $partnerNameFieldForRequest;

    /**
     * The ID of the avatar of the partner.
     *
     * @var string
     */
    protected $partnerAvatarUuidFieldForRequest;

    /**
     * The short title of the promotion.
     *
     * @var string[]
     */
    protected $promotionTitleShortFieldForRequest;

    /**
     * The long title of the promotion.
     *
     * @var string[]
     */
    protected $promotionTitleLongFieldForRequest;

    /**
     * The description of the promotion.
     *
     * @var string[]
     */
    protected $promotionDescriptionFieldForRequest;

    /**
     * The identifiers to match the partner when payments are made to it.
     *
     * @var string[]|null
     */
    protected $allPartnerIdentifierFieldForRequest;

    /**
     * @param string $promotionCode The promotion code used in signup to indicate the partner that referred the user.
     * @param string $description The internal description displayed in the admin.
     * @param string $dateStart The date this cashback promotion starts.
     * @param string $dateEnd The date this cashback promotion ends.
     * @param string $currency The currency of the cashback promotion.
     * @param AmountObject $amountCashbackPerTransactionMaximum The amount of cashback per transaction, will not be higher than
     * the amount of the transaction.
     * @param int $numberOfTransactionMaximum The maximum number of transactions that can be made.
     * @param AmountObject $amountTransactionMinimum The minimum amount of a transaction.
     * @param string $deeplink The deeplink to the cashback promotion.
     * @param string $partnerName The name of the partner to display.
     * @param string $partnerAvatarUuid The ID of the avatar of the partner.
     * @param string[] $promotionTitleShort The short title of the promotion.
     * @param string[] $promotionTitleLong The long title of the promotion.
     * @param string[] $promotionDescription The description of the promotion.
     * @param string|null $status The status of the cashback promotion.
     * @param string|null $urlTogether The URL to the Together page with FAQs about this promotion.
     * @param string[]|null $allPartnerIdentifier The identifiers to match the partner when payments are made to it.
     */
    public function __construct(string  $promotionCode, string  $description, string  $dateStart, string  $dateEnd, string  $currency, AmountObject  $amountCashbackPerTransactionMaximum, int  $numberOfTransactionMaximum, AmountObject  $amountTransactionMinimum, string  $deeplink, string  $partnerName, string  $partnerAvatarUuid, array  $promotionTitleShort, array  $promotionTitleLong, array  $promotionDescription, string  $status = null, string  $urlTogether = null, array  $allPartnerIdentifier = null)
    {
        $this->promotionCodeFieldForRequest = $promotionCode;
        $this->statusFieldForRequest = $status;
        $this->descriptionFieldForRequest = $description;
        $this->dateStartFieldForRequest = $dateStart;
        $this->dateEndFieldForRequest = $dateEnd;
        $this->currencyFieldForRequest = $currency;
        $this->amountCashbackPerTransactionMaximumFieldForRequest = $amountCashbackPerTransactionMaximum;
        $this->numberOfTransactionMaximumFieldForRequest = $numberOfTransactionMaximum;
        $this->amountTransactionMinimumFieldForRequest = $amountTransactionMinimum;
        $this->urlTogetherFieldForRequest = $urlTogether;
        $this->deeplinkFieldForRequest = $deeplink;
        $this->partnerNameFieldForRequest = $partnerName;
        $this->partnerAvatarUuidFieldForRequest = $partnerAvatarUuid;
        $this->promotionTitleShortFieldForRequest = $promotionTitleShort;
        $this->promotionTitleLongFieldForRequest = $promotionTitleLong;
        $this->promotionDescriptionFieldForRequest = $promotionDescription;
        $this->allPartnerIdentifierFieldForRequest = $allPartnerIdentifier;
    }

    /**
     * The public UUID of the cashback promotion.
     *
     * @return string
     */
    public function getPublicUuid()
    {
        return $this->publicUuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $publicUuid
     */
    public function setPublicUuid($publicUuid)
    {
        $this->publicUuid = $publicUuid;
    }

    /**
     * The status of the cashback promotion.
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
     * The promotion code used in signup to indicate the partner that referred the user.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $promotionCode
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
    }

    /**
     * The amount of cashback per transaction, will not be higher than the amount of the transaction.
     *
     * @return AmountObject
     */
    public function getAmountCashbackPerTransactionMaximum()
    {
        return $this->amountCashbackPerTransactionMaximum;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $amountCashbackPerTransactionMaximum
     */
    public function setAmountCashbackPerTransactionMaximum($amountCashbackPerTransactionMaximum)
    {
        $this->amountCashbackPerTransactionMaximum = $amountCashbackPerTransactionMaximum;
    }

    /**
     * The maximum number of transactions that can be made.
     *
     * @return int
     */
    public function getNumberOfTransactionMaximum()
    {
        return $this->numberOfTransactionMaximum;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param int $numberOfTransactionMaximum
     */
    public function setNumberOfTransactionMaximum($numberOfTransactionMaximum)
    {
        $this->numberOfTransactionMaximum = $numberOfTransactionMaximum;
    }

    /**
     * The minimum amount of a transaction.
     *
     * @return AmountObject
     */
    public function getAmountTransactionMinimum()
    {
        return $this->amountTransactionMinimum;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $amountTransactionMinimum
     */
    public function setAmountTransactionMinimum($amountTransactionMinimum)
    {
        $this->amountTransactionMinimum = $amountTransactionMinimum;
    }

    /**
     * The URL to the Together page with FAQs about this promotion.
     *
     * @return string
     */
    public function getUrlTogether()
    {
        return $this->urlTogether;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $urlTogether
     */
    public function setUrlTogether($urlTogether)
    {
        $this->urlTogether = $urlTogether;
    }

    /**
     * The deeplink to the cashback promotion.
     *
     * @return string
     */
    public function getDeeplink()
    {
        return $this->deeplink;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $deeplink
     */
    public function setDeeplink($deeplink)
    {
        $this->deeplink = $deeplink;
    }

    /**
     * The name of the partner.
     *
     * @return string
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $partnerName
     */
    public function setPartnerName($partnerName)
    {
        $this->partnerName = $partnerName;
    }

    /**
     * The avatar of the partner.
     *
     * @return AvatarObject
     */
    public function getPartnerAvatar()
    {
        return $this->partnerAvatar;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AvatarObject $partnerAvatar
     */
    public function setPartnerAvatar($partnerAvatar)
    {
        $this->partnerAvatar = $partnerAvatar;
    }

    /**
     * The short title of the promotion.
     *
     * @return string[]
     */
    public function getPromotionTitleShort()
    {
        return $this->promotionTitleShort;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string[] $promotionTitleShort
     */
    public function setPromotionTitleShort($promotionTitleShort)
    {
        $this->promotionTitleShort = $promotionTitleShort;
    }

    /**
     * The long title of the promotion.
     *
     * @return string[]
     */
    public function getPromotionTitleLong()
    {
        return $this->promotionTitleLong;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string[] $promotionTitleLong
     */
    public function setPromotionTitleLong($promotionTitleLong)
    {
        $this->promotionTitleLong = $promotionTitleLong;
    }

    /**
     * The description of the promotion.
     *
     * @return string[]
     */
    public function getPromotionDescription()
    {
        return $this->promotionDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string[] $promotionDescription
     */
    public function setPromotionDescription($promotionDescription)
    {
        $this->promotionDescription = $promotionDescription;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->publicUuid)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->promotionCode)) {
            return false;
        }

        if (!is_null($this->amountCashbackPerTransactionMaximum)) {
            return false;
        }

        if (!is_null($this->numberOfTransactionMaximum)) {
            return false;
        }

        if (!is_null($this->amountTransactionMinimum)) {
            return false;
        }

        if (!is_null($this->urlTogether)) {
            return false;
        }

        if (!is_null($this->deeplink)) {
            return false;
        }

        if (!is_null($this->partnerName)) {
            return false;
        }

        if (!is_null($this->partnerAvatar)) {
            return false;
        }

        if (!is_null($this->promotionTitleShort)) {
            return false;
        }

        if (!is_null($this->promotionTitleLong)) {
            return false;
        }

        if (!is_null($this->promotionDescription)) {
            return false;
        }

        return true;
    }
}
