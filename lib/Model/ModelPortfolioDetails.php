<?php
/**
 * ModelPortfolioDetails
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
 * ModelPortfolioDetails Class Doc Comment
 *
 * @category Class
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class ModelPortfolioDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ModelPortfolioDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'model_portfolio' => '\SnapTrade\Model\ModelPortfolio',
        'model_portfolio_security' => '\SnapTrade\Model\ModelPortfolioSecurity[]',
        'model_portfolio_asset_class' => '\SnapTrade\Model\ModelPortfolioAssetClass[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'model_portfolio' => null,
        'model_portfolio_security' => null,
        'model_portfolio_asset_class' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'model_portfolio' => false,
		'model_portfolio_security' => false,
		'model_portfolio_asset_class' => false
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
        'model_portfolio' => 'model_portfolio',
        'model_portfolio_security' => 'model_portfolio_security',
        'model_portfolio_asset_class' => 'model_portfolio_asset_class'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_portfolio' => 'setModelPortfolio',
        'model_portfolio_security' => 'setModelPortfolioSecurity',
        'model_portfolio_asset_class' => 'setModelPortfolioAssetClass'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_portfolio' => 'getModelPortfolio',
        'model_portfolio_security' => 'getModelPortfolioSecurity',
        'model_portfolio_asset_class' => 'getModelPortfolioAssetClass'
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
        $this->setIfExists('model_portfolio', $data ?? [], null);
        $this->setIfExists('model_portfolio_security', $data ?? [], null);
        $this->setIfExists('model_portfolio_asset_class', $data ?? [], null);
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
     * Gets model_portfolio
     *
     * @return \SnapTrade\Model\ModelPortfolio|null
     */
    public function getModelPortfolio()
    {
        return $this->container['model_portfolio'];
    }

    /**
     * Sets model_portfolio
     *
     * @param \SnapTrade\Model\ModelPortfolio|null $model_portfolio model_portfolio
     *
     * @return self
     */
    public function setModelPortfolio($model_portfolio)
    {

        if (is_null($model_portfolio)) {
            throw new \InvalidArgumentException('non-nullable model_portfolio cannot be null');
        }

        $this->container['model_portfolio'] = $model_portfolio;

        return $this;
    }

    /**
     * Gets model_portfolio_security
     *
     * @return \SnapTrade\Model\ModelPortfolioSecurity[]|null
     */
    public function getModelPortfolioSecurity()
    {
        return $this->container['model_portfolio_security'];
    }

    /**
     * Sets model_portfolio_security
     *
     * @param \SnapTrade\Model\ModelPortfolioSecurity[]|null $model_portfolio_security model_portfolio_security
     *
     * @return self
     */
    public function setModelPortfolioSecurity($model_portfolio_security)
    {

        if (is_null($model_portfolio_security)) {
            throw new \InvalidArgumentException('non-nullable model_portfolio_security cannot be null');
        }

        $this->container['model_portfolio_security'] = $model_portfolio_security;

        return $this;
    }

    /**
     * Gets model_portfolio_asset_class
     *
     * @return \SnapTrade\Model\ModelPortfolioAssetClass[]|null
     */
    public function getModelPortfolioAssetClass()
    {
        return $this->container['model_portfolio_asset_class'];
    }

    /**
     * Sets model_portfolio_asset_class
     *
     * @param \SnapTrade\Model\ModelPortfolioAssetClass[]|null $model_portfolio_asset_class model_portfolio_asset_class
     *
     * @return self
     */
    public function setModelPortfolioAssetClass($model_portfolio_asset_class)
    {

        if (is_null($model_portfolio_asset_class)) {
            throw new \InvalidArgumentException('non-nullable model_portfolio_asset_class cannot be null');
        }

        $this->container['model_portfolio_asset_class'] = $model_portfolio_asset_class;

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


