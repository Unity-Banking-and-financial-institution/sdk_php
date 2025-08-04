<?php
namespace bunq\Model\Generated\Endpoint;

use bunq\Model\Core\BunqModel;
use bunq\Model\Generated\Object\AmountObject;
use bunq\Model\Generated\Object\LabelMonetaryAccountObject;
use bunq\Model\Generated\Object\LabelUserObject;
use bunq\Model\Generated\Object\PointerObject;
use bunq\Model\Generated\Object\RegistryMembershipSettingObject;

/**
 * View for RegistryMembership.
 *
 * @generated
 */
class RegistryMembershipApiObject extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_UUID = 'uuid';
    const FIELD_ALIAS = 'alias';
    const FIELD_STATUS = 'status';
    const FIELD_AUTO_ADD_CARD_TRANSACTION = 'auto_add_card_transaction';
    const FIELD_SETTING = 'setting';
    const FIELD_MEMBERSHIP_TICOUNT_ID = 'membership_ticount_id';

    /**
     * The UUID of the membership.
     *
     * @var string
     */
    protected $uuid;

    /**
     * The LabelMonetaryAccount of the user who belongs to this RegistryMembership.
     *
     * @var LabelMonetaryAccountObject
     */
    protected $alias;

    /**
     * The balance of this RegistryMembership.
     *
     * @var AmountObject
     */
    protected $balance;

    /**
     * The total amount spent of this RegistryMembership.
     *
     * @var AmountObject
     */
    protected $totalAmountSpent;

    /**
     * The status of the RegistryMembership.
     *
     * @var string
     */
    protected $status;

    /**
     * The status of the settlement of the Registry. Can be PENDING or SETTLED.
     *
     * @var string
     */
    protected $statusSettlement;

    /**
     * The setting for adding automatically card transactions to the registry. (deprecated)
     *
     * @var string
     */
    protected $autoAddCardTransaction;

    /**
     * Registry membership setting.
     *
     * @var RegistryMembershipSettingObject
     */
    protected $setting;

    /**
     * The registry id.
     *
     * @var int
     */
    protected $registryId;

    /**
     * The registry title.
     *
     * @var string
     */
    protected $registryTitle;

    /**
     * For dinner and grocery expenses.
     *
     * @var string
     */
    protected $registryDescription;

    /**
     * The label of the user that sent the invite.
     *
     * @var LabelUserObject
     */
    protected $invitor;

    /**
     * The UUID of the membership. May be used as an alternative to the alias field to identify specific memberships, as the
     * alias may be updated server-side, whereas the UUID will remain consistent.
     *
     * @var string|null
     */
    protected $uuidFieldForRequest;

    /**
     * The Alias of the party we are inviting to the Registry.
     *
     * @var PointerObject
     */
    protected $aliasFieldForRequest;

    /**
     * The status of the RegistryMembership.
     *
     * @var string|null
     */
    protected $statusFieldForRequest;

    /**
     * The setting for adding automatically card transactions to the registry. (deprecated)
     *
     * @var string|null
     */
    protected $autoAddCardTransactionFieldForRequest;

    /**
     * Registry membership setting.
     *
     * @var RegistryMembershipSettingObject|null
     */
    protected $settingFieldForRequest;

    /**
     * The original TricountId of the membership for backwards compatibility. May be used as an alternative to the UUID to
     * identify specific memberships to allow clients to sync changes made offline before the Tricount migration.
     *
     * @var int|null
     */
    protected $membershipTicountIdFieldForRequest;

    /**
     * @param PointerObject $alias The Alias of the party we are inviting to the Registry.
     * @param string|null $uuid The UUID of the membership. May be used as an alternative to the alias field to identify
     * specific memberships, as the alias may be updated server-side, whereas the UUID will remain consistent.
     * @param string|null $status The status of the RegistryMembership.
     * @param string|null $autoAddCardTransaction The setting for adding automatically card transactions to the registry.
     * (deprecated)
     * @param RegistryMembershipSettingObject|null $setting Registry membership setting.
     * @param int|null $membershipTicountId The original TricountId of the membership for backwards compatibility. May be used
     * as an alternative to the UUID to identify specific memberships to allow clients to sync changes made offline before the
     * Tricount migration.
     */
    public function __construct(PointerObject  $alias, string  $uuid = null, string  $status = null, string  $autoAddCardTransaction = null, RegistryMembershipSettingObject  $setting = null, int  $membershipTicountId = null)
    {
        $this->uuidFieldForRequest = $uuid;
        $this->aliasFieldForRequest = $alias;
        $this->statusFieldForRequest = $status;
        $this->autoAddCardTransactionFieldForRequest = $autoAddCardTransaction;
        $this->settingFieldForRequest = $setting;
        $this->membershipTicountIdFieldForRequest = $membershipTicountId;
    }

    /**
     * The UUID of the membership.
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * The LabelMonetaryAccount of the user who belongs to this RegistryMembership.
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
     * The balance of this RegistryMembership.
     *
     * @return AmountObject
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * The total amount spent of this RegistryMembership.
     *
     * @return AmountObject
     */
    public function getTotalAmountSpent()
    {
        return $this->totalAmountSpent;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param AmountObject $totalAmountSpent
     */
    public function setTotalAmountSpent($totalAmountSpent)
    {
        $this->totalAmountSpent = $totalAmountSpent;
    }

    /**
     * The status of the RegistryMembership.
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
     * The status of the settlement of the Registry. Can be PENDING or SETTLED.
     *
     * @return string
     */
    public function getStatusSettlement()
    {
        return $this->statusSettlement;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $statusSettlement
     */
    public function setStatusSettlement($statusSettlement)
    {
        $this->statusSettlement = $statusSettlement;
    }

    /**
     * The setting for adding automatically card transactions to the registry. (deprecated)
     *
     * @return string
     */
    public function getAutoAddCardTransaction()
    {
        return $this->autoAddCardTransaction;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $autoAddCardTransaction
     */
    public function setAutoAddCardTransaction($autoAddCardTransaction)
    {
        $this->autoAddCardTransaction = $autoAddCardTransaction;
    }

    /**
     * Registry membership setting.
     *
     * @return RegistryMembershipSettingObject
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param RegistryMembershipSettingObject $setting
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
    }

    /**
     * The registry id.
     *
     * @return int
     */
    public function getRegistryId()
    {
        return $this->registryId;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param int $registryId
     */
    public function setRegistryId($registryId)
    {
        $this->registryId = $registryId;
    }

    /**
     * The registry title.
     *
     * @return string
     */
    public function getRegistryTitle()
    {
        return $this->registryTitle;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $registryTitle
     */
    public function setRegistryTitle($registryTitle)
    {
        $this->registryTitle = $registryTitle;
    }

    /**
     * For dinner and grocery expenses.
     *
     * @return string
     */
    public function getRegistryDescription()
    {
        return $this->registryDescription;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param string $registryDescription
     */
    public function setRegistryDescription($registryDescription)
    {
        $this->registryDescription = $registryDescription;
    }

    /**
     * The label of the user that sent the invite.
     *
     * @return LabelUserObject
     */
    public function getInvitor()
    {
        return $this->invitor;
    }

    /**
     * @deprecated User should not be able to set values via setters, use constructor.
     *
     * @param LabelUserObject $invitor
     */
    public function setInvitor($invitor)
    {
        $this->invitor = $invitor;
    }

    /**
     * @return bool
     */
    public function isAllFieldNull()
    {
        if (!is_null($this->uuid)) {
            return false;
        }

        if (!is_null($this->alias)) {
            return false;
        }

        if (!is_null($this->balance)) {
            return false;
        }

        if (!is_null($this->totalAmountSpent)) {
            return false;
        }

        if (!is_null($this->status)) {
            return false;
        }

        if (!is_null($this->statusSettlement)) {
            return false;
        }

        if (!is_null($this->autoAddCardTransaction)) {
            return false;
        }

        if (!is_null($this->setting)) {
            return false;
        }

        if (!is_null($this->registryId)) {
            return false;
        }

        if (!is_null($this->registryTitle)) {
            return false;
        }

        if (!is_null($this->registryDescription)) {
            return false;
        }

        if (!is_null($this->invitor)) {
            return false;
        }

        return true;
    }
}
