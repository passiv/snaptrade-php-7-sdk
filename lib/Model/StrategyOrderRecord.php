<?php
/**
 * StrategyOrderRecord
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
 * StrategyOrderRecord Class Doc Comment
 *
 * @category Class
 * @description Strategy order record
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class StrategyOrderRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StrategyOrderRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'strategy' => '\SnapTrade\Model\OptionStrategy',
        'status' => 'string',
        'filled_quantity' => 'float',
        'open_quantity' => 'float',
        'closed_quantity' => 'float',
        'order_type' => 'string',
        'time_in_force' => 'string',
        'limit_price' => 'float',
        'execution_price' => 'float',
        'time_placed' => 'string',
        'time_updated' => 'string'
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
        'status' => null,
        'filled_quantity' => null,
        'open_quantity' => null,
        'closed_quantity' => null,
        'order_type' => null,
        'time_in_force' => null,
        'limit_price' => null,
        'execution_price' => null,
        'time_placed' => null,
        'time_updated' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'strategy' => false,
		'status' => false,
		'filled_quantity' => false,
		'open_quantity' => false,
		'closed_quantity' => false,
		'order_type' => true,
		'time_in_force' => false,
		'limit_price' => true,
		'execution_price' => true,
		'time_placed' => false,
		'time_updated' => false
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
        'status' => 'status',
        'filled_quantity' => 'filled_quantity',
        'open_quantity' => 'open_quantity',
        'closed_quantity' => 'closed_quantity',
        'order_type' => 'order_type',
        'time_in_force' => 'time_in_force',
        'limit_price' => 'limit_price',
        'execution_price' => 'execution_price',
        'time_placed' => 'time_placed',
        'time_updated' => 'time_updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'strategy' => 'setStrategy',
        'status' => 'setStatus',
        'filled_quantity' => 'setFilledQuantity',
        'open_quantity' => 'setOpenQuantity',
        'closed_quantity' => 'setClosedQuantity',
        'order_type' => 'setOrderType',
        'time_in_force' => 'setTimeInForce',
        'limit_price' => 'setLimitPrice',
        'execution_price' => 'setExecutionPrice',
        'time_placed' => 'setTimePlaced',
        'time_updated' => 'setTimeUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'strategy' => 'getStrategy',
        'status' => 'getStatus',
        'filled_quantity' => 'getFilledQuantity',
        'open_quantity' => 'getOpenQuantity',
        'closed_quantity' => 'getClosedQuantity',
        'order_type' => 'getOrderType',
        'time_in_force' => 'getTimeInForce',
        'limit_price' => 'getLimitPrice',
        'execution_price' => 'getExecutionPrice',
        'time_placed' => 'getTimePlaced',
        'time_updated' => 'getTimeUpdated'
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

    public const STATUS_PENDING = 'PENDING';
    public const STATUS_ACCEPTED = 'ACCEPTED';
    public const STATUS_FAILED = 'FAILED';
    public const STATUS_REJECTED = 'REJECTED';
    public const STATUS_CANCELED = 'CANCELED';
    public const STATUS_PARTIAL_CANCELED = 'PARTIAL_CANCELED';
    public const STATUS_CANCEL_PENDING = 'CANCEL_PENDING';
    public const STATUS_EXECUTED = 'EXECUTED';
    public const STATUS_PARTIAL = 'PARTIAL';
    public const STATUS_REPLACE_PENDING = 'REPLACE_PENDING';
    public const STATUS_REPLACED = 'REPLACED';
    public const STATUS_STOPPED = 'STOPPED';
    public const STATUS_SUSPENDED = 'SUSPENDED';
    public const STATUS_EXPIRED = 'EXPIRED';
    public const STATUS_QUEUED = 'QUEUED';
    public const STATUS_TRIGGERED = 'TRIGGERED';
    public const STATUS_ACTIVATED = 'ACTIVATED';
    public const STATUS_PENDING_RISK_REVIEW = 'PENDING_RISK_REVIEW';
    public const STATUS_CONTINGENT_ORDER = 'CONTINGENT_ORDER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_ACCEPTED,
            self::STATUS_FAILED,
            self::STATUS_REJECTED,
            self::STATUS_CANCELED,
            self::STATUS_PARTIAL_CANCELED,
            self::STATUS_CANCEL_PENDING,
            self::STATUS_EXECUTED,
            self::STATUS_PARTIAL,
            self::STATUS_REPLACE_PENDING,
            self::STATUS_REPLACED,
            self::STATUS_STOPPED,
            self::STATUS_SUSPENDED,
            self::STATUS_EXPIRED,
            self::STATUS_QUEUED,
            self::STATUS_TRIGGERED,
            self::STATUS_ACTIVATED,
            self::STATUS_PENDING_RISK_REVIEW,
            self::STATUS_CONTINGENT_ORDER,
        ];
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('filled_quantity', $data ?? [], null);
        $this->setIfExists('open_quantity', $data ?? [], null);
        $this->setIfExists('closed_quantity', $data ?? [], null);
        $this->setIfExists('order_type', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('limit_price', $data ?? [], null);
        $this->setIfExists('execution_price', $data ?? [], null);
        $this->setIfExists('time_placed', $data ?? [], null);
        $this->setIfExists('time_updated', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets filled_quantity
     *
     * @return float|null
     */
    public function getFilledQuantity()
    {
        return $this->container['filled_quantity'];
    }

    /**
     * Sets filled_quantity
     *
     * @param float|null $filled_quantity filled_quantity
     *
     * @return self
     */
    public function setFilledQuantity($filled_quantity)
    {

        if (is_null($filled_quantity)) {
            throw new \InvalidArgumentException('non-nullable filled_quantity cannot be null');
        }

        $this->container['filled_quantity'] = $filled_quantity;

        return $this;
    }

    /**
     * Gets open_quantity
     *
     * @return float|null
     */
    public function getOpenQuantity()
    {
        return $this->container['open_quantity'];
    }

    /**
     * Sets open_quantity
     *
     * @param float|null $open_quantity open_quantity
     *
     * @return self
     */
    public function setOpenQuantity($open_quantity)
    {

        if (is_null($open_quantity)) {
            throw new \InvalidArgumentException('non-nullable open_quantity cannot be null');
        }

        $this->container['open_quantity'] = $open_quantity;

        return $this;
    }

    /**
     * Gets closed_quantity
     *
     * @return float|null
     */
    public function getClosedQuantity()
    {
        return $this->container['closed_quantity'];
    }

    /**
     * Sets closed_quantity
     *
     * @param float|null $closed_quantity closed_quantity
     *
     * @return self
     */
    public function setClosedQuantity($closed_quantity)
    {

        if (is_null($closed_quantity)) {
            throw new \InvalidArgumentException('non-nullable closed_quantity cannot be null');
        }

        $this->container['closed_quantity'] = $closed_quantity;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string|null $order_type Order Type potential values include (but are not limited to) - Limit - Market - StopLimit - Stop
     *
     * @return self
     */
    public function setOrderType($order_type)
    {

        if (is_null($order_type)) {
            array_push($this->openAPINullablesSetToNull, 'order_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return string|null
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param string|null $time_in_force Trade time in force examples:   * FOK - Fill Or Kill   * Day - Day   * GTC - Good Til Canceled   * GTD - Good Til Date
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
     * Gets limit_price
     *
     * @return float|null
     */
    public function getLimitPrice()
    {
        return $this->container['limit_price'];
    }

    /**
     * Sets limit_price
     *
     * @param float|null $limit_price Trade Price if limit or stop limit order
     *
     * @return self
     */
    public function setLimitPrice($limit_price)
    {

        if (is_null($limit_price)) {
            array_push($this->openAPINullablesSetToNull, 'limit_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limit_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['limit_price'] = $limit_price;

        return $this;
    }

    /**
     * Gets execution_price
     *
     * @return float|null
     */
    public function getExecutionPrice()
    {
        return $this->container['execution_price'];
    }

    /**
     * Sets execution_price
     *
     * @param float|null $execution_price Trade Price if limit or stop limit order
     *
     * @return self
     */
    public function setExecutionPrice($execution_price)
    {

        if (is_null($execution_price)) {
            array_push($this->openAPINullablesSetToNull, 'execution_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('execution_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['execution_price'] = $execution_price;

        return $this;
    }

    /**
     * Gets time_placed
     *
     * @return string|null
     */
    public function getTimePlaced()
    {
        return $this->container['time_placed'];
    }

    /**
     * Sets time_placed
     *
     * @param string|null $time_placed Time
     *
     * @return self
     */
    public function setTimePlaced($time_placed)
    {

        if (is_null($time_placed)) {
            throw new \InvalidArgumentException('non-nullable time_placed cannot be null');
        }

        $this->container['time_placed'] = $time_placed;

        return $this;
    }

    /**
     * Gets time_updated
     *
     * @return string|null
     */
    public function getTimeUpdated()
    {
        return $this->container['time_updated'];
    }

    /**
     * Sets time_updated
     *
     * @param string|null $time_updated Time
     *
     * @return self
     */
    public function setTimeUpdated($time_updated)
    {

        if (is_null($time_updated)) {
            throw new \InvalidArgumentException('non-nullable time_updated cannot be null');
        }

        $this->container['time_updated'] = $time_updated;

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


