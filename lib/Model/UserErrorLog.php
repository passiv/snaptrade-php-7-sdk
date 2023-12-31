<?php
/**
 * UserErrorLog
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
 * UserErrorLog Class Doc Comment
 *
 * @category Class
 * @description An API error log for a specific SnapTrade user.
 * @package  SnapTrade
 * @implements \ArrayAccess<string, mixed>
 */
class UserErrorLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserErrorLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'requested_at' => 'string',
        'response' => 'string',
        'status_code' => 'float',
        'query_params' => 'string',
        'http_method' => 'string',
        'endpoint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'requested_at' => null,
        'response' => null,
        'status_code' => null,
        'query_params' => null,
        'http_method' => null,
        'endpoint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'requested_at' => false,
		'response' => false,
		'status_code' => false,
		'query_params' => false,
		'http_method' => false,
		'endpoint' => false
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
        'requested_at' => 'requestedAt',
        'response' => 'response',
        'status_code' => 'statusCode',
        'query_params' => 'queryParams',
        'http_method' => 'httpMethod',
        'endpoint' => 'endpoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'requested_at' => 'setRequestedAt',
        'response' => 'setResponse',
        'status_code' => 'setStatusCode',
        'query_params' => 'setQueryParams',
        'http_method' => 'setHttpMethod',
        'endpoint' => 'setEndpoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'requested_at' => 'getRequestedAt',
        'response' => 'getResponse',
        'status_code' => 'getStatusCode',
        'query_params' => 'getQueryParams',
        'http_method' => 'getHttpMethod',
        'endpoint' => 'getEndpoint'
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
        $this->setIfExists('requested_at', $data ?? [], null);
        $this->setIfExists('response', $data ?? [], null);
        $this->setIfExists('status_code', $data ?? [], null);
        $this->setIfExists('query_params', $data ?? [], null);
        $this->setIfExists('http_method', $data ?? [], null);
        $this->setIfExists('endpoint', $data ?? [], null);
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
     * Gets requested_at
     *
     * @return string|null
     */
    public function getRequestedAt()
    {
        return $this->container['requested_at'];
    }

    /**
     * Sets requested_at
     *
     * @param string|null $requested_at requested_at
     *
     * @return self
     */
    public function setRequestedAt($requested_at)
    {

        if (is_null($requested_at)) {
            throw new \InvalidArgumentException('non-nullable requested_at cannot be null');
        }

        $this->container['requested_at'] = $requested_at;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string|null $response response
     *
     * @return self
     */
    public function setResponse($response)
    {

        if (is_null($response)) {
            throw new \InvalidArgumentException('non-nullable response cannot be null');
        }

        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return float|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param float|null $status_code status_code
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {

        if (is_null($status_code)) {
            throw new \InvalidArgumentException('non-nullable status_code cannot be null');
        }

        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets query_params
     *
     * @return string|null
     */
    public function getQueryParams()
    {
        return $this->container['query_params'];
    }

    /**
     * Sets query_params
     *
     * @param string|null $query_params query_params
     *
     * @return self
     */
    public function setQueryParams($query_params)
    {

        if (is_null($query_params)) {
            throw new \InvalidArgumentException('non-nullable query_params cannot be null');
        }

        $this->container['query_params'] = $query_params;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string|null
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string|null $http_method http_method
     *
     * @return self
     */
    public function setHttpMethod($http_method)
    {

        if (is_null($http_method)) {
            throw new \InvalidArgumentException('non-nullable http_method cannot be null');
        }

        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string|null $endpoint endpoint
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {

        if (is_null($endpoint)) {
            throw new \InvalidArgumentException('non-nullable endpoint cannot be null');
        }

        $this->container['endpoint'] = $endpoint;

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


