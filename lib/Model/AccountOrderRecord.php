<?php
/**
 * AccountOrderRecord
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
 * AccountOrderRecord Class Doc Comment
 *
 * @category Class
 * @description Record of order in brokerageaccount
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class AccountOrderRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountOrderRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brokerage_order_id' => 'string',
        'status' => '\SnapTrade\Model\AccountOrderRecordStatus',
        'symbol' => 'string',
        'universal_symbol' => '\SnapTrade\Model\UniversalSymbol',
        'option_symbol' => '\SnapTrade\Model\OptionsSymbol',
        'action' => '\SnapTrade\Model\Action',
        'total_quantity' => 'float',
        'open_quantity' => 'float',
        'canceled_quantity' => 'float',
        'filled_quantity' => 'float',
        'execution_price' => 'float',
        'limit_price' => 'float',
        'stop_price' => 'float',
        'order_type' => 'string',
        'time_in_force' => 'string',
        'time_placed' => 'string',
        'time_updated' => 'string',
        'time_executed' => 'string',
        'expiry_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brokerage_order_id' => null,
        'status' => null,
        'symbol' => 'uuid',
        'universal_symbol' => null,
        'option_symbol' => null,
        'action' => null,
        'total_quantity' => null,
        'open_quantity' => null,
        'canceled_quantity' => null,
        'filled_quantity' => null,
        'execution_price' => null,
        'limit_price' => null,
        'stop_price' => null,
        'order_type' => null,
        'time_in_force' => null,
        'time_placed' => null,
        'time_updated' => null,
        'time_executed' => null,
        'expiry_date' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'brokerage_order_id' => false,
		'status' => false,
		'symbol' => false,
		'universal_symbol' => false,
		'option_symbol' => false,
		'action' => false,
		'total_quantity' => true,
		'open_quantity' => true,
		'canceled_quantity' => true,
		'filled_quantity' => true,
		'execution_price' => true,
		'limit_price' => true,
		'stop_price' => true,
		'order_type' => true,
		'time_in_force' => false,
		'time_placed' => false,
		'time_updated' => true,
		'time_executed' => true,
		'expiry_date' => false
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
        'brokerage_order_id' => 'brokerage_order_id',
        'status' => 'status',
        'symbol' => 'symbol',
        'universal_symbol' => 'universal_symbol',
        'option_symbol' => 'option_symbol',
        'action' => 'action',
        'total_quantity' => 'total_quantity',
        'open_quantity' => 'open_quantity',
        'canceled_quantity' => 'canceled_quantity',
        'filled_quantity' => 'filled_quantity',
        'execution_price' => 'execution_price',
        'limit_price' => 'limit_price',
        'stop_price' => 'stop_price',
        'order_type' => 'order_type',
        'time_in_force' => 'time_in_force',
        'time_placed' => 'time_placed',
        'time_updated' => 'time_updated',
        'time_executed' => 'time_executed',
        'expiry_date' => 'expiry_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brokerage_order_id' => 'setBrokerageOrderId',
        'status' => 'setStatus',
        'symbol' => 'setSymbol',
        'universal_symbol' => 'setUniversalSymbol',
        'option_symbol' => 'setOptionSymbol',
        'action' => 'setAction',
        'total_quantity' => 'setTotalQuantity',
        'open_quantity' => 'setOpenQuantity',
        'canceled_quantity' => 'setCanceledQuantity',
        'filled_quantity' => 'setFilledQuantity',
        'execution_price' => 'setExecutionPrice',
        'limit_price' => 'setLimitPrice',
        'stop_price' => 'setStopPrice',
        'order_type' => 'setOrderType',
        'time_in_force' => 'setTimeInForce',
        'time_placed' => 'setTimePlaced',
        'time_updated' => 'setTimeUpdated',
        'time_executed' => 'setTimeExecuted',
        'expiry_date' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brokerage_order_id' => 'getBrokerageOrderId',
        'status' => 'getStatus',
        'symbol' => 'getSymbol',
        'universal_symbol' => 'getUniversalSymbol',
        'option_symbol' => 'getOptionSymbol',
        'action' => 'getAction',
        'total_quantity' => 'getTotalQuantity',
        'open_quantity' => 'getOpenQuantity',
        'canceled_quantity' => 'getCanceledQuantity',
        'filled_quantity' => 'getFilledQuantity',
        'execution_price' => 'getExecutionPrice',
        'limit_price' => 'getLimitPrice',
        'stop_price' => 'getStopPrice',
        'order_type' => 'getOrderType',
        'time_in_force' => 'getTimeInForce',
        'time_placed' => 'getTimePlaced',
        'time_updated' => 'getTimeUpdated',
        'time_executed' => 'getTimeExecuted',
        'expiry_date' => 'getExpiryDate'
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
        $this->setIfExists('brokerage_order_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('universal_symbol', $data ?? [], null);
        $this->setIfExists('option_symbol', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('total_quantity', $data ?? [], null);
        $this->setIfExists('open_quantity', $data ?? [], null);
        $this->setIfExists('canceled_quantity', $data ?? [], null);
        $this->setIfExists('filled_quantity', $data ?? [], null);
        $this->setIfExists('execution_price', $data ?? [], null);
        $this->setIfExists('limit_price', $data ?? [], null);
        $this->setIfExists('stop_price', $data ?? [], null);
        $this->setIfExists('order_type', $data ?? [], null);
        $this->setIfExists('time_in_force', $data ?? [], null);
        $this->setIfExists('time_placed', $data ?? [], null);
        $this->setIfExists('time_updated', $data ?? [], null);
        $this->setIfExists('time_executed', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
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
     * Gets brokerage_order_id
     *
     * @return string|null
     */
    public function getBrokerageOrderId()
    {
        return $this->container['brokerage_order_id'];
    }

    /**
     * Sets brokerage_order_id
     *
     * @param string|null $brokerage_order_id Order id returned by brokerage
     *
     * @return self
     */
    public function setBrokerageOrderId($brokerage_order_id)
    {

        if (is_null($brokerage_order_id)) {
            throw new \InvalidArgumentException('non-nullable brokerage_order_id cannot be null');
        }

        $this->container['brokerage_order_id'] = $brokerage_order_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SnapTrade\Model\AccountOrderRecordStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SnapTrade\Model\AccountOrderRecordStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

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
     * @param string|null $symbol symbol
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
     * Gets universal_symbol
     *
     * @return \SnapTrade\Model\UniversalSymbol|null
     */
    public function getUniversalSymbol()
    {
        return $this->container['universal_symbol'];
    }

    /**
     * Sets universal_symbol
     *
     * @param \SnapTrade\Model\UniversalSymbol|null $universal_symbol universal_symbol
     *
     * @return self
     */
    public function setUniversalSymbol($universal_symbol)
    {

        if (is_null($universal_symbol)) {
            throw new \InvalidArgumentException('non-nullable universal_symbol cannot be null');
        }

        $this->container['universal_symbol'] = $universal_symbol;

        return $this;
    }

    /**
     * Gets option_symbol
     *
     * @return \SnapTrade\Model\OptionsSymbol|null
     */
    public function getOptionSymbol()
    {
        return $this->container['option_symbol'];
    }

    /**
     * Sets option_symbol
     *
     * @param \SnapTrade\Model\OptionsSymbol|null $option_symbol option_symbol
     *
     * @return self
     */
    public function setOptionSymbol($option_symbol)
    {

        if (is_null($option_symbol)) {
            throw new \InvalidArgumentException('non-nullable option_symbol cannot be null');
        }

        $this->container['option_symbol'] = $option_symbol;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \SnapTrade\Model\Action|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \SnapTrade\Model\Action|null $action action
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
     * Gets total_quantity
     *
     * @return float|null
     */
    public function getTotalQuantity()
    {
        return $this->container['total_quantity'];
    }

    /**
     * Sets total_quantity
     *
     * @param float|null $total_quantity total_quantity
     *
     * @return self
     */
    public function setTotalQuantity($total_quantity)
    {

        if (is_null($total_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'total_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('total_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['total_quantity'] = $total_quantity;

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
     * @param float|null $open_quantity Trade Units
     *
     * @return self
     */
    public function setOpenQuantity($open_quantity)
    {

        if (is_null($open_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'open_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('open_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['open_quantity'] = $open_quantity;

        return $this;
    }

    /**
     * Gets canceled_quantity
     *
     * @return float|null
     */
    public function getCanceledQuantity()
    {
        return $this->container['canceled_quantity'];
    }

    /**
     * Sets canceled_quantity
     *
     * @param float|null $canceled_quantity Trade Units
     *
     * @return self
     */
    public function setCanceledQuantity($canceled_quantity)
    {

        if (is_null($canceled_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'canceled_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('canceled_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['canceled_quantity'] = $canceled_quantity;

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
     * @param float|null $filled_quantity Trade Units
     *
     * @return self
     */
    public function setFilledQuantity($filled_quantity)
    {

        if (is_null($filled_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'filled_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filled_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['filled_quantity'] = $filled_quantity;

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
     * @param float|null $stop_price Stop Price. If stop loss or stop limit order, the price to trigger the stop
     *
     * @return self
     */
    public function setStopPrice($stop_price)
    {

        if (is_null($stop_price)) {
            array_push($this->openAPINullablesSetToNull, 'stop_price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stop_price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['stop_price'] = $stop_price;

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
     * @param string|null $order_type Order Type potential values include (but are not limited to) - Limit - Market - StopLimit - StopLoss
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
     * @param string|null $time_updated time_updated
     *
     * @return self
     */
    public function setTimeUpdated($time_updated)
    {

        if (is_null($time_updated)) {
            array_push($this->openAPINullablesSetToNull, 'time_updated');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time_updated', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['time_updated'] = $time_updated;

        return $this;
    }

    /**
     * Gets time_executed
     *
     * @return string|null
     */
    public function getTimeExecuted()
    {
        return $this->container['time_executed'];
    }

    /**
     * Sets time_executed
     *
     * @param string|null $time_executed time_executed
     *
     * @return self
     */
    public function setTimeExecuted($time_executed)
    {

        if (is_null($time_executed)) {
            array_push($this->openAPINullablesSetToNull, 'time_executed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('time_executed', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['time_executed'] = $time_executed;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string|null $expiry_date Time
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {

        if (is_null($expiry_date)) {
            throw new \InvalidArgumentException('non-nullable expiry_date cannot be null');
        }

        $this->container['expiry_date'] = $expiry_date;

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


