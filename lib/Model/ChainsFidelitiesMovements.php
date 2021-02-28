<?php
/**
 * ChainsFidelitiesMovements
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
 * ChainsFidelitiesMovements Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChainsFidelitiesMovements implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'chains_fidelities_movements';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'date' => '\DateTime',
'db_name' => 'string',
'shop_name' => 'string',
'fidelity' => 'string',
'campaign_id' => 'int',
'campaign_name' => 'string',
'rule_id' => 'int',
'rule_name' => 'string',
'prize_id' => 'int',
'sale_id' => 'int',
'sale_name' => 'string',
'item_sku' => 'string',
'item_name' => 'string',
'points' => 'int',
'notes' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'date' => 'date-time',
'db_name' => null,
'shop_name' => null,
'fidelity' => null,
'campaign_id' => null,
'campaign_name' => null,
'rule_id' => null,
'rule_name' => null,
'prize_id' => null,
'sale_id' => null,
'sale_name' => null,
'item_sku' => null,
'item_name' => null,
'points' => null,
'notes' => null    ];

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
'date' => 'date',
'db_name' => 'db_name',
'shop_name' => 'shop_name',
'fidelity' => 'fidelity',
'campaign_id' => 'campaign_id',
'campaign_name' => 'campaign_name',
'rule_id' => 'rule_id',
'rule_name' => 'rule_name',
'prize_id' => 'prize_id',
'sale_id' => 'sale_id',
'sale_name' => 'sale_name',
'item_sku' => 'item_sku',
'item_name' => 'item_name',
'points' => 'points',
'notes' => 'notes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'date' => 'setDate',
'db_name' => 'setDbName',
'shop_name' => 'setShopName',
'fidelity' => 'setFidelity',
'campaign_id' => 'setCampaignId',
'campaign_name' => 'setCampaignName',
'rule_id' => 'setRuleId',
'rule_name' => 'setRuleName',
'prize_id' => 'setPrizeId',
'sale_id' => 'setSaleId',
'sale_name' => 'setSaleName',
'item_sku' => 'setItemSku',
'item_name' => 'setItemName',
'points' => 'setPoints',
'notes' => 'setNotes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'date' => 'getDate',
'db_name' => 'getDbName',
'shop_name' => 'getShopName',
'fidelity' => 'getFidelity',
'campaign_id' => 'getCampaignId',
'campaign_name' => 'getCampaignName',
'rule_id' => 'getRuleId',
'rule_name' => 'getRuleName',
'prize_id' => 'getPrizeId',
'sale_id' => 'getSaleId',
'sale_name' => 'getSaleName',
'item_sku' => 'getItemSku',
'item_name' => 'getItemName',
'points' => 'getPoints',
'notes' => 'getNotes'    ];

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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['db_name'] = isset($data['db_name']) ? $data['db_name'] : null;
        $this->container['shop_name'] = isset($data['shop_name']) ? $data['shop_name'] : null;
        $this->container['fidelity'] = isset($data['fidelity']) ? $data['fidelity'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['campaign_name'] = isset($data['campaign_name']) ? $data['campaign_name'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['prize_id'] = isset($data['prize_id']) ? $data['prize_id'] : null;
        $this->container['sale_id'] = isset($data['sale_id']) ? $data['sale_id'] : null;
        $this->container['sale_name'] = isset($data['sale_name']) ? $data['sale_name'] : null;
        $this->container['item_sku'] = isset($data['item_sku']) ? $data['item_sku'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['db_name'] === null) {
            $invalidProperties[] = "'db_name' can't be null";
        }
        if ($this->container['fidelity'] === null) {
            $invalidProperties[] = "'fidelity' can't be null";
        }
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['campaign_name'] === null) {
            $invalidProperties[] = "'campaign_name' can't be null";
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
     * Gets db_name
     *
     * @return string
     */
    public function getDbName()
    {
        return $this->container['db_name'];
    }

    /**
     * Sets db_name
     *
     * @param string $db_name db_name
     *
     * @return $this
     */
    public function setDbName($db_name)
    {
        $this->container['db_name'] = $db_name;

        return $this;
    }

    /**
     * Gets shop_name
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string $shop_name shop_name
     *
     * @return $this
     */
    public function setShopName($shop_name)
    {
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets fidelity
     *
     * @return string
     */
    public function getFidelity()
    {
        return $this->container['fidelity'];
    }

    /**
     * Sets fidelity
     *
     * @param string $fidelity fidelity
     *
     * @return $this
     */
    public function setFidelity($fidelity)
    {
        $this->container['fidelity'] = $fidelity;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string $campaign_name campaign_name
     *
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return int
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param int $rule_id rule_id
     *
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule_name
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     *
     * @param string $rule_name rule_name
     *
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets prize_id
     *
     * @return int
     */
    public function getPrizeId()
    {
        return $this->container['prize_id'];
    }

    /**
     * Sets prize_id
     *
     * @param int $prize_id prize_id
     *
     * @return $this
     */
    public function setPrizeId($prize_id)
    {
        $this->container['prize_id'] = $prize_id;

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
     * Gets sale_name
     *
     * @return string
     */
    public function getSaleName()
    {
        return $this->container['sale_name'];
    }

    /**
     * Sets sale_name
     *
     * @param string $sale_name sale_name
     *
     * @return $this
     */
    public function setSaleName($sale_name)
    {
        $this->container['sale_name'] = $sale_name;

        return $this;
    }

    /**
     * Gets item_sku
     *
     * @return string
     */
    public function getItemSku()
    {
        return $this->container['item_sku'];
    }

    /**
     * Sets item_sku
     *
     * @param string $item_sku item_sku
     *
     * @return $this
     */
    public function setItemSku($item_sku)
    {
        $this->container['item_sku'] = $item_sku;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string $item_name item_name
     *
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

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
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
