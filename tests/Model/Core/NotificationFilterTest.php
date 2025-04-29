<?php
namespace bunq\test\Model\Core;

use bunq\Context\BunqContext;
use bunq\Model\Core\NotificationFilterPushUserInternal;
use bunq\Model\Core\NotificationFilterUrlMonetaryAccountInternal;
use bunq\Model\Core\NotificationFilterUrlUserInternal;
use bunq\Model\Generated\Endpoint\MonetaryAccountBankApiObject;
use bunq\Model\Generated\Endpoint\TreeProgressApiObject;
use bunq\Model\Generated\Object\NotificationFilterPushObject;
use bunq\Model\Generated\Object\NotificationFilterUrlObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  NotificationFilterUrlMonetaryAccountInternal
 *  NotificationFilterUrlUserInternal
 *  NotificationFilterPushUserInternal
 */
class NotificationFilterTest extends BunqSdkTestBase
{
    /**
     * Filter constants.
     */
    const FILTER_CATEGORY_MUTATION = 'MUTATION';
    const FILTER_CALLBACK_URL = 'https://test.com/callback';

    /**
     * Test NotificationFilterUrlMonetaryAccount creation.
     */
    public function testNotificationFilterUrlMonetaryAccount()
    {
        $notification = new NotificationFilterUrlObject(self::FILTER_CATEGORY_MUTATION, self::FILTER_CALLBACK_URL);
        $allCreatedNotificationFilter = NotificationFilterUrlMonetaryAccountInternal::createWithListResponse(
            $this->getPrimaryMonetaryAccount()->getId(),
            [$notification]
        )->getValue();

        static::assertTrue(is_array($allCreatedNotificationFilter));
        static::assertTrue(count($allCreatedNotificationFilter) === 1);
    }

    /**
     * Test NotificationFilterUrlUser creation.
     */
    public function testNotificationFilterUrlUser()
    {
        $notification = new NotificationFilterUrlObject(self::FILTER_CATEGORY_MUTATION, self::FILTER_CALLBACK_URL);
        $allCreatedNotificationFilter = NotificationFilterUrlUserInternal::createWithListResponse(
            [$notification]
        )->getValue();

        static::assertTrue(is_array($allCreatedNotificationFilter));
        static::assertTrue(count($allCreatedNotificationFilter) === 1);
    }
    /**
     * Test NotificationFilterPushUser creation.
     */
    public function testNotificationFilterPushUser()
    {
        $notification = new NotificationFilterPushObject(self::FILTER_CATEGORY_MUTATION);

        $allCreatedNotificationFilter = NotificationFilterPushUserInternal::createWithListResponse(
            [$notification]
        )->getValue();

        static::assertTrue(is_array($allCreatedNotificationFilter));
        static::assertTrue(count($allCreatedNotificationFilter) > 1);
    }

    /**
     * @return MonetaryAccountBankApiObject
     */
    private function getPrimaryMonetaryAccount(): MonetaryAccountBankApiObject
    {
        return BunqContext::getUserContext()->getPrimaryMonetaryAccount();
    }
}
