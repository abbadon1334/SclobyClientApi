<?php
/**
 * SaledocumentSchema
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
 * SaledocumentSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaledocumentSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Saledocument schema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'sale_id' => 'int',
'sequential_number' => 'int',
'printer_serial' => 'string',
'printer_id' => 'int',
'printer_name' => 'string',
'date' => '\DateTime',
'document_type' => 'string',
'document_url' => 'string',
'document_content' => 'string',
'metadata' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'meta' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'sale_id' => null,
'sequential_number' => null,
'printer_serial' => null,
'printer_id' => null,
'printer_name' => null,
'date' => 'date-time',
'document_type' => null,
'document_url' => null,
'document_content' => null,
'metadata' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'meta' => null    ];

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
'sale_id' => 'sale_id',
'sequential_number' => 'sequential_number',
'printer_serial' => 'printer_serial',
'printer_id' => 'printer_id',
'printer_name' => 'printer_name',
'date' => 'date',
'document_type' => 'document_type',
'document_url' => 'document_url',
'document_content' => 'document_content',
'metadata' => 'metadata',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'meta' => 'meta'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sale_id' => 'setSaleId',
'sequential_number' => 'setSequentialNumber',
'printer_serial' => 'setPrinterSerial',
'printer_id' => 'setPrinterId',
'printer_name' => 'setPrinterName',
'date' => 'setDate',
'document_type' => 'setDocumentType',
'document_url' => 'setDocumentUrl',
'document_content' => 'setDocumentContent',
'metadata' => 'setMetadata',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'meta' => 'setMeta'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sale_id' => 'getSaleId',
'sequential_number' => 'getSequentialNumber',
'printer_serial' => 'getPrinterSerial',
'printer_id' => 'getPrinterId',
'printer_name' => 'getPrinterName',
'date' => 'getDate',
'document_type' => 'getDocumentType',
'document_url' => 'getDocumentUrl',
'document_content' => 'getDocumentContent',
'metadata' => 'getMetadata',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'meta' => 'getMeta'    ];

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
        $this->container['sale_id'] = isset($data['sale_id']) ? $data['sale_id'] : null;
        $this->container['sequential_number'] = isset($data['sequential_number']) ? $data['sequential_number'] : null;
        $this->container['printer_serial'] = isset($data['printer_serial']) ? $data['printer_serial'] : null;
        $this->container['printer_id'] = isset($data['printer_id']) ? $data['printer_id'] : null;
        $this->container['printer_name'] = isset($data['printer_name']) ? $data['printer_name'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['document_url'] = isset($data['document_url']) ? $data['document_url'] : null;
        $this->container['document_content'] = isset($data['document_content']) ? $data['document_content'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_type'] === null) {
            $invalidProperties[] = "'document_type' can't be null";
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
     * Gets sale_id
     *
     * @return int
     */
    public function getSaleId()
    {
        return $this->container['sale_id'];
    }

    /**
     * Sets sale_id
     *
     * @param int $sale_id sale_id
     *
     * @return $this
     */
    public function setSaleId($sale_id)
    {
        $this->container['sale_id'] = $sale_id;

        return $this;
    }

    /**
     * Gets sequential_number
     *
     * @return int
     */
    public function getSequentialNumber()
    {
        return $this->container['sequential_number'];
    }

    /**
     * Sets sequential_number
     *
     * @param int $sequential_number sequential_number
     *
     * @return $this
     */
    public function setSequentialNumber($sequential_number)
    {
        $this->container['sequential_number'] = $sequential_number;

        return $this;
    }

    /**
     * Gets printer_serial
     *
     * @return string
     */
    public function getPrinterSerial()
    {
        return $this->container['printer_serial'];
    }

    /**
     * Sets printer_serial
     *
     * @param string $printer_serial printer_serial
     *
     * @return $this
     */
    public function setPrinterSerial($printer_serial)
    {
        $this->container['printer_serial'] = $printer_serial;

        return $this;
    }

    /**
     * Gets printer_id
     *
     * @return int
     */
    public function getPrinterId()
    {
        return $this->container['printer_id'];
    }

    /**
     * Sets printer_id
     *
     * @param int $printer_id printer_id
     *
     * @return $this
     */
    public function setPrinterId($printer_id)
    {
        $this->container['printer_id'] = $printer_id;

        return $this;
    }

    /**
     * Gets printer_name
     *
     * @return string
     */
    public function getPrinterName()
    {
        return $this->container['printer_name'];
    }

    /**
     * Sets printer_name
     *
     * @param string $printer_name printer_name
     *
     * @return $this
     */
    public function setPrinterName($printer_name)
    {
        $this->container['printer_name'] = $printer_name;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type document_type
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets document_url
     *
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->container['document_url'];
    }

    /**
     * Sets document_url
     *
     * @param string $document_url document_url
     *
     * @return $this
     */
    public function setDocumentUrl($document_url)
    {
        $this->container['document_url'] = $document_url;

        return $this;
    }

    /**
     * Gets document_content
     *
     * @return string
     */
    public function getDocumentContent()
    {
        return $this->container['document_content'];
    }

    /**
     * Sets document_content
     *
     * @param string $document_content document_content
     *
     * @return $this
     */
    public function setDocumentContent($document_content)
    {
        $this->container['document_content'] = $document_content;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * Gets meta
     *
     * @return object
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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
