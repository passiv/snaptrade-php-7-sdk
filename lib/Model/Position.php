<?php
/**
 * Position
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapTrade
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SnapTrade
 *
 * Connect brokerage accounts to your app for live positions and trading
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@snaptrade.com
 * Generated by: https://konfigthis.com
 */


namespace SnapTrade\Model;

use \ArrayAccess;
use \SnapTrade\ObjectSerializer;

/**
 * Position Class Doc Comment
 *
 * @category Class
 * @description Account Position
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class Position implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Position';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => '\SnapTrade\Model\PositionSymbol',
        'units' => 'float',
        'price' => 'float',
        'open_pnl' => 'float',
        'fractional_units' => 'float',
        'average_purchase_price' => 'float',
        'book_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'symbol' => null,
        'units' => null,
        'price' => null,
        'open_pnl' => null,
        'fractional_units' => null,
        'average_purchase_price' => null,
        'book_price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'symbol' => false,
		'units' => true,
		'price' => true,
		'open_pnl' => true,
		'fractional_units' => true,
		'average_purchase_price' => true,
		'book_price' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'symbol' => 'symbol',
        'units' => 'units',
        'price' => 'price',
        'open_pnl' => 'open_pnl',
        'fractional_units' => 'fractional_units',
        'average_purchase_price' => 'average_purchase_price',
        'book_price' => 'book_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'units' => 'setUnits',
        'price' => 'setPrice',
        'open_pnl' => 'setOpenPnl',
        'fractional_units' => 'setFractionalUnits',
        'average_purchase_price' => 'setAveragePurchasePrice',
        'book_price' => 'setBookPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'units' => 'getUnits',
        'price' => 'getPrice',
        'open_pnl' => 'getOpenPnl',
        'fractional_units' => 'getFractionalUnits',
        'average_purchase_price' => 'getAveragePurchasePrice',
        'book_price' => 'getBookPrice'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('open_pnl', $data ?? [], null);
        $this->setIfExists('fractional_units', $data ?? [], null);
        $this->setIfExists('average_purchase_price', $data ?? [], null);
        $this->setIfExists('book_price', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets symbol
     *
     * @return \SnapTrade\Model\PositionSymbol|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param \SnapTrade\Model\PositionSymbol|null $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {

        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }

        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets units
     *
     * @return float|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float|null $units units
     *
     * @return self
     */
    public function setUnits($units)
    {

        if (is_null($units)) {
            array_push($this->openAPINullablesSetToNull, 'units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Last known market price for the symbol
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets open_pnl
     *
     * @return float|null
     */
    public function getOpenPnl()
    {
        return $this->container['open_pnl'];
    }

    /**
     * Sets open_pnl
     *
     * @param float|null $open_pnl open_pnl
     *
     * @return self
     */
    public function setOpenPnl($open_pnl)
    {

        if (is_null($open_pnl)) {
            array_push($this->openAPINullablesSetToNull, 'open_pnl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('open_pnl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['open_pnl'] = $open_pnl;

        return $this;
    }

    /**
     * Gets fractional_units
     *
     * @return float|null
     */
    public function getFractionalUnits()
    {
        return $this->container['fractional_units'];
    }

    /**
     * Sets fractional_units
     *
     * @param float|null $fractional_units Deprecated, use the units field for both fractional and integer units going forward
     *
     * @return self
     */
    public function setFractionalUnits($fractional_units)
    {

        if (is_null($fractional_units)) {
            array_push($this->openAPINullablesSetToNull, 'fractional_units');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fractional_units', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['fractional_units'] = $fractional_units;

        return $this;
    }

    /**
     * Gets average_purchase_price
     *
     * @return float|null
     */
    public function getAveragePurchasePrice()
    {
        return $this->container['average_purchase_price'];
    }

    /**
     * Sets average_purchase_price
     *
     * @param float|null $average_purchase_price Average purchase price for this position. Either returned by the underlying broker or calculated using historical transactions.
     *
     * @return self
     */
    public function setAveragePurchasePrice($average_purchase_price)
    {

        if (is_null($average_purchase_price)) {
            array_push($this->openAPINullablesSetToNull, 'average_purchase_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('average_purchase_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['average_purchase_price'] = $average_purchase_price;

        return $this;
    }

    /**
     * Gets book_price
     *
     * @return float|null
     */
    public function getBookPrice()
    {
        return $this->container['book_price'];
    }

    /**
     * Sets book_price
     *
     * @param float|null $book_price The book price of the asset
     *
     * @return self
     */
    public function setBookPrice($book_price)
    {

        if (is_null($book_price)) {
            array_push($this->openAPINullablesSetToNull, 'book_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('book_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['book_price'] = $book_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


