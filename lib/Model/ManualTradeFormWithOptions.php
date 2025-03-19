<?php
/**
 * ManualTradeFormWithOptions
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
 * ManualTradeFormWithOptions Class Doc Comment
 *
 * @category Class
 * @description Inputs for placing an order with the brokerage.
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class ManualTradeFormWithOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManualTradeFormWithOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'action' => '\SnapTrade\Model\ActionStrictWithOptions',
        'universal_symbol_id' => 'string',
        'symbol' => 'string',
        'order_type' => '\SnapTrade\Model\OrderTypeStrict',
        'time_in_force' => '\SnapTrade\Model\TimeInForceStrict',
        'price' => 'float',
        'stop' => 'float',
        'units' => 'float',
        'notional_value' => '\SnapTrade\Model\ManualTradeFormNotionalValue'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => 'uuid',
        'action' => null,
        'universal_symbol_id' => null,
        'symbol' => null,
        'order_type' => null,
        'time_in_force' => null,
        'price' => null,
        'stop' => null,
        'units' => null,
        'notional_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'account_id' => false,
		'action' => false,
		'universal_symbol_id' => true,
		'symbol' => true,
		'order_type' => false,
		'time_in_force' => false,
		'price' => true,
		'stop' => true,
		'units' => true,
		'notional_value' => true
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
        'account_id' => 'account_id',
        'action' => 'action',
        'universal_symbol_id' => 'universal_symbol_id',
        'symbol' => 'symbol',
        'order_type' => 'order_type',
        'time_in_force' => 'time_in_force',
        'price' => 'price',
        'stop' => 'stop',
        'units' => 'units',
        'notional_value' => 'notional_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'action' => 'setAction',
        'universal_symbol_id' => 'setUniversalSymbolId',
        'symbol' => 'setSymbol',
        'order_type' => 'setOrderType',
        'time_in_force' => 'setTimeInForce',
        'price' => 'setPrice',
        'stop' => 'setStop',
        'units' => 'setUnits',
        'notional_value' => 'setNotionalValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'action' => 'getAction',
        'universal_symbol_id' => 'getUniversalSymbolId',
        'symbol' => 'getSymbol',
        'order_type' => 'getOrderType',
        'time_in_force' => 'getTimeInForce',
        'price' => 'getPrice',
        'stop' => 'getStop',
        'units' => 'getUnits',
        'notional_value' => 'getNotionalValue'
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('universal_symbol_id', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('order_type', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('stop', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('notional_value', $data ?? [], null);
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

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['order_type'] === null) {
            $invalidProperties[] = "'order_type' can't be null";
        }
        if ($this->container['time_in_force'] === null) {
            $invalidProperties[] = "'time_in_force' can't be null";
        }
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
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id Unique identifier for the connected brokerage account. This is the UUID used to reference the account in SnapTrade.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {

        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \SnapTrade\Model\ActionStrictWithOptions
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \SnapTrade\Model\ActionStrictWithOptions $action action
     *
     * @return self
     */
    public function setAction($action)
    {

        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets universal_symbol_id
     *
     * @return string|null
     */
    public function getUniversalSymbolId()
    {
        return $this->container['universal_symbol_id'];
    }

    /**
     * Sets universal_symbol_id
     *
     * @param string|null $universal_symbol_id The universal symbol ID of the security to trade. Must be 'null' if `symbol` is provided, otherwise must be provided.
     *
     * @return self
     */
    public function setUniversalSymbolId($universal_symbol_id)
    {

        if (is_null($universal_symbol_id)) {
            array_push($this->openAPINullablesSetToNull, 'universal_symbol_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('universal_symbol_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['universal_symbol_id'] = $universal_symbol_id;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string|null $symbol The security's trading ticker symbol. This currently supports stock symbols and Options symbols in the 21 character OCC format. For example \"AAPL  131124C00240000\" represents a call option on AAPL expiring on 2024-11-13 with a strike price of $240. For more information on the OCC format, see [here](https://en.wikipedia.org/wiki/Option_symbol#OCC_format). If 'symbol' is provided, then 'universal_symbol_id' must be 'null'.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {

        if (is_null($symbol)) {
            array_push($this->openAPINullablesSetToNull, 'symbol');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('symbol', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return \SnapTrade\Model\OrderTypeStrict
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param \SnapTrade\Model\OrderTypeStrict $order_type order_type
     *
     * @return self
     */
    public function setOrderType($order_type)
    {

        if (is_null($order_type)) {
            throw new \InvalidArgumentException('non-nullable order_type cannot be null');
        }

        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return \SnapTrade\Model\TimeInForceStrict
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param \SnapTrade\Model\TimeInForceStrict $time_in_force time_in_force
     *
     * @return self
     */
    public function setTimeInForce($time_in_force)
    {

        if (is_null($time_in_force)) {
            throw new \InvalidArgumentException('non-nullable time_in_force cannot be null');
        }

        $this->container['time_in_force'] = $time_in_force;

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
     * @param float|null $price The limit price for `Limit` and `StopLimit` orders.
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
     * Gets stop
     *
     * @return float|null
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     *
     * @param float|null $stop The price at which a stop order is triggered for `Stop` and `StopLimit` orders.
     *
     * @return self
     */
    public function setStop($stop)
    {

        if (is_null($stop)) {
            array_push($this->openAPINullablesSetToNull, 'stop');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stop', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['stop'] = $stop;

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
     * @param float|null $units For Equity orders, this represents the number of shares for the order. This can be a decimal for fractional orders. Must be `null` if `notional_value` is provided. If placing an Option order, this field represents the number of contracts to buy or sell. (e.g., 1 contract = 100 shares).
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
     * Gets notional_value
     *
     * @return \SnapTrade\Model\ManualTradeFormNotionalValue|null
     */
    public function getNotionalValue()
    {
        return $this->container['notional_value'];
    }

    /**
     * Sets notional_value
     *
     * @param \SnapTrade\Model\ManualTradeFormNotionalValue|null $notional_value notional_value
     *
     * @return self
     */
    public function setNotionalValue($notional_value)
    {

        if (is_null($notional_value)) {
            array_push($this->openAPINullablesSetToNull, 'notional_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notional_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['notional_value'] = $notional_value;

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


