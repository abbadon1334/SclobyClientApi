<?php
/**
 * Sales
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
 * Sales Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'uuid' => 'string',
'name' => 'string',
'external_id' => 'string',
'channel' => 'string',
'sale_number' => 'int',
'is_summary' => 'bool',
'notes' => 'string',
'sale_parent_id' => 'int',
'sale_parent_uuid' => 'string',
'order_id' => 'int',
'order_uuid' => 'string',
'scloby_shop_id' => 'string',
'assigned_id' => 'int',
'assigned_name' => 'string',
'seller_id' => 'int',
'seller_name' => 'string',
'customer_tax_code' => 'string',
'open_at' => '\DateTime',
'closed_at' => '\DateTime',
'lastupdate_at' => '\DateTime',
'lastupdate_by' => 'int',
'status' => 'string',
'amount' => 'float',
'change' => 'float',
'change_type' => 'string',
'final_amount' => 'float',
'final_net_amount' => 'float',
'currency' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'createdby_id' => 'int',
'updatedby_id' => 'int',
'deletedby_id' => 'int',
'price_changes' => '\Swagger\Client\Model\PricechangeSchema[]',
'sale_items' => '\Swagger\Client\Model\SaleitemSchema[]',
'sale_customer' => '\Swagger\Client\Model\SalecustomerSchema',
'payments' => '\Swagger\Client\Model\SalepaymentSchema[]',
'sale_documents' => '\Swagger\Client\Model\SaledocumentSchema[]',
'e_invoice' => '\Swagger\Client\Model\SaleeinvoiceSchema'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'uuid' => null,
'name' => null,
'external_id' => null,
'channel' => null,
'sale_number' => null,
'is_summary' => null,
'notes' => null,
'sale_parent_id' => null,
'sale_parent_uuid' => null,
'order_id' => null,
'order_uuid' => null,
'scloby_shop_id' => null,
'assigned_id' => null,
'assigned_name' => null,
'seller_id' => null,
'seller_name' => null,
'customer_tax_code' => null,
'open_at' => 'date-time',
'closed_at' => 'date-time',
'lastupdate_at' => 'date-time',
'lastupdate_by' => null,
'status' => null,
'amount' => null,
'change' => null,
'change_type' => null,
'final_amount' => null,
'final_net_amount' => null,
'currency' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'createdby_id' => null,
'updatedby_id' => null,
'deletedby_id' => null,
'price_changes' => null,
'sale_items' => null,
'sale_customer' => null,
'payments' => null,
'sale_documents' => null,
'e_invoice' => null    ];

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
'name' => 'name',
'external_id' => 'external_id',
'channel' => 'channel',
'sale_number' => 'sale_number',
'is_summary' => 'is_summary',
'notes' => 'notes',
'sale_parent_id' => 'sale_parent_id',
'sale_parent_uuid' => 'sale_parent_uuid',
'order_id' => 'order_id',
'order_uuid' => 'order_uuid',
'scloby_shop_id' => 'scloby_shop_id',
'assigned_id' => 'assigned_id',
'assigned_name' => 'assigned_name',
'seller_id' => 'seller_id',
'seller_name' => 'seller_name',
'customer_tax_code' => 'customer_tax_code',
'open_at' => 'open_at',
'closed_at' => 'closed_at',
'lastupdate_at' => 'lastupdate_at',
'lastupdate_by' => 'lastupdate_by',
'status' => 'status',
'amount' => 'amount',
'change' => 'change',
'change_type' => 'change_type',
'final_amount' => 'final_amount',
'final_net_amount' => 'final_net_amount',
'currency' => 'currency',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'createdby_id' => 'createdby_id',
'updatedby_id' => 'updatedby_id',
'deletedby_id' => 'deletedby_id',
'price_changes' => 'price_changes',
'sale_items' => 'sale_items',
'sale_customer' => 'sale_customer',
'payments' => 'payments',
'sale_documents' => 'sale_documents',
'e_invoice' => 'e_invoice'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'uuid' => 'setUuid',
'name' => 'setName',
'external_id' => 'setExternalId',
'channel' => 'setChannel',
'sale_number' => 'setSaleNumber',
'is_summary' => 'setIsSummary',
'notes' => 'setNotes',
'sale_parent_id' => 'setSaleParentId',
'sale_parent_uuid' => 'setSaleParentUuid',
'order_id' => 'setOrderId',
'order_uuid' => 'setOrderUuid',
'scloby_shop_id' => 'setSclobyShopId',
'assigned_id' => 'setAssignedId',
'assigned_name' => 'setAssignedName',
'seller_id' => 'setSellerId',
'seller_name' => 'setSellerName',
'customer_tax_code' => 'setCustomerTaxCode',
'open_at' => 'setOpenAt',
'closed_at' => 'setClosedAt',
'lastupdate_at' => 'setLastupdateAt',
'lastupdate_by' => 'setLastupdateBy',
'status' => 'setStatus',
'amount' => 'setAmount',
'change' => 'setChange',
'change_type' => 'setChangeType',
'final_amount' => 'setFinalAmount',
'final_net_amount' => 'setFinalNetAmount',
'currency' => 'setCurrency',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'createdby_id' => 'setCreatedbyId',
'updatedby_id' => 'setUpdatedbyId',
'deletedby_id' => 'setDeletedbyId',
'price_changes' => 'setPriceChanges',
'sale_items' => 'setSaleItems',
'sale_customer' => 'setSaleCustomer',
'payments' => 'setPayments',
'sale_documents' => 'setSaleDocuments',
'e_invoice' => 'setEInvoice'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'uuid' => 'getUuid',
'name' => 'getName',
'external_id' => 'getExternalId',
'channel' => 'getChannel',
'sale_number' => 'getSaleNumber',
'is_summary' => 'getIsSummary',
'notes' => 'getNotes',
'sale_parent_id' => 'getSaleParentId',
'sale_parent_uuid' => 'getSaleParentUuid',
'order_id' => 'getOrderId',
'order_uuid' => 'getOrderUuid',
'scloby_shop_id' => 'getSclobyShopId',
'assigned_id' => 'getAssignedId',
'assigned_name' => 'getAssignedName',
'seller_id' => 'getSellerId',
'seller_name' => 'getSellerName',
'customer_tax_code' => 'getCustomerTaxCode',
'open_at' => 'getOpenAt',
'closed_at' => 'getClosedAt',
'lastupdate_at' => 'getLastupdateAt',
'lastupdate_by' => 'getLastupdateBy',
'status' => 'getStatus',
'amount' => 'getAmount',
'change' => 'getChange',
'change_type' => 'getChangeType',
'final_amount' => 'getFinalAmount',
'final_net_amount' => 'getFinalNetAmount',
'currency' => 'getCurrency',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'createdby_id' => 'getCreatedbyId',
'updatedby_id' => 'getUpdatedbyId',
'deletedby_id' => 'getDeletedbyId',
'price_changes' => 'getPriceChanges',
'sale_items' => 'getSaleItems',
'sale_customer' => 'getSaleCustomer',
'payments' => 'getPayments',
'sale_documents' => 'getSaleDocuments',
'e_invoice' => 'getEInvoice'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['sale_number'] = isset($data['sale_number']) ? $data['sale_number'] : null;
        $this->container['is_summary'] = isset($data['is_summary']) ? $data['is_summary'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['sale_parent_id'] = isset($data['sale_parent_id']) ? $data['sale_parent_id'] : null;
        $this->container['sale_parent_uuid'] = isset($data['sale_parent_uuid']) ? $data['sale_parent_uuid'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_uuid'] = isset($data['order_uuid']) ? $data['order_uuid'] : null;
        $this->container['scloby_shop_id'] = isset($data['scloby_shop_id']) ? $data['scloby_shop_id'] : null;
        $this->container['assigned_id'] = isset($data['assigned_id']) ? $data['assigned_id'] : null;
        $this->container['assigned_name'] = isset($data['assigned_name']) ? $data['assigned_name'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['seller_name'] = isset($data['seller_name']) ? $data['seller_name'] : null;
        $this->container['customer_tax_code'] = isset($data['customer_tax_code']) ? $data['customer_tax_code'] : null;
        $this->container['open_at'] = isset($data['open_at']) ? $data['open_at'] : null;
        $this->container['closed_at'] = isset($data['closed_at']) ? $data['closed_at'] : null;
        $this->container['lastupdate_at'] = isset($data['lastupdate_at']) ? $data['lastupdate_at'] : null;
        $this->container['lastupdate_by'] = isset($data['lastupdate_by']) ? $data['lastupdate_by'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['change'] = isset($data['change']) ? $data['change'] : null;
        $this->container['change_type'] = isset($data['change_type']) ? $data['change_type'] : null;
        $this->container['final_amount'] = isset($data['final_amount']) ? $data['final_amount'] : null;
        $this->container['final_net_amount'] = isset($data['final_net_amount']) ? $data['final_net_amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['createdby_id'] = isset($data['createdby_id']) ? $data['createdby_id'] : null;
        $this->container['updatedby_id'] = isset($data['updatedby_id']) ? $data['updatedby_id'] : null;
        $this->container['deletedby_id'] = isset($data['deletedby_id']) ? $data['deletedby_id'] : null;
        $this->container['price_changes'] = isset($data['price_changes']) ? $data['price_changes'] : null;
        $this->container['sale_items'] = isset($data['sale_items']) ? $data['sale_items'] : null;
        $this->container['sale_customer'] = isset($data['sale_customer']) ? $data['sale_customer'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['sale_documents'] = isset($data['sale_documents']) ? $data['sale_documents'] : null;
        $this->container['e_invoice'] = isset($data['e_invoice']) ? $data['e_invoice'] : null;
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
        if ($this->container['seller_id'] === null) {
            $invalidProperties[] = "'seller_id' can't be null";
        }
        if ($this->container['seller_name'] === null) {
            $invalidProperties[] = "'seller_name' can't be null";
        }
        if ($this->container['open_at'] === null) {
            $invalidProperties[] = "'open_at' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
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
     * Gets sale_number
     *
     * @return int
     */
    public function getSaleNumber()
    {
        return $this->container['sale_number'];
    }

    /**
     * Sets sale_number
     *
     * @param int $sale_number sale_number
     *
     * @return $this
     */
    public function setSaleNumber($sale_number)
    {
        $this->container['sale_number'] = $sale_number;

        return $this;
    }

    /**
     * Gets is_summary
     *
     * @return bool
     */
    public function getIsSummary()
    {
        return $this->container['is_summary'];
    }

    /**
     * Sets is_summary
     *
     * @param bool $is_summary is_summary
     *
     * @return $this
     */
    public function setIsSummary($is_summary)
    {
        $this->container['is_summary'] = $is_summary;

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
     * Gets sale_parent_id
     *
     * @return int
     */
    public function getSaleParentId()
    {
        return $this->container['sale_parent_id'];
    }

    /**
     * Sets sale_parent_id
     *
     * @param int $sale_parent_id sale_parent_id
     *
     * @return $this
     */
    public function setSaleParentId($sale_parent_id)
    {
        $this->container['sale_parent_id'] = $sale_parent_id;

        return $this;
    }

    /**
     * Gets sale_parent_uuid
     *
     * @return string
     */
    public function getSaleParentUuid()
    {
        return $this->container['sale_parent_uuid'];
    }

    /**
     * Sets sale_parent_uuid
     *
     * @param string $sale_parent_uuid sale_parent_uuid
     *
     * @return $this
     */
    public function setSaleParentUuid($sale_parent_uuid)
    {
        $this->container['sale_parent_uuid'] = $sale_parent_uuid;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_uuid
     *
     * @return string
     */
    public function getOrderUuid()
    {
        return $this->container['order_uuid'];
    }

    /**
     * Sets order_uuid
     *
     * @param string $order_uuid order_uuid
     *
     * @return $this
     */
    public function setOrderUuid($order_uuid)
    {
        $this->container['order_uuid'] = $order_uuid;

        return $this;
    }

    /**
     * Gets scloby_shop_id
     *
     * @return string
     */
    public function getSclobyShopId()
    {
        return $this->container['scloby_shop_id'];
    }

    /**
     * Sets scloby_shop_id
     *
     * @param string $scloby_shop_id Scloby Pass Shop ID
     *
     * @return $this
     */
    public function setSclobyShopId($scloby_shop_id)
    {
        $this->container['scloby_shop_id'] = $scloby_shop_id;

        return $this;
    }

    /**
     * Gets assigned_id
     *
     * @return int
     */
    public function getAssignedId()
    {
        return $this->container['assigned_id'];
    }

    /**
     * Sets assigned_id
     *
     * @param int $assigned_id assigned_id
     *
     * @return $this
     */
    public function setAssignedId($assigned_id)
    {
        $this->container['assigned_id'] = $assigned_id;

        return $this;
    }

    /**
     * Gets assigned_name
     *
     * @return string
     */
    public function getAssignedName()
    {
        return $this->container['assigned_name'];
    }

    /**
     * Sets assigned_name
     *
     * @param string $assigned_name assigned_name
     *
     * @return $this
     */
    public function setAssignedName($assigned_name)
    {
        $this->container['assigned_name'] = $assigned_name;

        return $this;
    }

    /**
     * Gets seller_id
     *
     * @return int
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     *
     * @param int $seller_id seller_id
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets seller_name
     *
     * @return string
     */
    public function getSellerName()
    {
        return $this->container['seller_name'];
    }

    /**
     * Sets seller_name
     *
     * @param string $seller_name seller_name
     *
     * @return $this
     */
    public function setSellerName($seller_name)
    {
        $this->container['seller_name'] = $seller_name;

        return $this;
    }

    /**
     * Gets customer_tax_code
     *
     * @return string
     */
    public function getCustomerTaxCode()
    {
        return $this->container['customer_tax_code'];
    }

    /**
     * Sets customer_tax_code
     *
     * @param string $customer_tax_code customer_tax_code
     *
     * @return $this
     */
    public function setCustomerTaxCode($customer_tax_code)
    {
        $this->container['customer_tax_code'] = $customer_tax_code;

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
     * @param \DateTime $closed_at Closing (or Storing) date
     *
     * @return $this
     */
    public function setClosedAt($closed_at)
    {
        $this->container['closed_at'] = $closed_at;

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
     * @param string $status Sale status, can be open, closed or stored
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
     * @param float $amount Sum of price * quantity + discount/surcharges of all sale_items
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets change
     *
     * @return float
     */
    public function getChange()
    {
        return $this->container['change'];
    }

    /**
     * Sets change
     *
     * @param float $change Payment change (also known as 'resto')
     *
     * @return $this
     */
    public function setChange($change)
    {
        $this->container['change'] = $change;

        return $this;
    }

    /**
     * Gets change_type
     *
     * @return string
     */
    public function getChangeType()
    {
        return $this->container['change_type'];
    }

    /**
     * Sets change_type
     *
     * @param string $change_type Change type, can be 'cash', 'ticket' or 'other'
     *
     * @return $this
     */
    public function setChangeType($change_type)
    {
        $this->container['change_type'] = $change_type;

        return $this;
    }

    /**
     * Gets final_amount
     *
     * @return float
     */
    public function getFinalAmount()
    {
        return $this->container['final_amount'];
    }

    /**
     * Sets final_amount
     *
     * @param float $final_amount Sum of price * quantity + discount/surcharges of all sale_items + discount/surcharges on amount
     *
     * @return $this
     */
    public function setFinalAmount($final_amount)
    {
        $this->container['final_amount'] = $final_amount;

        return $this;
    }

    /**
     * Gets final_net_amount
     *
     * @return float
     */
    public function getFinalNetAmount()
    {
        return $this->container['final_net_amount'];
    }

    /**
     * Sets final_net_amount
     *
     * @param float $final_net_amount Sum of final_price * quantity of all sale_items
     *
     * @return $this
     */
    public function setFinalNetAmount($final_net_amount)
    {
        $this->container['final_net_amount'] = $final_net_amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets price_changes
     *
     * @return \Swagger\Client\Model\PricechangeSchema[]
     */
    public function getPriceChanges()
    {
        return $this->container['price_changes'];
    }

    /**
     * Sets price_changes
     *
     * @param \Swagger\Client\Model\PricechangeSchema[] $price_changes price_changes
     *
     * @return $this
     */
    public function setPriceChanges($price_changes)
    {
        $this->container['price_changes'] = $price_changes;

        return $this;
    }

    /**
     * Gets sale_items
     *
     * @return \Swagger\Client\Model\SaleitemSchema[]
     */
    public function getSaleItems()
    {
        return $this->container['sale_items'];
    }

    /**
     * Sets sale_items
     *
     * @param \Swagger\Client\Model\SaleitemSchema[] $sale_items sale_items
     *
     * @return $this
     */
    public function setSaleItems($sale_items)
    {
        $this->container['sale_items'] = $sale_items;

        return $this;
    }

    /**
     * Gets sale_customer
     *
     * @return \Swagger\Client\Model\SalecustomerSchema
     */
    public function getSaleCustomer()
    {
        return $this->container['sale_customer'];
    }

    /**
     * Sets sale_customer
     *
     * @param \Swagger\Client\Model\SalecustomerSchema $sale_customer sale_customer
     *
     * @return $this
     */
    public function setSaleCustomer($sale_customer)
    {
        $this->container['sale_customer'] = $sale_customer;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Swagger\Client\Model\SalepaymentSchema[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Swagger\Client\Model\SalepaymentSchema[] $payments payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets sale_documents
     *
     * @return \Swagger\Client\Model\SaledocumentSchema[]
     */
    public function getSaleDocuments()
    {
        return $this->container['sale_documents'];
    }

    /**
     * Sets sale_documents
     *
     * @param \Swagger\Client\Model\SaledocumentSchema[] $sale_documents sale_documents
     *
     * @return $this
     */
    public function setSaleDocuments($sale_documents)
    {
        $this->container['sale_documents'] = $sale_documents;

        return $this;
    }

    /**
     * Gets e_invoice
     *
     * @return \Swagger\Client\Model\SaleeinvoiceSchema
     */
    public function getEInvoice()
    {
        return $this->container['e_invoice'];
    }

    /**
     * Sets e_invoice
     *
     * @param \Swagger\Client\Model\SaleeinvoiceSchema $e_invoice e_invoice
     *
     * @return $this
     */
    public function setEInvoice($e_invoice)
    {
        $this->container['e_invoice'] = $e_invoice;

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
