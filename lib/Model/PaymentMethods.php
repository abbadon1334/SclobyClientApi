<?php
/**
 * PaymentMethods
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Scloby Api
 *
 * <a href='https://developer.scloby.com/apidoc/assets/documentation.json' target='_blank'>https://developer.scloby.com/apidoc/assets/documentation.json</a>  **Introduction**  **The authentication token is issued via Oauth2 standard ( https://oauth.net)**    You can apply for a Scloby test account on our developer portal **https://developer.scloby.com**   Here is your **ClientId** and **ClientSecret** for tests:    **client_id**: SclobyApiDocs    **client_secret**: DdyPNPvfPOGa0Izjct0C   **All data is JSON format, and the Content-Type header of POST/PUT request must be set to application/json.**  **Search Parameters**  You can perform a search in a collection using all first level properties in combination with some parameter, or specifying a value:    property = VALUE if you are searching for all items with a specific property value    property_since = MIN_VALUE if you are searching for all items with property value greater (or equal) than MIN_VALUE     property_max   = MAX_VALUE if you are searching for all items with property value smaller (or equal)than MAX_VALUE   property_like  = LIKE_VALUE if you are searching for a substring content.   You can use property_since and property_max in order to simulate **between** operator If you are using *equal* operator, all other operators for that parameter *will be ingnored*   If you are using _max or _since operator in strings, the alphabetical ordering will be used
 *
 * OpenAPI spec version: 2.0.0
 * Contact: dev@scloby.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PaymentMethods Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethods implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'payment_methods';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'payment_method_type_id' => 'int',
'enable_sum' => 'bool',
'unclaimed' => 'bool',
'hidden' => 'bool',
'bundle_name' => 'string',
'schema_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'payment_method_type_id' => null,
'enable_sum' => null,
'unclaimed' => null,
'hidden' => null,
'bundle_name' => null,
'schema_name' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'payment_method_type_id' => 'payment_method_type_id',
'enable_sum' => 'enable_sum',
'unclaimed' => 'unclaimed',
'hidden' => 'hidden',
'bundle_name' => 'bundle_name',
'schema_name' => 'schema_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'payment_method_type_id' => 'setPaymentMethodTypeId',
'enable_sum' => 'setEnableSum',
'unclaimed' => 'setUnclaimed',
'hidden' => 'setHidden',
'bundle_name' => 'setBundleName',
'schema_name' => 'setSchemaName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'payment_method_type_id' => 'getPaymentMethodTypeId',
'enable_sum' => 'getEnableSum',
'unclaimed' => 'getUnclaimed',
'hidden' => 'getHidden',
'bundle_name' => 'getBundleName',
'schema_name' => 'getSchemaName'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['payment_method_type_id'] = isset($data['payment_method_type_id']) ? $data['payment_method_type_id'] : null;
        $this->container['enable_sum'] = isset($data['enable_sum']) ? $data['enable_sum'] : null;
        $this->container['unclaimed'] = isset($data['unclaimed']) ? $data['unclaimed'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['bundle_name'] = isset($data['bundle_name']) ? $data['bundle_name'] : null;
        $this->container['schema_name'] = isset($data['schema_name']) ? $data['schema_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['payment_method_type_id'] === null) {
            $invalidProperties[] = "'payment_method_type_id' can't be null";
        }
        if ($this->container['enable_sum'] === null) {
            $invalidProperties[] = "'enable_sum' can't be null";
        }
        if ($this->container['unclaimed'] === null) {
            $invalidProperties[] = "'unclaimed' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_method_type_id
     *
     * @return int
     */
    public function getPaymentMethodTypeId()
    {
        return $this->container['payment_method_type_id'];
    }

    /**
     * Sets payment_method_type_id
     *
     * @param int $payment_method_type_id payment_method_type_id
     *
     * @return $this
     */
    public function setPaymentMethodTypeId($payment_method_type_id)
    {
        $this->container['payment_method_type_id'] = $payment_method_type_id;

        return $this;
    }

    /**
     * Gets enable_sum
     *
     * @return bool
     */
    public function getEnableSum()
    {
        return $this->container['enable_sum'];
    }

    /**
     * Sets enable_sum
     *
     * @param bool $enable_sum enable_sum
     *
     * @return $this
     */
    public function setEnableSum($enable_sum)
    {
        $this->container['enable_sum'] = $enable_sum;

        return $this;
    }

    /**
     * Gets unclaimed
     *
     * @return bool
     */
    public function getUnclaimed()
    {
        return $this->container['unclaimed'];
    }

    /**
     * Sets unclaimed
     *
     * @param bool $unclaimed unclaimed
     *
     * @return $this
     */
    public function setUnclaimed($unclaimed)
    {
        $this->container['unclaimed'] = $unclaimed;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets bundle_name
     *
     * @return string
     */
    public function getBundleName()
    {
        return $this->container['bundle_name'];
    }

    /**
     * Sets bundle_name
     *
     * @param string $bundle_name bundle_name
     *
     * @return $this
     */
    public function setBundleName($bundle_name)
    {
        $this->container['bundle_name'] = $bundle_name;

        return $this;
    }

    /**
     * Gets schema_name
     *
     * @return string
     */
    public function getSchemaName()
    {
        return $this->container['schema_name'];
    }

    /**
     * Sets schema_name
     *
     * @param string $schema_name schema_name
     *
     * @return $this
     */
    public function setSchemaName($schema_name)
    {
        $this->container['schema_name'] = $schema_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}