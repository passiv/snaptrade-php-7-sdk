<?php
/**
 * StrategyImpact
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
 * StrategyImpact Class Doc Comment
 *
 * @category Class
 * @description The strategy impact
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class StrategyImpact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StrategyImpact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'estimated_commissions' => 'float',
        'buying_power_effect' => 'float',
        'buying_power_result' => 'float',
        'maint_excess_effect' => 'float',
        'maint_excess_result' => 'float',
        'trade_value_calculation' => 'string',
        'legs' => '\SnapTrade\Model\StrategyImpactLegsInner[]',
        'side' => 'string',
        'effect' => 'string',
        'price' => 'float',
        'strategy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'estimated_commissions' => null,
        'buying_power_effect' => null,
        'buying_power_result' => null,
        'maint_excess_effect' => null,
        'maint_excess_result' => null,
        'trade_value_calculation' => null,
        'legs' => null,
        'side' => null,
        'effect' => null,
        'price' => null,
        'strategy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'estimated_commissions' => false,
		'buying_power_effect' => false,
		'buying_power_result' => false,
		'maint_excess_effect' => false,
		'maint_excess_result' => false,
		'trade_value_calculation' => false,
		'legs' => false,
		'side' => false,
		'effect' => false,
		'price' => false,
		'strategy' => false
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
        'estimated_commissions' => 'estimatedCommissions',
        'buying_power_effect' => 'buyingPowerEffect',
        'buying_power_result' => 'buyingPowerResult',
        'maint_excess_effect' => 'maintExcessEffect',
        'maint_excess_result' => 'maintExcessResult',
        'trade_value_calculation' => 'tradeValueCalculation',
        'legs' => 'legs',
        'side' => 'side',
        'effect' => 'effect',
        'price' => 'price',
        'strategy' => 'strategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'estimated_commissions' => 'setEstimatedCommissions',
        'buying_power_effect' => 'setBuyingPowerEffect',
        'buying_power_result' => 'setBuyingPowerResult',
        'maint_excess_effect' => 'setMaintExcessEffect',
        'maint_excess_result' => 'setMaintExcessResult',
        'trade_value_calculation' => 'setTradeValueCalculation',
        'legs' => 'setLegs',
        'side' => 'setSide',
        'effect' => 'setEffect',
        'price' => 'setPrice',
        'strategy' => 'setStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'estimated_commissions' => 'getEstimatedCommissions',
        'buying_power_effect' => 'getBuyingPowerEffect',
        'buying_power_result' => 'getBuyingPowerResult',
        'maint_excess_effect' => 'getMaintExcessEffect',
        'maint_excess_result' => 'getMaintExcessResult',
        'trade_value_calculation' => 'getTradeValueCalculation',
        'legs' => 'getLegs',
        'side' => 'getSide',
        'effect' => 'getEffect',
        'price' => 'getPrice',
        'strategy' => 'getStrategy'
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
        $this->setIfExists('estimated_commissions', $data ?? [], null);
        $this->setIfExists('buying_power_effect', $data ?? [], null);
        $this->setIfExists('buying_power_result', $data ?? [], null);
        $this->setIfExists('maint_excess_effect', $data ?? [], null);
        $this->setIfExists('maint_excess_result', $data ?? [], null);
        $this->setIfExists('trade_value_calculation', $data ?? [], null);
        $this->setIfExists('legs', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('effect', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('strategy', $data ?? [], null);
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
     * Gets estimated_commissions
     *
     * @return float|null
     */
    public function getEstimatedCommissions()
    {
        return $this->container['estimated_commissions'];
    }

    /**
     * Sets estimated_commissions
     *
     * @param float|null $estimated_commissions estimated_commissions
     *
     * @return self
     */
    public function setEstimatedCommissions($estimated_commissions)
    {

        if (is_null($estimated_commissions)) {
            throw new \InvalidArgumentException('non-nullable estimated_commissions cannot be null');
        }

        $this->container['estimated_commissions'] = $estimated_commissions;

        return $this;
    }

    /**
     * Gets buying_power_effect
     *
     * @return float|null
     */
    public function getBuyingPowerEffect()
    {
        return $this->container['buying_power_effect'];
    }

    /**
     * Sets buying_power_effect
     *
     * @param float|null $buying_power_effect buying_power_effect
     *
     * @return self
     */
    public function setBuyingPowerEffect($buying_power_effect)
    {

        if (is_null($buying_power_effect)) {
            throw new \InvalidArgumentException('non-nullable buying_power_effect cannot be null');
        }

        $this->container['buying_power_effect'] = $buying_power_effect;

        return $this;
    }

    /**
     * Gets buying_power_result
     *
     * @return float|null
     */
    public function getBuyingPowerResult()
    {
        return $this->container['buying_power_result'];
    }

    /**
     * Sets buying_power_result
     *
     * @param float|null $buying_power_result buying_power_result
     *
     * @return self
     */
    public function setBuyingPowerResult($buying_power_result)
    {

        if (is_null($buying_power_result)) {
            throw new \InvalidArgumentException('non-nullable buying_power_result cannot be null');
        }

        $this->container['buying_power_result'] = $buying_power_result;

        return $this;
    }

    /**
     * Gets maint_excess_effect
     *
     * @return float|null
     */
    public function getMaintExcessEffect()
    {
        return $this->container['maint_excess_effect'];
    }

    /**
     * Sets maint_excess_effect
     *
     * @param float|null $maint_excess_effect maint_excess_effect
     *
     * @return self
     */
    public function setMaintExcessEffect($maint_excess_effect)
    {

        if (is_null($maint_excess_effect)) {
            throw new \InvalidArgumentException('non-nullable maint_excess_effect cannot be null');
        }

        $this->container['maint_excess_effect'] = $maint_excess_effect;

        return $this;
    }

    /**
     * Gets maint_excess_result
     *
     * @return float|null
     */
    public function getMaintExcessResult()
    {
        return $this->container['maint_excess_result'];
    }

    /**
     * Sets maint_excess_result
     *
     * @param float|null $maint_excess_result maint_excess_result
     *
     * @return self
     */
    public function setMaintExcessResult($maint_excess_result)
    {

        if (is_null($maint_excess_result)) {
            throw new \InvalidArgumentException('non-nullable maint_excess_result cannot be null');
        }

        $this->container['maint_excess_result'] = $maint_excess_result;

        return $this;
    }

    /**
     * Gets trade_value_calculation
     *
     * @return string|null
     */
    public function getTradeValueCalculation()
    {
        return $this->container['trade_value_calculation'];
    }

    /**
     * Sets trade_value_calculation
     *
     * @param string|null $trade_value_calculation trade_value_calculation
     *
     * @return self
     */
    public function setTradeValueCalculation($trade_value_calculation)
    {

        if (is_null($trade_value_calculation)) {
            throw new \InvalidArgumentException('non-nullable trade_value_calculation cannot be null');
        }

        $this->container['trade_value_calculation'] = $trade_value_calculation;

        return $this;
    }

    /**
     * Gets legs
     *
     * @return \SnapTrade\Model\StrategyImpactLegsInner[]|null
     */
    public function getLegs()
    {
        return $this->container['legs'];
    }

    /**
     * Sets legs
     *
     * @param \SnapTrade\Model\StrategyImpactLegsInner[]|null $legs legs
     *
     * @return self
     */
    public function setLegs($legs)
    {

        if (is_null($legs)) {
            throw new \InvalidArgumentException('non-nullable legs cannot be null');
        }

        $this->container['legs'] = $legs;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string|null
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string|null $side side
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
     * Gets effect
     *
     * @return string|null
     */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
     * Sets effect
     *
     * @param string|null $effect effect
     *
     * @return self
     */
    public function setEffect($effect)
    {

        if (is_null($effect)) {
            throw new \InvalidArgumentException('non-nullable effect cannot be null');
        }

        $this->container['effect'] = $effect;

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
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets strategy
     *
     * @return string|null
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     *
     * @param string|null $strategy strategy
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


