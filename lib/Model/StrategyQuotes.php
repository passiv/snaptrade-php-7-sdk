<?php
/**
 * StrategyQuotes
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
 * StrategyQuotes Class Doc Comment
 *
 * @category Class
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class StrategyQuotes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StrategyQuotes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'strategy' => '\SnapTrade\Model\OptionStrategy',
        'open_price' => 'float',
        'bid_price' => 'float',
        'ask_price' => 'float',
        'volatility' => 'float',
        'greek' => '\SnapTrade\Model\StrategyQuotesGreek'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'strategy' => null,
        'open_price' => null,
        'bid_price' => null,
        'ask_price' => null,
        'volatility' => null,
        'greek' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'strategy' => false,
		'open_price' => true,
		'bid_price' => true,
		'ask_price' => true,
		'volatility' => false,
		'greek' => false
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
        'strategy' => 'strategy',
        'open_price' => 'open_price',
        'bid_price' => 'bid_price',
        'ask_price' => 'ask_price',
        'volatility' => 'volatility',
        'greek' => 'greek'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'strategy' => 'setStrategy',
        'open_price' => 'setOpenPrice',
        'bid_price' => 'setBidPrice',
        'ask_price' => 'setAskPrice',
        'volatility' => 'setVolatility',
        'greek' => 'setGreek'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'strategy' => 'getStrategy',
        'open_price' => 'getOpenPrice',
        'bid_price' => 'getBidPrice',
        'ask_price' => 'getAskPrice',
        'volatility' => 'getVolatility',
        'greek' => 'getGreek'
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
        $this->setIfExists('strategy', $data ?? [], null);
        $this->setIfExists('open_price', $data ?? [], null);
        $this->setIfExists('bid_price', $data ?? [], null);
        $this->setIfExists('ask_price', $data ?? [], null);
        $this->setIfExists('volatility', $data ?? [], null);
        $this->setIfExists('greek', $data ?? [], null);
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
     * Gets strategy
     *
     * @return \SnapTrade\Model\OptionStrategy|null
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param \SnapTrade\Model\OptionStrategy|null $strategy strategy
     *
     * @return self
     */
    public function setStrategy($strategy)
    {

        if (is_null($strategy)) {
            throw new \InvalidArgumentException('non-nullable strategy cannot be null');
        }

        $this->container['strategy'] = $strategy;

        return $this;
    }

    /**
     * Gets open_price
     *
     * @return float|null
     */
    public function getOpenPrice()
    {
        return $this->container['open_price'];
    }

    /**
     * Sets open_price
     *
     * @param float|null $open_price Trade Price if limit or stop limit order
     *
     * @return self
     */
    public function setOpenPrice($open_price)
    {

        if (is_null($open_price)) {
            array_push($this->openAPINullablesSetToNull, 'open_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('open_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['open_price'] = $open_price;

        return $this;
    }

    /**
     * Gets bid_price
     *
     * @return float|null
     */
    public function getBidPrice()
    {
        return $this->container['bid_price'];
    }

    /**
     * Sets bid_price
     *
     * @param float|null $bid_price Trade Price if limit or stop limit order
     *
     * @return self
     */
    public function setBidPrice($bid_price)
    {

        if (is_null($bid_price)) {
            array_push($this->openAPINullablesSetToNull, 'bid_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bid_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['bid_price'] = $bid_price;

        return $this;
    }

    /**
     * Gets ask_price
     *
     * @return float|null
     */
    public function getAskPrice()
    {
        return $this->container['ask_price'];
    }

    /**
     * Sets ask_price
     *
     * @param float|null $ask_price Trade Price if limit or stop limit order
     *
     * @return self
     */
    public function setAskPrice($ask_price)
    {

        if (is_null($ask_price)) {
            array_push($this->openAPINullablesSetToNull, 'ask_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ask_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['ask_price'] = $ask_price;

        return $this;
    }

    /**
     * Gets volatility
     *
     * @return float|null
     */
    public function getVolatility()
    {
        return $this->container['volatility'];
    }

    /**
     * Sets volatility
     *
     * @param float|null $volatility volatility
     *
     * @return self
     */
    public function setVolatility($volatility)
    {

        if (is_null($volatility)) {
            throw new \InvalidArgumentException('non-nullable volatility cannot be null');
        }

        $this->container['volatility'] = $volatility;

        return $this;
    }

    /**
     * Gets greek
     *
     * @return \SnapTrade\Model\StrategyQuotesGreek|null
     */
    public function getGreek()
    {
        return $this->container['greek'];
    }

    /**
     * Sets greek
     *
     * @param \SnapTrade\Model\StrategyQuotesGreek|null $greek greek
     *
     * @return self
     */
    public function setGreek($greek)
    {

        if (is_null($greek)) {
            throw new \InvalidArgumentException('non-nullable greek cannot be null');
        }

        $this->container['greek'] = $greek;

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


