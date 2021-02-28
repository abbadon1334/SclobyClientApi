<?php
/**
 * OrderitemSchema
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
 * OrderitemSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderitemSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Orderitem schema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'uuid' => 'string',
'order_id' => 'int',
'item_id' => 'int',
'name' => 'string',
'order_name' => 'string',
'category_id' => 'int',
'category_name' => 'string',
'notes' => 'string',
'half_portion' => 'bool',
'price' => 'float',
'cost' => 'float',
'net_price' => 'float',
'vat_perc' => 'float',
'final_price' => 'float',
'final_net_price' => 'float',
'quantity' => 'int',
'unit' => 'string',
'exit' => 'int',
'lastupdate_at' => '\DateTime',
'lastupdate_by' => 'int',
'added_at' => '\DateTime',
'operator_id' => 'int',
'operator_name' => 'string',
'department_id' => 'int',
'department_name' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'deleted_at' => '\DateTime',
'variations' => '\Swagger\Client\Model\OrderitemvariationSchema[]',
'ingredients' => '\Swagger\Client\Model\OrderitemingredientSchema[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'uuid' => null,
'order_id' => null,
'item_id' => null,
'name' => null,
'order_name' => null,
'category_id' => null,
'category_name' => null,
'notes' => null,
'half_portion' => null,
'price' => null,
'cost' => null,
'net_price' => null,
'vat_perc' => null,
'final_price' => null,
'final_net_price' => null,
'quantity' => null,
'unit' => null,
'exit' => null,
'lastupdate_at' => 'date-time',
'lastupdate_by' => null,
'added_at' => 'date-time',
'operator_id' => null,
'operator_name' => null,
'department_id' => null,
'department_name' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'deleted_at' => 'date-time',
'variations' => null,
'ingredients' => null    ];

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
'order_id' => 'order_id',
'item_id' => 'item_id',
'name' => 'name',
'order_name' => 'order_name',
'category_id' => 'category_id',
'category_name' => 'category_name',
'notes' => 'notes',
'half_portion' => 'half_portion',
'price' => 'price',
'cost' => 'cost',
'net_price' => 'net_price',
'vat_perc' => 'vat_perc',
'final_price' => 'final_price',
'final_net_price' => 'final_net_price',
'quantity' => 'quantity',
'unit' => 'unit',
'exit' => 'exit',
'lastupdate_at' => 'lastupdate_at',
'lastupdate_by' => 'lastupdate_by',
'added_at' => 'added_at',
'operator_id' => 'operator_id',
'operator_name' => 'operator_name',
'department_id' => 'department_id',
'department_name' => 'department_name',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'deleted_at' => 'deleted_at',
'variations' => 'variations',
'ingredients' => 'ingredients'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'uuid' => 'setUuid',
'order_id' => 'setOrderId',
'item_id' => 'setItemId',
'name' => 'setName',
'order_name' => 'setOrderName',
'category_id' => 'setCategoryId',
'category_name' => 'setCategoryName',
'notes' => 'setNotes',
'half_portion' => 'setHalfPortion',
'price' => 'setPrice',
'cost' => 'setCost',
'net_price' => 'setNetPrice',
'vat_perc' => 'setVatPerc',
'final_price' => 'setFinalPrice',
'final_net_price' => 'setFinalNetPrice',
'quantity' => 'setQuantity',
'unit' => 'setUnit',
'exit' => 'setExit',
'lastupdate_at' => 'setLastupdateAt',
'lastupdate_by' => 'setLastupdateBy',
'added_at' => 'setAddedAt',
'operator_id' => 'setOperatorId',
'operator_name' => 'setOperatorName',
'department_id' => 'setDepartmentId',
'department_name' => 'setDepartmentName',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'variations' => 'setVariations',
'ingredients' => 'setIngredients'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'uuid' => 'getUuid',
'order_id' => 'getOrderId',
'item_id' => 'getItemId',
'name' => 'getName',
'order_name' => 'getOrderName',
'category_id' => 'getCategoryId',
'category_name' => 'getCategoryName',
'notes' => 'getNotes',
'half_portion' => 'getHalfPortion',
'price' => 'getPrice',
'cost' => 'getCost',
'net_price' => 'getNetPrice',
'vat_perc' => 'getVatPerc',
'final_price' => 'getFinalPrice',
'final_net_price' => 'getFinalNetPrice',
'quantity' => 'getQuantity',
'unit' => 'getUnit',
'exit' => 'getExit',
'lastupdate_at' => 'getLastupdateAt',
'lastupdate_by' => 'getLastupdateBy',
'added_at' => 'getAddedAt',
'operator_id' => 'getOperatorId',
'operator_name' => 'getOperatorName',
'department_id' => 'getDepartmentId',
'department_name' => 'getDepartmentName',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'variations' => 'getVariations',
'ingredients' => 'getIngredients'    ];

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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_name'] = isset($data['order_name']) ? $data['order_name'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['half_portion'] = isset($data['half_portion']) ? $data['half_portion'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['net_price'] = isset($data['net_price']) ? $data['net_price'] : null;
        $this->container['vat_perc'] = isset($data['vat_perc']) ? $data['vat_perc'] : null;
        $this->container['final_price'] = isset($data['final_price']) ? $data['final_price'] : null;
        $this->container['final_net_price'] = isset($data['final_net_price']) ? $data['final_net_price'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['exit'] = isset($data['exit']) ? $data['exit'] : null;
        $this->container['lastupdate_at'] = isset($data['lastupdate_at']) ? $data['lastupdate_at'] : null;
        $this->container['lastupdate_by'] = isset($data['lastupdate_by']) ? $data['lastupdate_by'] : null;
        $this->container['added_at'] = isset($data['added_at']) ? $data['added_at'] : null;
        $this->container['operator_id'] = isset($data['operator_id']) ? $data['operator_id'] : null;
        $this->container['operator_name'] = isset($data['operator_name']) ? $data['operator_name'] : null;
        $this->container['department_id'] = isset($data['department_id']) ? $data['department_id'] : null;
        $this->container['department_name'] = isset($data['department_name']) ? $data['department_name'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['ingredients'] = isset($data['ingredients']) ? $data['ingredients'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['net_price'] === null) {
            $invalidProperties[] = "'net_price' can't be null";
        }
        if ($this->container['vat_perc'] === null) {
            $invalidProperties[] = "'vat_perc' can't be null";
        }
        if ($this->container['final_price'] === null) {
            $invalidProperties[] = "'final_price' can't be null";
        }
        if ($this->container['final_net_price'] === null) {
            $invalidProperties[] = "'final_net_price' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['operator_id'] === null) {
            $invalidProperties[] = "'operator_id' can't be null";
        }
        if ($this->container['operator_name'] === null) {
            $invalidProperties[] = "'operator_name' can't be null";
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
     * @param string $name Original Name of item sold
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_name
     *
     * @return string
     */
    public function getOrderName()
    {
        return $this->container['order_name'];
    }

    /**
     * Sets order_name
     *
     * @param string $order_name Name you want to print into kitchen tickets
     *
     * @return $this
     */
    public function setOrderName($order_name)
    {
        $this->container['order_name'] = $order_name;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name category_name
     *
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

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
     * Gets half_portion
     *
     * @return bool
     */
    public function getHalfPortion()
    {
        return $this->container['half_portion'];
    }

    /**
     * Sets half_portion
     *
     * @param bool $half_portion half_portion
     *
     * @return $this
     */
    public function setHalfPortion($half_portion)
    {
        $this->container['half_portion'] = $half_portion;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * Gets net_price
     *
     * @return float
     */
    public function getNetPrice()
    {
        return $this->container['net_price'];
    }

    /**
     * Sets net_price
     *
     * @param float $net_price net_price
     *
     * @return $this
     */
    public function setNetPrice($net_price)
    {
        $this->container['net_price'] = $net_price;

        return $this;
    }

    /**
     * Gets vat_perc
     *
     * @return float
     */
    public function getVatPerc()
    {
        return $this->container['vat_perc'];
    }

    /**
     * Sets vat_perc
     *
     * @param float $vat_perc vat_perc
     *
     * @return $this
     */
    public function setVatPerc($vat_perc)
    {
        $this->container['vat_perc'] = $vat_perc;

        return $this;
    }

    /**
     * Gets final_price
     *
     * @return float
     */
    public function getFinalPrice()
    {
        return $this->container['final_price'];
    }

    /**
     * Sets final_price
     *
     * @param float $final_price Price with VAT (ingredients or variations price differences are included)
     *
     * @return $this
     */
    public function setFinalPrice($final_price)
    {
        $this->container['final_price'] = $final_price;

        return $this;
    }

    /**
     * Gets final_net_price
     *
     * @return float
     */
    public function getFinalNetPrice()
    {
        return $this->container['final_net_price'];
    }

    /**
     * Sets final_net_price
     *
     * @param float $final_net_price Price without VAT (ingredients or variations price differences are included)
     *
     * @return $this
     */
    public function setFinalNetPrice($final_net_price)
    {
        $this->container['final_net_price'] = $final_net_price;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets exit
     *
     * @return int
     */
    public function getExit()
    {
        return $this->container['exit'];
    }

    /**
     * Sets exit
     *
     * @param int $exit Item exit, can be null or from 1 to 10
     *
     * @return $this
     */
    public function setExit($exit)
    {
        $this->container['exit'] = $exit;

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
     * Gets added_at
     *
     * @return \DateTime
     */
    public function getAddedAt()
    {
        return $this->container['added_at'];
    }

    /**
     * Sets added_at
     *
     * @param \DateTime $added_at added_at
     *
     * @return $this
     */
    public function setAddedAt($added_at)
    {
        $this->container['added_at'] = $added_at;

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
     * Gets department_id
     *
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->container['department_id'];
    }

    /**
     * Sets department_id
     *
     * @param int $department_id department_id
     *
     * @return $this
     */
    public function setDepartmentId($department_id)
    {
        $this->container['department_id'] = $department_id;

        return $this;
    }

    /**
     * Gets department_name
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->container['department_name'];
    }

    /**
     * Sets department_name
     *
     * @param string $department_name department_name
     *
     * @return $this
     */
    public function setDepartmentName($department_name)
    {
        $this->container['department_name'] = $department_name;

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
     * Gets variations
     *
     * @return \Swagger\Client\Model\OrderitemvariationSchema[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \Swagger\Client\Model\OrderitemvariationSchema[] $variations variations
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets ingredients
     *
     * @return \Swagger\Client\Model\OrderitemingredientSchema[]
     */
    public function getIngredients()
    {
        return $this->container['ingredients'];
    }

    /**
     * Sets ingredients
     *
     * @param \Swagger\Client\Model\OrderitemingredientSchema[] $ingredients ingredients
     *
     * @return $this
     */
    public function setIngredients($ingredients)
    {
        $this->container['ingredients'] = $ingredients;

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
