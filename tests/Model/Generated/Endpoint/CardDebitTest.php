<?php
namespace bunq\test\Model\Generated\Endpoint;

use bunq\Context\BunqContext;
use bunq\Model\Generated\Endpoint\CardApiObject;
use bunq\Model\Generated\Endpoint\CardDebitApiObject;
use bunq\Model\Generated\Endpoint\CardNameApiObject;
use bunq\Model\Generated\Object\CardPinAssignmentObject;
use bunq\test\BunqSdkTestBase;

/**
 * Tests:
 *  CardName
 *  User
 *  Card
 *  CardDebit
 */
class CardDebitTest extends BunqSdkTestBase
{
    /**
     *  Pin code that the card will be ordered with.
     */
    const CARD_PIN_CODE = '4045';
    const CARD_PIN_CODE_ASSIGNMENT = 'PRIMARY';
    const CARD_ROUTING_TYPE = 'MANUAL';

    /**
     * Card type.
     */
    const CARD_TYPE_MAESTRO = 'MASTERCARD';
    const CARD_PRODUCT_TYPE_MASTERCARD_DEBIT = 'MASTERCARD_DEBIT';

    /**
     * Product type.
     */
    const PRODUCT_TYPE_MASTERCARD_DEBIT = 'MASTERCARD_DEBIT';

    /**
     * The prefix for the second line on the card.
     */
    const CARD_SECOND_LINE_PREFIX = 'card-';

    /**
     *  Index number of the first item in an array.
     */
    const INDEX_FIRST = 0;

    /**
     *  Index number of the second item in an array.
     */
    const INDEX_SECOND = 1;

    /**
     * @var string
     */
    private static $nameOnCard;

    /**
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        $cardNamesAllowed = CardNameApiObject::listing()->getValue();
        static::$nameOnCard = $cardNamesAllowed[self::INDEX_FIRST]->getPossibleCardNameArray();
    }

    /**
     * Test if the user can order a new card with an unique second line.
     */
    public function testOrderingDebitCard()
    {
        $cardDebit = CardDebitApiObject::create(
            $this->generateCardDescription(),
            static::$nameOnCard[self::INDEX_FIRST],
            self::CARD_TYPE_MAESTRO,
            self::CARD_PRODUCT_TYPE_MASTERCARD_DEBIT,
            $this->getUserAlias()->getName(),
            $this->getUserAlias(),
            [
                new CardPinAssignmentObject(
                    self::CARD_PIN_CODE_ASSIGNMENT,
                    self::CARD_ROUTING_TYPE,
                    self::CARD_PIN_CODE,
                    BunqContext::getUserContext()->getPrimaryMonetaryAccount()->getId()
                ),
            ],
        )->getValue();
        $card = CardApiObject::get($cardDebit->getId())->getValue();

        static::assertEquals($card->getNameOnCard(), static::$nameOnCard[self::INDEX_FIRST]);
    }

    /**
     * @param int $length
     *
     * @return string
     */
    private function generateCardDescription($length = 6): string
    {
        $allCharacter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $mixedString = str_shuffle(str_repeat($allCharacter, ceil($length / strlen($allCharacter))));

        return self::CARD_SECOND_LINE_PREFIX . substr($mixedString, self::INDEX_SECOND, $length);
    }
}
