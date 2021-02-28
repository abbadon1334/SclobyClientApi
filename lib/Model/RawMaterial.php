<?php
/**
 * RawMaterial
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
 * RawMaterial Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RawMaterial implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'rawMaterial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'cost' => 'float',
'stock_type' => 'string',
'auto_unload' => 'bool',
'quantity_alert' => 'float',
'unit' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'createdby_id' => 'int',
'updatedby_id' => 'int',
'deletedby_id' => 'int',
'default_supplier_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'cost' => null,
'stock_type' => null,
'auto_unload' => null,
'quantity_alert' => null,
'unit' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'createdby_id' => null,
'updatedby_id' => null,
'deletedby_id' => null,
'default_supplier_id' => null    ];

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
'cost' => 'cost',
'stock_type' => 'stock_type',
'auto_unload' => 'auto_unload',
'quantity_alert' => 'quantity_alert',
'unit' => 'unit',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'createdby_id' => 'createdby_id',
'updatedby_id' => 'updatedby_id',
'deletedby_id' => 'deletedby_id',
'default_supplier_id' => 'default_supplier_id'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'cost' => 'setCost',
'stock_type' => 'setStockType',
'auto_unload' => 'setAutoUnload',
'quantity_alert' => 'setQuantityAlert',
'unit' => 'setUnit',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'createdby_id' => 'setCreatedbyId',
'updatedby_id' => 'setUpdatedbyId',
'deletedby_id' => 'setDeletedbyId',
'default_supplier_id' => 'setDefaultSupplierId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'cost' => 'getCost',
'stock_type' => 'getStockType',
'auto_unload' => 'getAutoUnload',
'quantity_alert' => 'getQuantityAlert',
'unit' => 'getUnit',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'createdby_id' => 'getCreatedbyId',
'updatedby_id' => 'getUpdatedbyId',
'deletedby_id' => 'getDeletedbyId',
'default_supplier_id' => 'getDefaultSupplierId'    ];

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
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['stock_type'] = isset($data['stock_type']) ? $data['stock_type'] : null;
        $this->container['auto_unload'] = isset($data['auto_unload']) ? $data['auto_unload'] : null;
        $this->container['quantity_alert'] = isset($data['quantity_alert']) ? $data['quantity_alert'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['createdby_id'] = isset($data['createdby_id']) ? $data['createdby_id'] : null;
        $this->container['updatedby_id'] = isset($data['updatedby_id']) ? $data['updatedby_id'] : null;
        $this->container['deletedby_id'] = isset($data['deletedby_id']) ? $data['deletedby_id'] : null;
        $this->container['default_supplier_id'] = isset($data['default_supplier_id']) ? $data['default_supplier_id'] : null;
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
     * @param string $name Raw Material name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets stock_type
     *
     * @return string
     */
    public function getStockType()
    {
        return $this->container['stock_type'];
    }

    /**
     * Sets stock_type
     *
     * @param string $stock_type stock_type
     *
     * @return $this
     */
    public function setStockType($stock_type)
    {
        $this->container['stock_type'] = $stock_type;

        return $this;
    }

    /**
     * Gets auto_unload
     *
     * @return bool
     */
    public function getAutoUnload()
    {
        return $this->container['auto_unload'];
    }

    /**
     * Sets auto_unload
     *
     * @param bool $auto_unload auto_unload
     *
     * @return $this
     */
    public function setAutoUnload($auto_unload)
    {
        $this->container['auto_unload'] = $auto_unload;

        return $this;
    }

    /**
     * Gets quantity_alert
     *
     * @return float
     */
    public function getQuantityAlert()
    {
        return $this->container['quantity_alert'];
    }

    /**
     * Sets quantity_alert
     *
     * @param float $quantity_alert quantity_alert
     *
     * @return $this
     */
    public function setQuantityAlert($quantity_alert)
    {
        $this->container['quantity_alert'] = $quantity_alert;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at deleted_at
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets createdby_id
     *
     * @return int
     */
    public function getCreatedbyId()
    {
        return $this->container['createdby_id'];
    }

    /**
     * Sets createdby_id
     *
     * @param int $createdby_id createdby_id
     *
     * @return $this
     */
    public function setCreatedbyId($createdby_id)
    {
        $this->container['createdby_id'] = $createdby_id;

        return $this;
    }

    /**
     * Gets updatedby_id
     *
     * @return int
     */
    public function getUpdatedbyId()
    {
        return $this->container['updatedby_id'];
    }

    /**
     * Sets updatedby_id
     *
     * @param int $updatedby_id updatedby_id
     *
     * @return $this
     */
    public function setUpdatedbyId($updatedby_id)
    {
        $this->container['updatedby_id'] = $updatedby_id;

        return $this;
    }

    /**
     * Gets deletedby_id
     *
     * @return int
     */
    public function getDeletedbyId()
    {
        return $this->container['deletedby_id'];
    }

    /**
     * Sets deletedby_id
     *
     * @param int $deletedby_id deletedby_id
     *
     * @return $this
     */
    public function setDeletedbyId($deletedby_id)
    {
        $this->container['deletedby_id'] = $deletedby_id;

        return $this;
    }

    /**
     * Gets default_supplier_id
     *
     * @return int
     */
    public function getDefaultSupplierId()
    {
        return $this->container['default_supplier_id'];
    }

    /**
     * Sets default_supplier_id
     *
     * @param int $default_supplier_id default_supplier_id
     *
     * @return $this
     */
    public function setDefaultSupplierId($default_supplier_id)
    {
        $this->container['default_supplier_id'] = $default_supplier_id;

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
