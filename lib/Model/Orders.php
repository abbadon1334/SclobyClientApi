<?php
/**
 * Orders
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
 * Orders Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Orders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'uuid' => 'string',
'order_parent_id' => 'int',
'order_parent_uuid' => 'string',
'name' => 'string',
'type' => 'string',
'paid' => 'bool',
'external_id' => 'string',
'channel' => 'string',
'notes' => 'string',
'status' => 'string',
'amount' => 'float',
'net_amount' => 'float',
'room_id' => 'int',
'room_name' => 'string',
'table_id' => 'int',
'table_name' => 'string',
'operator_id' => 'int',
'operator_name' => 'string',
'lastupdate_at' => '\DateTime',
'lastupdate_by' => 'int',
'order_number' => 'int',
'covers' => 'int',
'open_at' => '\DateTime',
'checkout_at' => '\DateTime',
'closed_at' => '\DateTime',
'deliver_at' => '\DateTime',
'last_sent_by' => 'int',
'last_sent_at' => '\DateTime',
'previous' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'createdby_id' => 'int',
'updatedby_id' => 'int',
'deletedby_id' => 'int',
'previous_order' => 'object',
'order_items' => '\Swagger\Client\Model\OrderitemSchema[]',
'order_customer' => '\Swagger\Client\Model\OrdercustomerSchema'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'uuid' => null,
'order_parent_id' => null,
'order_parent_uuid' => null,
'name' => null,
'type' => null,
'paid' => null,
'external_id' => null,
'channel' => null,
'notes' => null,
'status' => null,
'amount' => null,
'net_amount' => null,
'room_id' => null,
'room_name' => null,
'table_id' => null,
'table_name' => null,
'operator_id' => null,
'operator_name' => null,
'lastupdate_at' => 'date-time',
'lastupdate_by' => null,
'order_number' => null,
'covers' => null,
'open_at' => 'date-time',
'checkout_at' => 'date-time',
'closed_at' => 'date-time',
'deliver_at' => 'date-time',
'last_sent_by' => null,
'last_sent_at' => 'date-time',
'previous' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'createdby_id' => null,
'updatedby_id' => null,
'deletedby_id' => null,
'previous_order' => null,
'order_items' => null,
'order_customer' => null    ];

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
'uuid' => 'uuid',
'order_parent_id' => 'order_parent_id',
'order_parent_uuid' => 'order_parent_uuid',
'name' => 'name',
'type' => 'type',
'paid' => 'paid',
'external_id' => 'external_id',
'channel' => 'channel',
'notes' => 'notes',
'status' => 'status',
'amount' => 'amount',
'net_amount' => 'net_amount',
'room_id' => 'room_id',
'room_name' => 'room_name',
'table_id' => 'table_id',
'table_name' => 'table_name',
'operator_id' => 'operator_id',
'operator_name' => 'operator_name',
'lastupdate_at' => 'lastupdate_at',
'lastupdate_by' => 'lastupdate_by',
'order_number' => 'order_number',
'covers' => 'covers',
'open_at' => 'open_at',
'checkout_at' => 'checkout_at',
'closed_at' => 'closed_at',
'deliver_at' => 'deliver_at',
'last_sent_by' => 'last_sent_by',
'last_sent_at' => 'last_sent_at',
'previous' => 'previous',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'createdby_id' => 'createdby_id',
'updatedby_id' => 'updatedby_id',
'deletedby_id' => 'deletedby_id',
'previous_order' => 'previous_order',
'order_items' => 'order_items',
'order_customer' => 'order_customer'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'uuid' => 'setUuid',
'order_parent_id' => 'setOrderParentId',
'order_parent_uuid' => 'setOrderParentUuid',
'name' => 'setName',
'type' => 'setType',
'paid' => 'setPaid',
'external_id' => 'setExternalId',
'channel' => 'setChannel',
'notes' => 'setNotes',
'status' => 'setStatus',
'amount' => 'setAmount',
'net_amount' => 'setNetAmount',
'room_id' => 'setRoomId',
'room_name' => 'setRoomName',
'table_id' => 'setTableId',
'table_name' => 'setTableName',
'operator_id' => 'setOperatorId',
'operator_name' => 'setOperatorName',
'lastupdate_at' => 'setLastupdateAt',
'lastupdate_by' => 'setLastupdateBy',
'order_number' => 'setOrderNumber',
'covers' => 'setCovers',
'open_at' => 'setOpenAt',
'checkout_at' => 'setCheckoutAt',
'closed_at' => 'setClosedAt',
'deliver_at' => 'setDeliverAt',
'last_sent_by' => 'setLastSentBy',
'last_sent_at' => 'setLastSentAt',
'previous' => 'setPrevious',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'createdby_id' => 'setCreatedbyId',
'updatedby_id' => 'setUpdatedbyId',
'deletedby_id' => 'setDeletedbyId',
'previous_order' => 'setPreviousOrder',
'order_items' => 'setOrderItems',
'order_customer' => 'setOrderCustomer'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'uuid' => 'getUuid',
'order_parent_id' => 'getOrderParentId',
'order_parent_uuid' => 'getOrderParentUuid',
'name' => 'getName',
'type' => 'getType',
'paid' => 'getPaid',
'external_id' => 'getExternalId',
'channel' => 'getChannel',
'notes' => 'getNotes',
'status' => 'getStatus',
'amount' => 'getAmount',
'net_amount' => 'getNetAmount',
'room_id' => 'getRoomId',
'room_name' => 'getRoomName',
'table_id' => 'getTableId',
'table_name' => 'getTableName',
'operator_id' => 'getOperatorId',
'operator_name' => 'getOperatorName',
'lastupdate_at' => 'getLastupdateAt',
'lastupdate_by' => 'getLastupdateBy',
'order_number' => 'getOrderNumber',
'covers' => 'getCovers',
'open_at' => 'getOpenAt',
'checkout_at' => 'getCheckoutAt',
'closed_at' => 'getClosedAt',
'deliver_at' => 'getDeliverAt',
'last_sent_by' => 'getLastSentBy',
'last_sent_at' => 'getLastSentAt',
'previous' => 'getPrevious',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'createdby_id' => 'getCreatedbyId',
'updatedby_id' => 'getUpdatedbyId',
'deletedby_id' => 'getDeletedbyId',
'previous_order' => 'getPreviousOrder',
'order_items' => 'getOrderItems',
'order_customer' => 'getOrderCustomer'    ];

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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['order_parent_id'] = isset($data['order_parent_id']) ? $data['order_parent_id'] : null;
        $this->container['order_parent_uuid'] = isset($data['order_parent_uuid']) ? $data['order_parent_uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['room_id'] = isset($data['room_id']) ? $data['room_id'] : null;
        $this->container['room_name'] = isset($data['room_name']) ? $data['room_name'] : null;
        $this->container['table_id'] = isset($data['table_id']) ? $data['table_id'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['operator_id'] = isset($data['operator_id']) ? $data['operator_id'] : null;
        $this->container['operator_name'] = isset($data['operator_name']) ? $data['operator_name'] : null;
        $this->container['lastupdate_at'] = isset($data['lastupdate_at']) ? $data['lastupdate_at'] : null;
        $this->container['lastupdate_by'] = isset($data['lastupdate_by']) ? $data['lastupdate_by'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['covers'] = isset($data['covers']) ? $data['covers'] : null;
        $this->container['open_at'] = isset($data['open_at']) ? $data['open_at'] : null;
        $this->container['checkout_at'] = isset($data['checkout_at']) ? $data['checkout_at'] : null;
        $this->container['closed_at'] = isset($data['closed_at']) ? $data['closed_at'] : null;
        $this->container['deliver_at'] = isset($data['deliver_at']) ? $data['deliver_at'] : null;
        $this->container['last_sent_by'] = isset($data['last_sent_by']) ? $data['last_sent_by'] : null;
        $this->container['last_sent_at'] = isset($data['last_sent_at']) ? $data['last_sent_at'] : null;
        $this->container['previous'] = isset($data['previous']) ? $data['previous'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['createdby_id'] = isset($data['createdby_id']) ? $data['createdby_id'] : null;
        $this->container['updatedby_id'] = isset($data['updatedby_id']) ? $data['updatedby_id'] : null;
        $this->container['deletedby_id'] = isset($data['deletedby_id']) ? $data['deletedby_id'] : null;
        $this->container['previous_order'] = isset($data['previous_order']) ? $data['previous_order'] : null;
        $this->container['order_items'] = isset($data['order_items']) ? $data['order_items'] : null;
        $this->container['order_customer'] = isset($data['order_customer']) ? $data['order_customer'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['operator_id'] === null) {
            $invalidProperties[] = "'operator_id' can't be null";
        }
        if ($this->container['operator_name'] === null) {
            $invalidProperties[] = "'operator_name' can't be null";
        }
        if ($this->container['open_at'] === null) {
            $invalidProperties[] = "'open_at' can't be null";
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets order_parent_id
     *
     * @return int
     */
    public function getOrderParentId()
    {
        return $this->container['order_parent_id'];
    }

    /**
     * Sets order_parent_id
     *
     * @param int $order_parent_id order_parent_id
     *
     * @return $this
     */
    public function setOrderParentId($order_parent_id)
    {
        $this->container['order_parent_id'] = $order_parent_id;

        return $this;
    }

    /**
     * Gets order_parent_uuid
     *
     * @return string
     */
    public function getOrderParentUuid()
    {
        return $this->container['order_parent_uuid'];
    }

    /**
     * Sets order_parent_uuid
     *
     * @param string $order_parent_uuid order_parent_uuid
     *
     * @return $this
     */
    public function setOrderParentUuid($order_parent_uuid)
    {
        $this->container['order_parent_uuid'] = $order_parent_uuid;

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
     * @param string $type Order type, can be normal or take_away
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool $paid paid
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Order status, can be open, checkout, closed or missed
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Sum of final_price of all order_items
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return float
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param float $net_amount Sum of final_net_price of all order_items
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets room_id
     *
     * @return int
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param int $room_id room_id
     *
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

        return $this;
    }

    /**
     * Gets room_name
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->container['room_name'];
    }

    /**
     * Sets room_name
     *
     * @param string $room_name room_name
     *
     * @return $this
     */
    public function setRoomName($room_name)
    {
        $this->container['room_name'] = $room_name;

        return $this;
    }

    /**
     * Gets table_id
     *
     * @return int
     */
    public function getTableId()
    {
        return $this->container['table_id'];
    }

    /**
     * Sets table_id
     *
     * @param int $table_id table_id
     *
     * @return $this
     */
    public function setTableId($table_id)
    {
        $this->container['table_id'] = $table_id;

        return $this;
    }

    /**
     * Gets table_name
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     *
     * @param string $table_name table_name
     *
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

        return $this;
    }

    /**
     * Gets operator_id
     *
     * @return int
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param int $operator_id operator_id
     *
     * @return $this
     */
    public function setOperatorId($operator_id)
    {
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets operator_name
     *
     * @return string
     */
    public function getOperatorName()
    {
        return $this->container['operator_name'];
    }

    /**
     * Sets operator_name
     *
     * @param string $operator_name operator_name
     *
     * @return $this
     */
    public function setOperatorName($operator_name)
    {
        $this->container['operator_name'] = $operator_name;

        return $this;
    }

    /**
     * Gets lastupdate_at
     *
     * @return \DateTime
     */
    public function getLastupdateAt()
    {
        return $this->container['lastupdate_at'];
    }

    /**
     * Sets lastupdate_at
     *
     * @param \DateTime $lastupdate_at lastupdate_at
     *
     * @return $this
     */
    public function setLastupdateAt($lastupdate_at)
    {
        $this->container['lastupdate_at'] = $lastupdate_at;

        return $this;
    }

    /**
     * Gets lastupdate_by
     *
     * @return int
     */
    public function getLastupdateBy()
    {
        return $this->container['lastupdate_by'];
    }

    /**
     * Sets lastupdate_by
     *
     * @param int $lastupdate_by lastupdate_by
     *
     * @return $this
     */
    public function setLastupdateBy($lastupdate_by)
    {
        $this->container['lastupdate_by'] = $lastupdate_by;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets covers
     *
     * @return int
     */
    public function getCovers()
    {
        return $this->container['covers'];
    }

    /**
     * Sets covers
     *
     * @param int $covers covers
     *
     * @return $this
     */
    public function setCovers($covers)
    {
        $this->container['covers'] = $covers;

        return $this;
    }

    /**
     * Gets open_at
     *
     * @return \DateTime
     */
    public function getOpenAt()
    {
        return $this->container['open_at'];
    }

    /**
     * Sets open_at
     *
     * @param \DateTime $open_at open_at
     *
     * @return $this
     */
    public function setOpenAt($open_at)
    {
        $this->container['open_at'] = $open_at;

        return $this;
    }

    /**
     * Gets checkout_at
     *
     * @return \DateTime
     */
    public function getCheckoutAt()
    {
        return $this->container['checkout_at'];
    }

    /**
     * Sets checkout_at
     *
     * @param \DateTime $checkout_at checkout_at
     *
     * @return $this
     */
    public function setCheckoutAt($checkout_at)
    {
        $this->container['checkout_at'] = $checkout_at;

        return $this;
    }

    /**
     * Gets closed_at
     *
     * @return \DateTime
     */
    public function getClosedAt()
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param \DateTime $closed_at closed_at
     *
     * @return $this
     */
    public function setClosedAt($closed_at)
    {
        $this->container['closed_at'] = $closed_at;

        return $this;
    }

    /**
     * Gets deliver_at
     *
     * @return \DateTime
     */
    public function getDeliverAt()
    {
        return $this->container['deliver_at'];
    }

    /**
     * Sets deliver_at
     *
     * @param \DateTime $deliver_at deliver_at
     *
     * @return $this
     */
    public function setDeliverAt($deliver_at)
    {
        $this->container['deliver_at'] = $deliver_at;

        return $this;
    }

    /**
     * Gets last_sent_by
     *
     * @return int
     */
    public function getLastSentBy()
    {
        return $this->container['last_sent_by'];
    }

    /**
     * Sets last_sent_by
     *
     * @param int $last_sent_by last_sent_by
     *
     * @return $this
     */
    public function setLastSentBy($last_sent_by)
    {
        $this->container['last_sent_by'] = $last_sent_by;

        return $this;
    }

    /**
     * Gets last_sent_at
     *
     * @return \DateTime
     */
    public function getLastSentAt()
    {
        return $this->container['last_sent_at'];
    }

    /**
     * Sets last_sent_at
     *
     * @param \DateTime $last_sent_at last_sent_at
     *
     * @return $this
     */
    public function setLastSentAt($last_sent_at)
    {
        $this->container['last_sent_at'] = $last_sent_at;

        return $this;
    }

    /**
     * Gets previous
     *
     * @return string
     */
    public function getPrevious()
    {
        return $this->container['previous'];
    }

    /**
     * Sets previous
     *
     * @param string $previous previous
     *
     * @return $this
     */
    public function setPrevious($previous)
    {
        $this->container['previous'] = $previous;

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
     * Gets previous_order
     *
     * @return object
     */
    public function getPreviousOrder()
    {
        return $this->container['previous_order'];
    }

    /**
     * Sets previous_order
     *
     * @param object $previous_order previous_order
     *
     * @return $this
     */
    public function setPreviousOrder($previous_order)
    {
        $this->container['previous_order'] = $previous_order;

        return $this;
    }

    /**
     * Gets order_items
     *
     * @return \Swagger\Client\Model\OrderitemSchema[]
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param \Swagger\Client\Model\OrderitemSchema[] $order_items order_items
     *
     * @return $this
     */
    public function setOrderItems($order_items)
    {
        $this->container['order_items'] = $order_items;

        return $this;
    }

    /**
     * Gets order_customer
     *
     * @return \Swagger\Client\Model\OrdercustomerSchema
     */
    public function getOrderCustomer()
    {
        return $this->container['order_customer'];
    }

    /**
     * Sets order_customer
     *
     * @param \Swagger\Client\Model\OrdercustomerSchema $order_customer order_customer
     *
     * @return $this
     */
    public function setOrderCustomer($order_customer)
    {
        $this->container['order_customer'] = $order_customer;

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
