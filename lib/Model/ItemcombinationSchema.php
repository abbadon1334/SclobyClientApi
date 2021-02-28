<?php
/**
 * ItemcombinationSchema
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
 * ItemcombinationSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemcombinationSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Itemcombination schema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'item_id' => 'int',
'price1' => 'float',
'price2' => 'float',
'price3' => 'float',
'price4' => 'float',
'price5' => 'float',
'sku' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'combination_values' => '\Swagger\Client\Model\VariationvalueSchema[]',
'barcodes' => '\Swagger\Client\Model\CombinationbarcodeSchema[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'item_id' => null,
'price1' => null,
'price2' => null,
'price3' => null,
'price4' => null,
'price5' => null,
'sku' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'combination_values' => null,
'barcodes' => null    ];

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
'item_id' => 'item_id',
'price1' => 'price1',
'price2' => 'price2',
'price3' => 'price3',
'price4' => 'price4',
'price5' => 'price5',
'sku' => 'sku',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'combination_values' => 'combination_values',
'barcodes' => 'barcodes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'item_id' => 'setItemId',
'price1' => 'setPrice1',
'price2' => 'setPrice2',
'price3' => 'setPrice3',
'price4' => 'setPrice4',
'price5' => 'setPrice5',
'sku' => 'setSku',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'combination_values' => 'setCombinationValues',
'barcodes' => 'setBarcodes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'item_id' => 'getItemId',
'price1' => 'getPrice1',
'price2' => 'getPrice2',
'price3' => 'getPrice3',
'price4' => 'getPrice4',
'price5' => 'getPrice5',
'sku' => 'getSku',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'combination_values' => 'getCombinationValues',
'barcodes' => 'getBarcodes'    ];

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
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['price1'] = isset($data['price1']) ? $data['price1'] : null;
        $this->container['price2'] = isset($data['price2']) ? $data['price2'] : null;
        $this->container['price3'] = isset($data['price3']) ? $data['price3'] : null;
        $this->container['price4'] = isset($data['price4']) ? $data['price4'] : null;
        $this->container['price5'] = isset($data['price5']) ? $data['price5'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['combination_values'] = isset($data['combination_values']) ? $data['combination_values'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['price1'] === null) {
            $invalidProperties[] = "'price1' can't be null";
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
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets price1
     *
     * @return float
     */
    public function getPrice1()
    {
        return $this->container['price1'];
    }

    /**
     * Sets price1
     *
     * @param float $price1 price1
     *
     * @return $this
     */
    public function setPrice1($price1)
    {
        $this->container['price1'] = $price1;

        return $this;
    }

    /**
     * Gets price2
     *
     * @return float
     */
    public function getPrice2()
    {
        return $this->container['price2'];
    }

    /**
     * Sets price2
     *
     * @param float $price2 price2
     *
     * @return $this
     */
    public function setPrice2($price2)
    {
        $this->container['price2'] = $price2;

        return $this;
    }

    /**
     * Gets price3
     *
     * @return float
     */
    public function getPrice3()
    {
        return $this->container['price3'];
    }

    /**
     * Sets price3
     *
     * @param float $price3 price3
     *
     * @return $this
     */
    public function setPrice3($price3)
    {
        $this->container['price3'] = $price3;

        return $this;
    }

    /**
     * Gets price4
     *
     * @return float
     */
    public function getPrice4()
    {
        return $this->container['price4'];
    }

    /**
     * Sets price4
     *
     * @param float $price4 price4
     *
     * @return $this
     */
    public function setPrice4($price4)
    {
        $this->container['price4'] = $price4;

        return $this;
    }

    /**
     * Gets price5
     *
     * @return float
     */
    public function getPrice5()
    {
        return $this->container['price5'];
    }

    /**
     * Sets price5
     *
     * @param float $price5 price5
     *
     * @return $this
     */
    public function setPrice5($price5)
    {
        $this->container['price5'] = $price5;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
     * Gets combination_values
     *
     * @return \Swagger\Client\Model\VariationvalueSchema[]
     */
    public function getCombinationValues()
    {
        return $this->container['combination_values'];
    }

    /**
     * Sets combination_values
     *
     * @param \Swagger\Client\Model\VariationvalueSchema[] $combination_values combination_values
     *
     * @return $this
     */
    public function setCombinationValues($combination_values)
    {
        $this->container['combination_values'] = $combination_values;

        return $this;
    }

    /**
     * Gets barcodes
     *
     * @return \Swagger\Client\Model\CombinationbarcodeSchema[]
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     *
     * @param \Swagger\Client\Model\CombinationbarcodeSchema[] $barcodes barcodes
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

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
