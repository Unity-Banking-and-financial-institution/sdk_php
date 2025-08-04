<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Endpoint\RegistryMembershipApiObject;

/**
 * @generated
 */
class AllocationItemObject extends BunqModel
{
    /**
     * The type of the AllocationItem.
     *
     * @var string
     */
    protected $type;

    /**
     * The membership.
     *
     * @var RegistryMembershipApiObject
     */
    protected $membership;

    /**
     * The Amount of the AllocationItem.
     *
     * @var AmountObject
     */
    protected $amount;

    /**
     * The Amount of the AllocationItem in the local currency.
     *
     * @var AmountObject
     */
    protected $amountLocal;

    /**
     * The share ratio of the AllocationItem.
     *
     * @var int
     */
    protected $shareRatio;

    /**
     * The UUID of the RegistryMembership we are allocating money for. Can be provided instead of the "alias" field.
     *
     * @var string|null
     */
    protected $membershipUuidFieldForRequest;

    /**
     * The Tricount ID of the membership for backwards compatibility, to be able to handle changed made offline before the
     * Tricount migration, but synced to the backend after the Tricount migration.
     *
     * @var int|null
     */
    protected $membershipTricountIdFieldForRequest;

    /**
     * The Alias of the party we are allocating money for.
     *
     * @var PointerObject|null
     */
    protected $aliasFieldForRequest;

    /**
     * The type of the AllocationItem.
     *
     * @var string
     */
    protected $typeFieldForRequest;

    /**
     * The Amount of the AllocationItem. Required when type is AMOUNT. For type RATIO either provide it for all (preferred) or
     * none.
     *
     * @var AmountObject|null
     */
    protected $amountFieldForRequest;

    /**
     * The Amount of the AllocationItem in the local currency.
     *
     * @var AmountObject|null
     */
    protected $amountLocalFieldForRequest;

    /**
     * The share ratio of the AllocationItem.
     *
     * @var int|null
     */
    protected $shareRatioFieldForRequest;

    /**
     * @param string $type The type of the AllocationItem.
     * @param string|null $membershipUuid The UUID of the RegistryMembership we are allocating money for. Can be provided
     * instead of the "alias" field.
     * @param int|null $membershipTricountId The Tricount ID of the membership for backwards compatibility, to be able to
     * handle changed made offline before the Tricount migration, but synced to the backend after the Tricount migration.
     * @param PointerObject|null $alias The Alias of the party we are allocating money for.
     * @param AmountObject|null $amount The Amount of the AllocationItem. Required when type is AMOUNT. For type RATIO either
     * provide it for all (preferred) or none.
     * @param AmountObject|null $amountLocal The Amount of the AllocationItem in the local currency.
     * @param int|null $shareRatio The share ratio of the AllocationItem.
     */
    public function __construct(string  $type, string  $membershipUuid = null, int  $membershipTricountId = null, PointerObject  $alias = null, AmountObject  $amount = null, AmountObject  $amountLocal = null, int  $shareRatio = null)
    {
        $this->membershipUuidFieldForRequest = $membershipUuid;
        $this->membershipTricountIdFieldForRequest = $membershipTricountId;
        $this->aliasFieldForRequest = $alias;
        $this->typeFieldForRequest = $type;
        $this->amountFieldForRequest = $amount;
        $this->amountLocalFieldForRequest = $amountLocal;
        $this->shareRatioFieldForRequest = $shareRatio;
    }

    /**
     * The type of the AllocationItem.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The membership.
     *
     * @return RegistryMembershipApiObject
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param RegistryMembershipApiObject $membership
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;
    }

    /**
     * The Amount of the AllocationItem.
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
     * The Amount of the AllocationItem in the local currency.
     *
     * @return AmountObject
     */
    public function getAmountLocal()
    {
        return $this->amountLocal;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $amountLocal
     */
    public function setAmountLocal($amountLocal)
    {
        $this->amountLocal = $amountLocal;
    }

    /**
     * The share ratio of the AllocationItem.
     *
     * @return int
     */
    public function getShareRatio()
    {
        return $this->shareRatio;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param int $shareRatio
     */
    public function setShareRatio($shareRatio)
    {
        $this->shareRatio = $shareRatio;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->type)) {
            return false;
        }

        if (!is_null($this->membership)) {
            return false;
        }

        if (!is_null($this->amount)) {
            return false;
        }

        if (!is_null($this->amountLocal)) {
            return false;
        }

        if (!is_null($this->shareRatio)) {
            return false;
        }

        return true;
    }
}
