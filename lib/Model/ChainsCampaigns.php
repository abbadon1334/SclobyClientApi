<?php
/**
 * ChainsCampaigns
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
 * ChainsCampaigns Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChainsCampaigns implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'chains_campaigns';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'from_date' => '\DateTime',
'to_date' => '\DateTime',
'active' => 'bool',
'rules_application_on_prizes' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'createdby_id' => 'int',
'updatedby_id' => 'int',
'deletedby_id' => 'int',
'is_valid' => 'object',
'items' => '\Swagger\Client\Model\CampaignitemSchema[]',
'rules' => '\Swagger\Client\Model\RuleSchema[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'from_date' => 'date-time',
'to_date' => 'date-time',
'active' => null,
'rules_application_on_prizes' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'createdby_id' => null,
'updatedby_id' => null,
'deletedby_id' => null,
'is_valid' => null,
'items' => null,
'rules' => null    ];

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
'from_date' => 'from_date',
'to_date' => 'to_date',
'active' => 'active',
'rules_application_on_prizes' => 'rules_application_on_prizes',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'createdby_id' => 'createdby_id',
'updatedby_id' => 'updatedby_id',
'deletedby_id' => 'deletedby_id',
'is_valid' => 'isValid',
'items' => 'items',
'rules' => 'rules'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'from_date' => 'setFromDate',
'to_date' => 'setToDate',
'active' => 'setActive',
'rules_application_on_prizes' => 'setRulesApplicationOnPrizes',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'createdby_id' => 'setCreatedbyId',
'updatedby_id' => 'setUpdatedbyId',
'deletedby_id' => 'setDeletedbyId',
'is_valid' => 'setIsValid',
'items' => 'setItems',
'rules' => 'setRules'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'from_date' => 'getFromDate',
'to_date' => 'getToDate',
'active' => 'getActive',
'rules_application_on_prizes' => 'getRulesApplicationOnPrizes',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'createdby_id' => 'getCreatedbyId',
'updatedby_id' => 'getUpdatedbyId',
'deletedby_id' => 'getDeletedbyId',
'is_valid' => 'getIsValid',
'items' => 'getItems',
'rules' => 'getRules'    ];

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
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['rules_application_on_prizes'] = isset($data['rules_application_on_prizes']) ? $data['rules_application_on_prizes'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['createdby_id'] = isset($data['createdby_id']) ? $data['createdby_id'] : null;
        $this->container['updatedby_id'] = isset($data['updatedby_id']) ? $data['updatedby_id'] : null;
        $this->container['deletedby_id'] = isset($data['deletedby_id']) ? $data['deletedby_id'] : null;
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
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
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date from_date
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date to_date
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets rules_application_on_prizes
     *
     * @return string
     */
    public function getRulesApplicationOnPrizes()
    {
        return $this->container['rules_application_on_prizes'];
    }

    /**
     * Sets rules_application_on_prizes
     *
     * @param string $rules_application_on_prizes rules_application_on_prizes
     *
     * @return $this
     */
    public function setRulesApplicationOnPrizes($rules_application_on_prizes)
    {
        $this->container['rules_application_on_prizes'] = $rules_application_on_prizes;

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
     * Gets is_valid
     *
     * @return object
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param object $is_valid is_valid
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Swagger\Client\Model\CampaignitemSchema[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Swagger\Client\Model\CampaignitemSchema[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \Swagger\Client\Model\RuleSchema[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \Swagger\Client\Model\RuleSchema[] $rules rules
     *
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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
