<?php
/**
 * UniversalActivity
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
 * UniversalActivity Class Doc Comment
 *
 * @category Class
 * @description A transaction or activity from an institution
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class UniversalActivity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UniversalActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'account' => '\SnapTrade\Model\AccountSimple',
        'amount' => 'float',
        'currency' => '\SnapTrade\Model\Currency',
        'description' => 'string',
        'fee' => 'float',
        'fx_rate' => 'float',
        'institution' => 'string',
        'option_type' => 'string',
        'price' => 'float',
        'settlement_date' => 'string',
        'external_reference_id' => 'string',
        'symbol' => '\SnapTrade\Model\Symbol',
        'option_symbol' => '\SnapTrade\Model\OptionsSymbol',
        'trade_date' => 'string',
        'type' => 'string',
        'units' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'account' => null,
        'amount' => null,
        'currency' => null,
        'description' => null,
        'fee' => null,
        'fx_rate' => null,
        'institution' => null,
        'option_type' => null,
        'price' => null,
        'settlement_date' => null,
        'external_reference_id' => null,
        'symbol' => null,
        'option_symbol' => null,
        'trade_date' => null,
        'type' => null,
        'units' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => false,
		'account' => false,
		'amount' => true,
		'currency' => false,
		'description' => false,
		'fee' => false,
		'fx_rate' => true,
		'institution' => false,
		'option_type' => false,
		'price' => false,
		'settlement_date' => false,
		'external_reference_id' => true,
		'symbol' => false,
		'option_symbol' => false,
		'trade_date' => true,
		'type' => false,
		'units' => false
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
        'id' => 'id',
        'account' => 'account',
        'amount' => 'amount',
        'currency' => 'currency',
        'description' => 'description',
        'fee' => 'fee',
        'fx_rate' => 'fx_rate',
        'institution' => 'institution',
        'option_type' => 'option_type',
        'price' => 'price',
        'settlement_date' => 'settlement_date',
        'external_reference_id' => 'external_reference_id',
        'symbol' => 'symbol',
        'option_symbol' => 'option_symbol',
        'trade_date' => 'trade_date',
        'type' => 'type',
        'units' => 'units'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account' => 'setAccount',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'fee' => 'setFee',
        'fx_rate' => 'setFxRate',
        'institution' => 'setInstitution',
        'option_type' => 'setOptionType',
        'price' => 'setPrice',
        'settlement_date' => 'setSettlementDate',
        'external_reference_id' => 'setExternalReferenceId',
        'symbol' => 'setSymbol',
        'option_symbol' => 'setOptionSymbol',
        'trade_date' => 'setTradeDate',
        'type' => 'setType',
        'units' => 'setUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account' => 'getAccount',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'fee' => 'getFee',
        'fx_rate' => 'getFxRate',
        'institution' => 'getInstitution',
        'option_type' => 'getOptionType',
        'price' => 'getPrice',
        'settlement_date' => 'getSettlementDate',
        'external_reference_id' => 'getExternalReferenceId',
        'symbol' => 'getSymbol',
        'option_symbol' => 'getOptionSymbol',
        'trade_date' => 'getTradeDate',
        'type' => 'getType',
        'units' => 'getUnits'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('fx_rate', $data ?? [], null);
        $this->setIfExists('institution', $data ?? [], null);
        $this->setIfExists('option_type', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('settlement_date', $data ?? [], null);
        $this->setIfExists('external_reference_id', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('option_symbol', $data ?? [], null);
        $this->setIfExists('trade_date', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \SnapTrade\Model\AccountSimple|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \SnapTrade\Model\AccountSimple|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {

        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }

        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {

        if (is_null($amount)) {
            array_push($this->openAPINullablesSetToNull, 'amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \SnapTrade\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \SnapTrade\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {

        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {

        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {

        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }

        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fx_rate
     *
     * @return float|null
     */
    public function getFxRate()
    {
        return $this->container['fx_rate'];
    }

    /**
     * Sets fx_rate
     *
     * @param float|null $fx_rate The forex conversion rate involved in the transaction if provided by the brokerage. Used in cases where securities of one currency are purchased in a different currency, and the forex conversion is automatic. In those cases, price, amount and fee will be in the top level currency (activity -> currency)
     *
     * @return self
     */
    public function setFxRate($fx_rate)
    {

        if (is_null($fx_rate)) {
            array_push($this->openAPINullablesSetToNull, 'fx_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fx_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['fx_rate'] = $fx_rate;

        return $this;
    }

    /**
     * Gets institution
     *
     * @return string|null
     */
    public function getInstitution()
    {
        return $this->container['institution'];
    }

    /**
     * Sets institution
     *
     * @param string|null $institution institution
     *
     * @return self
     */
    public function setInstitution($institution)
    {

        if (is_null($institution)) {
            throw new \InvalidArgumentException('non-nullable institution cannot be null');
        }

        $this->container['institution'] = $institution;

        return $this;
    }

    /**
     * Gets option_type
     *
     * @return string|null
     */
    public function getOptionType()
    {
        return $this->container['option_type'];
    }

    /**
     * Sets option_type
     *
     * @param string|null $option_type If an option transaction, then it's type (BUY_TO_OPEN, SELL_TO_CLOSE, etc), otherwise empty string
     *
     * @return self
     */
    public function setOptionType($option_type)
    {

        if (is_null($option_type)) {
            throw new \InvalidArgumentException('non-nullable option_type cannot be null');
        }

        $this->container['option_type'] = $option_type;

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
     * Gets settlement_date
     *
     * @return string|null
     */
    public function getSettlementDate()
    {
        return $this->container['settlement_date'];
    }

    /**
     * Sets settlement_date
     *
     * @param string|null $settlement_date settlement_date
     *
     * @return self
     */
    public function setSettlementDate($settlement_date)
    {

        if (is_null($settlement_date)) {
            throw new \InvalidArgumentException('non-nullable settlement_date cannot be null');
        }

        $this->container['settlement_date'] = $settlement_date;

        return $this;
    }

    /**
     * Gets external_reference_id
     *
     * @return string|null
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string|null $external_reference_id Reference ID from brokerage used to identify related transactions. For example if an order comprises of several transactions (buy, fee, fx), they can be grouped if they share the same external_reference_id
     *
     * @return self
     */
    public function setExternalReferenceId($external_reference_id)
    {

        if (is_null($external_reference_id)) {
            array_push($this->openAPINullablesSetToNull, 'external_reference_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_reference_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return \SnapTrade\Model\Symbol|null
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param \SnapTrade\Model\Symbol|null $symbol symbol
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
     * Gets trade_date
     *
     * @return string|null
     */
    public function getTradeDate()
    {
        return $this->container['trade_date'];
    }

    /**
     * Sets trade_date
     *
     * @param string|null $trade_date trade_date
     *
     * @return self
     */
    public function setTradeDate($trade_date)
    {

        if (is_null($trade_date)) {
            array_push($this->openAPINullablesSetToNull, 'trade_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trade_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['trade_date'] = $trade_date;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Potential values include (but are not limited to) - DIVIDEND - BUY - SELL - CONTRIBUTION - WITHDRAWAL - EXTERNAL_ASSET_TRANSFER_IN - EXTERNAL_ASSET_TRANSFER_OUT - INTERNAL_CASH_TRANSFER_IN - INTERNAL_CASH_TRANSFER_OUT - INTERNAL_ASSET_TRANSFER_IN - INTERNAL_ASSET_TRANSFER_OUT - INTEREST - REBATE - GOV_GRANT - TAX - FEE - REI - FXT
     *
     * @return self
     */
    public function setType($type)
    {

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

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
     * @param float|null $units Usually but not necessarily an integer
     *
     * @return self
     */
    public function setUnits($units)
    {

        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }

        $this->container['units'] = $units;

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


