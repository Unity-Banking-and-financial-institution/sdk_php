<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\LabelUserObject;

/**
 * Manage the relation user details.
 *
 * @generated
 */
class RelationUserApiObject extends BunqModel
{
    /**
     * The user's ID.
     *
     * @var string
     */
    protected $userId;

    /**
     * The counter user's ID.
     *
     * @var string
     */
    protected $counterUserId;

    /**
     * The user's label.
     *
     * @var LabelUserObject
     */
    protected $labelUser;

    /**
     * The counter user's label.
     *
     * @var LabelUserObject
     */
    protected $counterLabelUser;

    /**
     * The requested relation type.
     *
     * @var string
     */
    protected $relationship;

    /**
     * The request's status, only for UPDATE.
     *
     * @var string
     */
    protected $status;

    /**
     * The account status of a user.
     *
     * @var string
     */
    protected $userStatus;

    /**
     * The account sub-status of the user.
     *
     * @var string
     */
    protected $userSubStatus;

    /**
     * The account verification status of the user.
     *
     * @var string
     */
    protected $userVerificationStatus;

    /**
     * The account sub-status of the counter user.
     *
     * @var string
     */
    protected $counterUserStatus;

    /**
     * The account sub-status of the counter user.
     *
     * @var string
     */
    protected $counterUserSubStatus;

    /**
     * The account verification status of the counter user.
     *
     * @var string
     */
    protected $counterUserVerificationStatus;

    /**
     * Tap to Pay settings for the company employee.
     *
     * @var CompanyEmployeeSettingAdyenCardTransactionApiObject
     */
    protected $companyEmployeeSettingAdyenCardTransaction;

    /**
     * Cards accessible by the company employee
     *
     * @var CompanyEmployeeCardApiObject[]
     */
    protected $allCompanyEmployeeCard;

    /**
     * The user's ID.
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * The counter user's ID.
     *
     * @return string
     */
    public function getCounterUserId()
    {
        return $this->counterUserId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $counterUserId
     */
    public function setCounterUserId($counterUserId)
    {
        $this->counterUserId = $counterUserId;
    }

    /**
     * The user's label.
     *
     * @return LabelUserObject
     */
    public function getLabelUser()
    {
        return $this->labelUser;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelUserObject $labelUser
     */
    public function setLabelUser($labelUser)
    {
        $this->labelUser = $labelUser;
    }

    /**
     * The counter user's label.
     *
     * @return LabelUserObject
     */
    public function getCounterLabelUser()
    {
        return $this->counterLabelUser;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelUserObject $counterLabelUser
     */
    public function setCounterLabelUser($counterLabelUser)
    {
        $this->counterLabelUser = $counterLabelUser;
    }

    /**
     * The requested relation type.
     *
     * @return string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * The request's status, only for UPDATE.
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
     * The account status of a user.
     *
     * @return string
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $userStatus
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
    }

    /**
     * The account sub-status of the user.
     *
     * @return string
     */
    public function getUserSubStatus()
    {
        return $this->userSubStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $userSubStatus
     */
    public function setUserSubStatus($userSubStatus)
    {
        $this->userSubStatus = $userSubStatus;
    }

    /**
     * The account verification status of the user.
     *
     * @return string
     */
    public function getUserVerificationStatus()
    {
        return $this->userVerificationStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $userVerificationStatus
     */
    public function setUserVerificationStatus($userVerificationStatus)
    {
        $this->userVerificationStatus = $userVerificationStatus;
    }

    /**
     * The account sub-status of the counter user.
     *
     * @return string
     */
    public function getCounterUserStatus()
    {
        return $this->counterUserStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $counterUserStatus
     */
    public function setCounterUserStatus($counterUserStatus)
    {
        $this->counterUserStatus = $counterUserStatus;
    }

    /**
     * The account sub-status of the counter user.
     *
     * @return string
     */
    public function getCounterUserSubStatus()
    {
        return $this->counterUserSubStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $counterUserSubStatus
     */
    public function setCounterUserSubStatus($counterUserSubStatus)
    {
        $this->counterUserSubStatus = $counterUserSubStatus;
    }

    /**
     * The account verification status of the counter user.
     *
     * @return string
     */
    public function getCounterUserVerificationStatus()
    {
        return $this->counterUserVerificationStatus;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $counterUserVerificationStatus
     */
    public function setCounterUserVerificationStatus($counterUserVerificationStatus)
    {
        $this->counterUserVerificationStatus = $counterUserVerificationStatus;
    }

    /**
     * Tap to Pay settings for the company employee.
     *
     * @return CompanyEmployeeSettingAdyenCardTransactionApiObject
     */
    public function getCompanyEmployeeSettingAdyenCardTransaction()
    {
        return $this->companyEmployeeSettingAdyenCardTransaction;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param CompanyEmployeeSettingAdyenCardTransactionApiObject $companyEmployeeSettingAdyenCardTransaction
     */
    public function setCompanyEmployeeSettingAdyenCardTransaction($companyEmployeeSettingAdyenCardTransaction)
    {
        $this->companyEmployeeSettingAdyenCardTransaction = $companyEmployeeSettingAdyenCardTransaction;
    }

    /**
     * Cards accessible by the company employee
     *
     * @return CompanyEmployeeCardApiObject[]
     */
    public function getAllCompanyEmployeeCard()
    {
        return $this->allCompanyEmployeeCard;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param CompanyEmployeeCardApiObject[] $allCompanyEmployeeCard
     */
    public function setAllCompanyEmployeeCard($allCompanyEmployeeCard)
    {
        $this->allCompanyEmployeeCard = $allCompanyEmployeeCard;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->userId)) {
            return false;
        }

        if (!is_null($this->counterUserId)) {
            return false;
        }

        if (!is_null($this->labelUser)) {
            return false;
        }

        if (!is_null($this->counterLabelUser)) {
            return false;
        }

        if (!is_null($this->relationship)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->userStatus)) {
            return false;
        }

        if (!is_null($this->userSubStatus)) {
            return false;
        }

        if (!is_null($this->userVerificationStatus)) {
            return false;
        }

        if (!is_null($this->counterUserStatus)) {
            return false;
        }

        if (!is_null($this->counterUserSubStatus)) {
            return false;
        }

        if (!is_null($this->counterUserVerificationStatus)) {
            return false;
        }

        if (!is_null($this->companyEmployeeSettingAdyenCardTransaction)) {
            return false;
        }

        if (!is_null($this->allCompanyEmployeeCard)) {
            return false;
        }

        return true;
    }
}
