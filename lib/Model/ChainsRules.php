<?php
/**
 * ChainsRules
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
 * Swagger Codegen version: 3.0.24
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
 * ChainsRules Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChainsRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'chains_rules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'type' => 'string',
'min_threshold' => 'float',
'max_threshold' => 'float',
'exclude_to_min' => 'bool',
'points' => 'int',
'param1' => 'string',
'param2' => 'string',
'param3' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'type' => null,
'min_threshold' => null,
'max_threshold' => null,
'exclude_to_min' => null,
'points' => null,
'param1' => null,
'param2' => null,
'param3' => null    ];

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
'type' => 'type',
'min_threshold' => 'min_threshold',
'max_threshold' => 'max_threshold',
'exclude_to_min' => 'exclude_to_min',
'points' => 'points',
'param1' => 'param1',
'param2' => 'param2',
'param3' => 'param3'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'type' => 'setType',
'min_threshold' => 'setMinThreshold',
'max_threshold' => 'setMaxThreshold',
'exclude_to_min' => 'setExcludeToMin',
'points' => 'setPoints',
'param1' => 'setParam1',
'param2' => 'setParam2',
'param3' => 'setParam3'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'type' => 'getType',
'min_threshold' => 'getMinThreshold',
'max_threshold' => 'getMaxThreshold',
'exclude_to_min' => 'getExcludeToMin',
'points' => 'getPoints',
'param1' => 'getParam1',
'param2' => 'getParam2',
'param3' => 'getParam3'    ];

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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['min_threshold'] = isset($data['min_threshold']) ? $data['min_threshold'] : null;
        $this->container['max_threshold'] = isset($data['max_threshold']) ? $data['max_threshold'] : null;
        $this->container['exclude_to_min'] = isset($data['exclude_to_min']) ? $data['exclude_to_min'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['param1'] = isset($data['param1']) ? $data['param1'] : null;
        $this->container['param2'] = isset($data['param2']) ? $data['param2'] : null;
        $this->container['param3'] = isset($data['param3']) ? $data['param3'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['points'] === null) {
            $invalidProperties[] = "'points' can't be null";
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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets min_threshold
     *
     * @return float
     */
    public function getMinThreshold()
    {
        return $this->container['min_threshold'];
    }

    /**
     * Sets min_threshold
     *
     * @param float $min_threshold min_threshold
     *
     * @return $this
     */
    public function setMinThreshold($min_threshold)
    {
        $this->container['min_threshold'] = $min_threshold;

        return $this;
    }

    /**
     * Gets max_threshold
     *
     * @return float
     */
    public function getMaxThreshold()
    {
        return $this->container['max_threshold'];
    }

    /**
     * Sets max_threshold
     *
     * @param float $max_threshold max_threshold
     *
     * @return $this
     */
    public function setMaxThreshold($max_threshold)
    {
        $this->container['max_threshold'] = $max_threshold;

        return $this;
    }

    /**
     * Gets exclude_to_min
     *
     * @return bool
     */
    public function getExcludeToMin()
    {
        return $this->container['exclude_to_min'];
    }

    /**
     * Sets exclude_to_min
     *
     * @param bool $exclude_to_min exclude_to_min
     *
     * @return $this
     */
    public function setExcludeToMin($exclude_to_min)
    {
        $this->container['exclude_to_min'] = $exclude_to_min;

        return $this;
    }

    /**
     * Gets points
     *
     * @return int
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param int $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets param1
     *
     * @return string
     */
    public function getParam1()
    {
        return $this->container['param1'];
    }

    /**
     * Sets param1
     *
     * @param string $param1 param1
     *
     * @return $this
     */
    public function setParam1($param1)
    {
        $this->container['param1'] = $param1;

        return $this;
    }

    /**
     * Gets param2
     *
     * @return string
     */
    public function getParam2()
    {
        return $this->container['param2'];
    }

    /**
     * Sets param2
     *
     * @param string $param2 param2
     *
     * @return $this
     */
    public function setParam2($param2)
    {
        $this->container['param2'] = $param2;

        return $this;
    }

    /**
     * Gets param3
     *
     * @return string
     */
    public function getParam3()
    {
        return $this->container['param3'];
    }

    /**
     * Sets param3
     *
     * @param string $param3 param3
     *
     * @return $this
     */
    public function setParam3($param3)
    {
        $this->container['param3'] = $param3;

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
