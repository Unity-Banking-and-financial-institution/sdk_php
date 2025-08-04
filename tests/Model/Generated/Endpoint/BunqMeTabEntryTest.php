<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Model\Generated\Endpoint\BunqMeTabApiObject;
use bunq\Model\Generated\Endpoint\BunqMeTabEntryApiObject;
use bunq\Model\Generated\Object\AmountObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 * BunqMeTab
 * BunqMeTabEntry
 */
class BunqMeTabEntryTest extends BunqSdkTestBase
{
    /**
     * Test constants.
     */
    const ENTRY_DESCRIPTION = 'test';

    /**
     */
    public function testBunqMeTab()
    {
        $response = BunqMeTabApiObject::create(
            new BunqMeTabEntryApiObject(
                amountInquired: new AmountObject(self::PAYMENT_AMOUNT_DEFAULT, self::MONETARY_ACCOUNT_CURRENCY),
                description: self::ENTRY_DESCRIPTION
            )
        );

        $tab = BunqMeTabApiObject::get($response->getValue());

        static::assertNotNull($tab);
    }
}
