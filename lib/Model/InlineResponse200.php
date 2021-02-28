<?php
/**
 * InlineResponse200
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
 * InlineResponse200 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'weekdays_period' => 'string[]',
'id' => 'int',
'name' => 'string',
'start_time' => 'string',
'end_time' => 'string',
'start_period' => 'string',
'end_period' => 'string',
'default_duration' => 'int',
'default_pricelist' => 'int',
'instore_seats_limit' => 'int',
'online_seats_limit' => 'int',
'room_restrictions' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'weekdays_period' => null,
'id' => null,
'name' => null,
'start_time' => null,
'end_time' => null,
'start_period' => null,
'end_period' => null,
'default_duration' => null,
'default_pricelist' => null,
'instore_seats_limit' => null,
'online_seats_limit' => null,
'room_restrictions' => null    ];

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
        'weekdays_period' => 'weekdays_period',
'id' => 'id',
'name' => 'name',
'start_time' => 'start_time',
'end_time' => 'end_time',
'start_period' => 'start_period',
'end_period' => 'end_period',
'default_duration' => 'default_duration',
'default_pricelist' => 'default_pricelist',
'instore_seats_limit' => 'instore_seats_limit',
'online_seats_limit' => 'online_seats_limit',
'room_restrictions' => 'room_restrictions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weekdays_period' => 'setWeekdaysPeriod',
'id' => 'setId',
'name' => 'setName',
'start_time' => 'setStartTime',
'end_time' => 'setEndTime',
'start_period' => 'setStartPeriod',
'end_period' => 'setEndPeriod',
'default_duration' => 'setDefaultDuration',
'default_pricelist' => 'setDefaultPricelist',
'instore_seats_limit' => 'setInstoreSeatsLimit',
'online_seats_limit' => 'setOnlineSeatsLimit',
'room_restrictions' => 'setRoomRestrictions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weekdays_period' => 'getWeekdaysPeriod',
'id' => 'getId',
'name' => 'getName',
'start_time' => 'getStartTime',
'end_time' => 'getEndTime',
'start_period' => 'getStartPeriod',
'end_period' => 'getEndPeriod',
'default_duration' => 'getDefaultDuration',
'default_pricelist' => 'getDefaultPricelist',
'instore_seats_limit' => 'getInstoreSeatsLimit',
'online_seats_limit' => 'getOnlineSeatsLimit',
'room_restrictions' => 'getRoomRestrictions'    ];

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
        $this->container['weekdays_period'] = isset($data['weekdays_period']) ? $data['weekdays_period'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['start_period'] = isset($data['start_period']) ? $data['start_period'] : null;
        $this->container['end_period'] = isset($data['end_period']) ? $data['end_period'] : null;
        $this->container['default_duration'] = isset($data['default_duration']) ? $data['default_duration'] : null;
        $this->container['default_pricelist'] = isset($data['default_pricelist']) ? $data['default_pricelist'] : null;
        $this->container['instore_seats_limit'] = isset($data['instore_seats_limit']) ? $data['instore_seats_limit'] : null;
        $this->container['online_seats_limit'] = isset($data['online_seats_limit']) ? $data['online_seats_limit'] : null;
        $this->container['room_restrictions'] = isset($data['room_restrictions']) ? $data['room_restrictions'] : null;
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
     * Gets weekdays_period
     *
     * @return string[]
     */
    public function getWeekdaysPeriod()
    {
        return $this->container['weekdays_period'];
    }

    /**
     * Sets weekdays_period
     *
     * @param string[] $weekdays_period weekdays_period
     *
     * @return $this
     */
    public function setWeekdaysPeriod($weekdays_period)
    {
        $this->container['weekdays_period'] = $weekdays_period;

        return $this;
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
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets start_period
     *
     * @return string
     */
    public function getStartPeriod()
    {
        return $this->container['start_period'];
    }

    /**
     * Sets start_period
     *
     * @param string $start_period start_period
     *
     * @return $this
     */
    public function setStartPeriod($start_period)
    {
        $this->container['start_period'] = $start_period;

        return $this;
    }

    /**
     * Gets end_period
     *
     * @return string
     */
    public function getEndPeriod()
    {
        return $this->container['end_period'];
    }

    /**
     * Sets end_period
     *
     * @param string $end_period end_period
     *
     * @return $this
     */
    public function setEndPeriod($end_period)
    {
        $this->container['end_period'] = $end_period;

        return $this;
    }

    /**
     * Gets default_duration
     *
     * @return int
     */
    public function getDefaultDuration()
    {
        return $this->container['default_duration'];
    }

    /**
     * Sets default_duration
     *
     * @param int $default_duration default_duration
     *
     * @return $this
     */
    public function setDefaultDuration($default_duration)
    {
        $this->container['default_duration'] = $default_duration;

        return $this;
    }

    /**
     * Gets default_pricelist
     *
     * @return int
     */
    public function getDefaultPricelist()
    {
        return $this->container['default_pricelist'];
    }

    /**
     * Sets default_pricelist
     *
     * @param int $default_pricelist default_pricelist
     *
     * @return $this
     */
    public function setDefaultPricelist($default_pricelist)
    {
        $this->container['default_pricelist'] = $default_pricelist;

        return $this;
    }

    /**
     * Gets instore_seats_limit
     *
     * @return int
     */
    public function getInstoreSeatsLimit()
    {
        return $this->container['instore_seats_limit'];
    }

    /**
     * Sets instore_seats_limit
     *
     * @param int $instore_seats_limit instore_seats_limit
     *
     * @return $this
     */
    public function setInstoreSeatsLimit($instore_seats_limit)
    {
        $this->container['instore_seats_limit'] = $instore_seats_limit;

        return $this;
    }

    /**
     * Gets online_seats_limit
     *
     * @return int
     */
    public function getOnlineSeatsLimit()
    {
        return $this->container['online_seats_limit'];
    }

    /**
     * Sets online_seats_limit
     *
     * @param int $online_seats_limit online_seats_limit
     *
     * @return $this
     */
    public function setOnlineSeatsLimit($online_seats_limit)
    {
        $this->container['online_seats_limit'] = $online_seats_limit;

        return $this;
    }

    /**
     * Gets room_restrictions
     *
     * @return string[]
     */
    public function getRoomRestrictions()
    {
        return $this->container['room_restrictions'];
    }

    /**
     * Sets room_restrictions
     *
     * @param string[] $room_restrictions room_restrictions
     *
     * @return $this
     */
    public function setRoomRestrictions($room_restrictions)
    {
        $this->container['room_restrictions'] = $room_restrictions;

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