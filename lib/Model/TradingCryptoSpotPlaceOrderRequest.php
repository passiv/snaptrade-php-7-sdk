<?php
/**
 * TradingCryptoSpotPlaceOrderRequest
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
 * TradingCryptoSpotPlaceOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class TradingCryptoSpotPlaceOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Trading_cryptoSpotPlaceOrder_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => '\SnapTrade\Model\CryptocurrencyPair',
        'side' => '\SnapTrade\Model\ActionStrict',
        'type' => 'string',
        'time_in_force' => 'string',
        'amount' => 'float',
        'limit_price' => 'float',
        'stop_price' => 'float',
        'post_only' => 'bool',
        'expiration_date' => '\DateTime'
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
        'side' => null,
        'type' => null,
        'time_in_force' => null,
        'amount' => 'decimal',
        'limit_price' => 'decimal',
        'stop_price' => 'decimal',
        'post_only' => null,
        'expiration_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'symbol' => false,
		'side' => false,
		'type' => false,
		'time_in_force' => false,
		'amount' => false,
		'limit_price' => false,
		'stop_price' => false,
		'post_only' => false,
		'expiration_date' => false
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
        'side' => 'side',
        'type' => 'type',
        'time_in_force' => 'time_in_force',
        'amount' => 'amount',
        'limit_price' => 'limit_price',
        'stop_price' => 'stop_price',
        'post_only' => 'post_only',
        'expiration_date' => 'expiration_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'side' => 'setSide',
        'type' => 'setType',
        'time_in_force' => 'setTimeInForce',
        'amount' => 'setAmount',
        'limit_price' => 'setLimitPrice',
        'stop_price' => 'setStopPrice',
        'post_only' => 'setPostOnly',
        'expiration_date' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'side' => 'getSide',
        'type' => 'getType',
        'time_in_force' => 'getTimeInForce',
        'amount' => 'getAmount',
        'limit_price' => 'getLimitPrice',
        'stop_price' => 'getStopPrice',
        'post_only' => 'getPostOnly',
        'expiration_date' => 'getExpirationDate'
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

    public const TYPE_MARKET = 'MARKET';
    public const TYPE_LIMIT = 'LIMIT';
    public const TYPE_STOP_LOSS_MARKET = 'STOP_LOSS_MARKET';
    public const TYPE_STOP_LOSS_LIMIT = 'STOP_LOSS_LIMIT';
    public const TYPE_TAKE_PROFIT_MARKET = 'TAKE_PROFIT_MARKET';
    public const TYPE_TAKE_PROFIT_LIMIT = 'TAKE_PROFIT_LIMIT';
    public const TIME_IN_FORCE_GTC = 'GTC';
    public const TIME_IN_FORCE_FOK = 'FOK';
    public const TIME_IN_FORCE_IOC = 'IOC';
    public const TIME_IN_FORCE_GTD = 'GTD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MARKET,
            self::TYPE_LIMIT,
            self::TYPE_STOP_LOSS_MARKET,
            self::TYPE_STOP_LOSS_LIMIT,
            self::TYPE_TAKE_PROFIT_MARKET,
            self::TYPE_TAKE_PROFIT_LIMIT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeInForceAllowableValues()
    {
        return [
            self::TIME_IN_FORCE_GTC,
            self::TIME_IN_FORCE_FOK,
            self::TIME_IN_FORCE_IOC,
            self::TIME_IN_FORCE_GTD,
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
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('limit_price', $data ?? [], null);
        $this->setIfExists('stop_price', $data ?? [], null);
        $this->setIfExists('post_only', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
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

        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['time_in_force'] === null) {
            $invalidProperties[] = "'time_in_force' can't be null";
        }
        $allowedValues = $this->getTimeInForceAllowableValues();
        if (!is_null($this->container['time_in_force']) && !in_array($this->container['time_in_force'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'time_in_force', must be one of '%s'",
                $this->container['time_in_force'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets symbol
     *
     * @return \SnapTrade\Model\CryptocurrencyPair
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param \SnapTrade\Model\CryptocurrencyPair $symbol symbol
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
     * Gets side
     *
     * @return \SnapTrade\Model\ActionStrict
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param \SnapTrade\Model\ActionStrict $side side
     *
     * @return self
     */
    public function setSide($side)
    {

        if (is_null($side)) {
            throw new \InvalidArgumentException('non-nullable side cannot be null');
        }

        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of order to place.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return string
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param string $time_in_force The Time in Force type for the order. This field indicates how long the order will remain active before it is executed or expires.   - `GTC` - Good Til Canceled. The order is valid until it is executed or canceled.   - `FOK` - Fill Or Kill. The order must be executed in its entirety immediately or be canceled completely.   - `IOC` - Immediate Or Cancel. The order must be executed immediately. Any portion of the order that cannot be filled immediately will be canceled.   - `GTD` - Good Til Date. The order is valid until the specified date.
     *
     * @return self
     */
    public function setTimeInForce($time_in_force)
    {
        $allowedValues = $this->getTimeInForceAllowableValues();
        if (!in_array($time_in_force, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'time_in_force', must be one of '%s'",
                    $time_in_force,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($time_in_force)) {
            throw new \InvalidArgumentException('non-nullable time_in_force cannot be null');
        }

        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount of the base currency to buy or sell.
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;

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
     * @param float|null $limit_price The limit price. Required if the order type is LIMIT, STOP_LOSS_LIMIT or TAKE_PROFIT_LIMIT.
     *
     * @return self
     */
    public function setLimitPrice($limit_price)
    {

        if (is_null($limit_price)) {
            throw new \InvalidArgumentException('non-nullable limit_price cannot be null');
        }

        $this->container['limit_price'] = $limit_price;

        return $this;
    }

    /**
     * Gets stop_price
     *
     * @return float|null
     */
    public function getStopPrice()
    {
        return $this->container['stop_price'];
    }

    /**
     * Sets stop_price
     *
     * @param float|null $stop_price The stop price. Required if the order type is STOP_LOSS_MARKET, STOP_LOSS_LIMIT, TAKE_PROFIT_MARKET or TAKE_PROFIT_LIMIT.
     *
     * @return self
     */
    public function setStopPrice($stop_price)
    {

        if (is_null($stop_price)) {
            throw new \InvalidArgumentException('non-nullable stop_price cannot be null');
        }

        $this->container['stop_price'] = $stop_price;

        return $this;
    }

    /**
     * Gets post_only
     *
     * @return bool|null
     */
    public function getPostOnly()
    {
        return $this->container['post_only'];
    }

    /**
     * Sets post_only
     *
     * @param bool|null $post_only Valid and required only for order type LIMIT. If true orders that would be filled immediately are rejected to avoid incurring TAKER fees.
     *
     * @return self
     */
    public function setPostOnly($post_only)
    {

        if (is_null($post_only)) {
            throw new \InvalidArgumentException('non-nullable post_only cannot be null');
        }

        $this->container['post_only'] = $post_only;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date The expiration date of the order. Required if the time_in_force is GTD.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {

        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }

        $this->container['expiration_date'] = $expiration_date;

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


