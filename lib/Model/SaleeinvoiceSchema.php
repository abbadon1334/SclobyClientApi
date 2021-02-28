<?php
/**
 * SaleeinvoiceSchema
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
 * SaleeinvoiceSchema Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SaleeinvoiceSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Saleeinvoice schema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'sale_id' => 'int',
'invoice_progressive' => 'int',
'invoice_yearly_progressive' => 'int',
'send_progressive' => 'int',
'date' => '\DateTime',
'lastcreate_at' => '\DateTime',
'external_id' => 'string',
'intermediary_name' => 'string',
'last_status_update' => '\DateTime',
'external_status' => 'string',
'external_message' => 'string',
'status' => 'string',
'deduction_type' => 'string',
'deduction_amount' => 'float',
'deduction_vat' => 'float',
'deduction_cause' => 'string',
'stamp_amount' => 'float',
'welfare_type' => 'string',
'welfare_perc' => 'float',
'welfare_amount' => 'float',
'welfare_taxable' => 'float',
'welfare_vat' => 'float',
'welfare_deduction' => 'bool',
'welfare_exemption' => 'string',
'welfare_ref' => 'string',
'invoice_cause' => 'string',
'administrative_ref' => 'string',
'invoice_art_73' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'sale_id' => null,
'invoice_progressive' => null,
'invoice_yearly_progressive' => null,
'send_progressive' => null,
'date' => 'date-time',
'lastcreate_at' => 'date-time',
'external_id' => null,
'intermediary_name' => null,
'last_status_update' => 'date-time',
'external_status' => null,
'external_message' => null,
'status' => null,
'deduction_type' => null,
'deduction_amount' => null,
'deduction_vat' => null,
'deduction_cause' => null,
'stamp_amount' => null,
'welfare_type' => null,
'welfare_perc' => null,
'welfare_amount' => null,
'welfare_taxable' => null,
'welfare_vat' => null,
'welfare_deduction' => null,
'welfare_exemption' => null,
'welfare_ref' => null,
'invoice_cause' => null,
'administrative_ref' => null,
'invoice_art_73' => null    ];

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
'invoice_progressive' => 'invoice_progressive',
'invoice_yearly_progressive' => 'invoice_yearly_progressive',
'send_progressive' => 'send_progressive',
'date' => 'date',
'lastcreate_at' => 'lastcreate_at',
'external_id' => 'external_id',
'intermediary_name' => 'intermediary_name',
'last_status_update' => 'last_status_update',
'external_status' => 'external_status',
'external_message' => 'external_message',
'status' => 'status',
'deduction_type' => 'deduction_type',
'deduction_amount' => 'deduction_amount',
'deduction_vat' => 'deduction_vat',
'deduction_cause' => 'deduction_cause',
'stamp_amount' => 'stamp_amount',
'welfare_type' => 'welfare_type',
'welfare_perc' => 'welfare_perc',
'welfare_amount' => 'welfare_amount',
'welfare_taxable' => 'welfare_taxable',
'welfare_vat' => 'welfare_vat',
'welfare_deduction' => 'welfare_deduction',
'welfare_exemption' => 'welfare_exemption',
'welfare_ref' => 'welfare_ref',
'invoice_cause' => 'invoice_cause',
'administrative_ref' => 'administrative_ref',
'invoice_art_73' => 'invoice_art_73'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sale_id' => 'setSaleId',
'invoice_progressive' => 'setInvoiceProgressive',
'invoice_yearly_progressive' => 'setInvoiceYearlyProgressive',
'send_progressive' => 'setSendProgressive',
'date' => 'setDate',
'lastcreate_at' => 'setLastcreateAt',
'external_id' => 'setExternalId',
'intermediary_name' => 'setIntermediaryName',
'last_status_update' => 'setLastStatusUpdate',
'external_status' => 'setExternalStatus',
'external_message' => 'setExternalMessage',
'status' => 'setStatus',
'deduction_type' => 'setDeductionType',
'deduction_amount' => 'setDeductionAmount',
'deduction_vat' => 'setDeductionVat',
'deduction_cause' => 'setDeductionCause',
'stamp_amount' => 'setStampAmount',
'welfare_type' => 'setWelfareType',
'welfare_perc' => 'setWelfarePerc',
'welfare_amount' => 'setWelfareAmount',
'welfare_taxable' => 'setWelfareTaxable',
'welfare_vat' => 'setWelfareVat',
'welfare_deduction' => 'setWelfareDeduction',
'welfare_exemption' => 'setWelfareExemption',
'welfare_ref' => 'setWelfareRef',
'invoice_cause' => 'setInvoiceCause',
'administrative_ref' => 'setAdministrativeRef',
'invoice_art_73' => 'setInvoiceArt73'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sale_id' => 'getSaleId',
'invoice_progressive' => 'getInvoiceProgressive',
'invoice_yearly_progressive' => 'getInvoiceYearlyProgressive',
'send_progressive' => 'getSendProgressive',
'date' => 'getDate',
'lastcreate_at' => 'getLastcreateAt',
'external_id' => 'getExternalId',
'intermediary_name' => 'getIntermediaryName',
'last_status_update' => 'getLastStatusUpdate',
'external_status' => 'getExternalStatus',
'external_message' => 'getExternalMessage',
'status' => 'getStatus',
'deduction_type' => 'getDeductionType',
'deduction_amount' => 'getDeductionAmount',
'deduction_vat' => 'getDeductionVat',
'deduction_cause' => 'getDeductionCause',
'stamp_amount' => 'getStampAmount',
'welfare_type' => 'getWelfareType',
'welfare_perc' => 'getWelfarePerc',
'welfare_amount' => 'getWelfareAmount',
'welfare_taxable' => 'getWelfareTaxable',
'welfare_vat' => 'getWelfareVat',
'welfare_deduction' => 'getWelfareDeduction',
'welfare_exemption' => 'getWelfareExemption',
'welfare_ref' => 'getWelfareRef',
'invoice_cause' => 'getInvoiceCause',
'administrative_ref' => 'getAdministrativeRef',
'invoice_art_73' => 'getInvoiceArt73'    ];

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
        $this->container['invoice_progressive'] = isset($data['invoice_progressive']) ? $data['invoice_progressive'] : null;
        $this->container['invoice_yearly_progressive'] = isset($data['invoice_yearly_progressive']) ? $data['invoice_yearly_progressive'] : null;
        $this->container['send_progressive'] = isset($data['send_progressive']) ? $data['send_progressive'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['lastcreate_at'] = isset($data['lastcreate_at']) ? $data['lastcreate_at'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['intermediary_name'] = isset($data['intermediary_name']) ? $data['intermediary_name'] : null;
        $this->container['last_status_update'] = isset($data['last_status_update']) ? $data['last_status_update'] : null;
        $this->container['external_status'] = isset($data['external_status']) ? $data['external_status'] : null;
        $this->container['external_message'] = isset($data['external_message']) ? $data['external_message'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['deduction_type'] = isset($data['deduction_type']) ? $data['deduction_type'] : null;
        $this->container['deduction_amount'] = isset($data['deduction_amount']) ? $data['deduction_amount'] : null;
        $this->container['deduction_vat'] = isset($data['deduction_vat']) ? $data['deduction_vat'] : null;
        $this->container['deduction_cause'] = isset($data['deduction_cause']) ? $data['deduction_cause'] : null;
        $this->container['stamp_amount'] = isset($data['stamp_amount']) ? $data['stamp_amount'] : null;
        $this->container['welfare_type'] = isset($data['welfare_type']) ? $data['welfare_type'] : null;
        $this->container['welfare_perc'] = isset($data['welfare_perc']) ? $data['welfare_perc'] : null;
        $this->container['welfare_amount'] = isset($data['welfare_amount']) ? $data['welfare_amount'] : null;
        $this->container['welfare_taxable'] = isset($data['welfare_taxable']) ? $data['welfare_taxable'] : null;
        $this->container['welfare_vat'] = isset($data['welfare_vat']) ? $data['welfare_vat'] : null;
        $this->container['welfare_deduction'] = isset($data['welfare_deduction']) ? $data['welfare_deduction'] : null;
        $this->container['welfare_exemption'] = isset($data['welfare_exemption']) ? $data['welfare_exemption'] : null;
        $this->container['welfare_ref'] = isset($data['welfare_ref']) ? $data['welfare_ref'] : null;
        $this->container['invoice_cause'] = isset($data['invoice_cause']) ? $data['invoice_cause'] : null;
        $this->container['administrative_ref'] = isset($data['administrative_ref']) ? $data['administrative_ref'] : null;
        $this->container['invoice_art_73'] = isset($data['invoice_art_73']) ? $data['invoice_art_73'] : null;
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
     * Gets invoice_progressive
     *
     * @return int
     */
    public function getInvoiceProgressive()
    {
        return $this->container['invoice_progressive'];
    }

    /**
     * Sets invoice_progressive
     *
     * @param int $invoice_progressive invoice_progressive
     *
     * @return $this
     */
    public function setInvoiceProgressive($invoice_progressive)
    {
        $this->container['invoice_progressive'] = $invoice_progressive;

        return $this;
    }

    /**
     * Gets invoice_yearly_progressive
     *
     * @return int
     */
    public function getInvoiceYearlyProgressive()
    {
        return $this->container['invoice_yearly_progressive'];
    }

    /**
     * Sets invoice_yearly_progressive
     *
     * @param int $invoice_yearly_progressive invoice_yearly_progressive
     *
     * @return $this
     */
    public function setInvoiceYearlyProgressive($invoice_yearly_progressive)
    {
        $this->container['invoice_yearly_progressive'] = $invoice_yearly_progressive;

        return $this;
    }

    /**
     * Gets send_progressive
     *
     * @return int
     */
    public function getSendProgressive()
    {
        return $this->container['send_progressive'];
    }

    /**
     * Sets send_progressive
     *
     * @param int $send_progressive send_progressive
     *
     * @return $this
     */
    public function setSendProgressive($send_progressive)
    {
        $this->container['send_progressive'] = $send_progressive;

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
     * Gets lastcreate_at
     *
     * @return \DateTime
     */
    public function getLastcreateAt()
    {
        return $this->container['lastcreate_at'];
    }

    /**
     * Sets lastcreate_at
     *
     * @param \DateTime $lastcreate_at lastcreate_at
     *
     * @return $this
     */
    public function setLastcreateAt($lastcreate_at)
    {
        $this->container['lastcreate_at'] = $lastcreate_at;

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
     * Gets intermediary_name
     *
     * @return string
     */
    public function getIntermediaryName()
    {
        return $this->container['intermediary_name'];
    }

    /**
     * Sets intermediary_name
     *
     * @param string $intermediary_name intermediary_name
     *
     * @return $this
     */
    public function setIntermediaryName($intermediary_name)
    {
        $this->container['intermediary_name'] = $intermediary_name;

        return $this;
    }

    /**
     * Gets last_status_update
     *
     * @return \DateTime
     */
    public function getLastStatusUpdate()
    {
        return $this->container['last_status_update'];
    }

    /**
     * Sets last_status_update
     *
     * @param \DateTime $last_status_update last_status_update
     *
     * @return $this
     */
    public function setLastStatusUpdate($last_status_update)
    {
        $this->container['last_status_update'] = $last_status_update;

        return $this;
    }

    /**
     * Gets external_status
     *
     * @return string
     */
    public function getExternalStatus()
    {
        return $this->container['external_status'];
    }

    /**
     * Sets external_status
     *
     * @param string $external_status external_status
     *
     * @return $this
     */
    public function setExternalStatus($external_status)
    {
        $this->container['external_status'] = $external_status;

        return $this;
    }

    /**
     * Gets external_message
     *
     * @return string
     */
    public function getExternalMessage()
    {
        return $this->container['external_message'];
    }

    /**
     * Sets external_message
     *
     * @param string $external_message external_message
     *
     * @return $this
     */
    public function setExternalMessage($external_message)
    {
        $this->container['external_message'] = $external_message;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets deduction_type
     *
     * @return string
     */
    public function getDeductionType()
    {
        return $this->container['deduction_type'];
    }

    /**
     * Sets deduction_type
     *
     * @param string $deduction_type deduction_type
     *
     * @return $this
     */
    public function setDeductionType($deduction_type)
    {
        $this->container['deduction_type'] = $deduction_type;

        return $this;
    }

    /**
     * Gets deduction_amount
     *
     * @return float
     */
    public function getDeductionAmount()
    {
        return $this->container['deduction_amount'];
    }

    /**
     * Sets deduction_amount
     *
     * @param float $deduction_amount deduction_amount
     *
     * @return $this
     */
    public function setDeductionAmount($deduction_amount)
    {
        $this->container['deduction_amount'] = $deduction_amount;

        return $this;
    }

    /**
     * Gets deduction_vat
     *
     * @return float
     */
    public function getDeductionVat()
    {
        return $this->container['deduction_vat'];
    }

    /**
     * Sets deduction_vat
     *
     * @param float $deduction_vat deduction_vat
     *
     * @return $this
     */
    public function setDeductionVat($deduction_vat)
    {
        $this->container['deduction_vat'] = $deduction_vat;

        return $this;
    }

    /**
     * Gets deduction_cause
     *
     * @return string
     */
    public function getDeductionCause()
    {
        return $this->container['deduction_cause'];
    }

    /**
     * Sets deduction_cause
     *
     * @param string $deduction_cause deduction_cause
     *
     * @return $this
     */
    public function setDeductionCause($deduction_cause)
    {
        $this->container['deduction_cause'] = $deduction_cause;

        return $this;
    }

    /**
     * Gets stamp_amount
     *
     * @return float
     */
    public function getStampAmount()
    {
        return $this->container['stamp_amount'];
    }

    /**
     * Sets stamp_amount
     *
     * @param float $stamp_amount stamp_amount
     *
     * @return $this
     */
    public function setStampAmount($stamp_amount)
    {
        $this->container['stamp_amount'] = $stamp_amount;

        return $this;
    }

    /**
     * Gets welfare_type
     *
     * @return string
     */
    public function getWelfareType()
    {
        return $this->container['welfare_type'];
    }

    /**
     * Sets welfare_type
     *
     * @param string $welfare_type welfare_type
     *
     * @return $this
     */
    public function setWelfareType($welfare_type)
    {
        $this->container['welfare_type'] = $welfare_type;

        return $this;
    }

    /**
     * Gets welfare_perc
     *
     * @return float
     */
    public function getWelfarePerc()
    {
        return $this->container['welfare_perc'];
    }

    /**
     * Sets welfare_perc
     *
     * @param float $welfare_perc welfare_perc
     *
     * @return $this
     */
    public function setWelfarePerc($welfare_perc)
    {
        $this->container['welfare_perc'] = $welfare_perc;

        return $this;
    }

    /**
     * Gets welfare_amount
     *
     * @return float
     */
    public function getWelfareAmount()
    {
        return $this->container['welfare_amount'];
    }

    /**
     * Sets welfare_amount
     *
     * @param float $welfare_amount welfare_amount
     *
     * @return $this
     */
    public function setWelfareAmount($welfare_amount)
    {
        $this->container['welfare_amount'] = $welfare_amount;

        return $this;
    }

    /**
     * Gets welfare_taxable
     *
     * @return float
     */
    public function getWelfareTaxable()
    {
        return $this->container['welfare_taxable'];
    }

    /**
     * Sets welfare_taxable
     *
     * @param float $welfare_taxable welfare_taxable
     *
     * @return $this
     */
    public function setWelfareTaxable($welfare_taxable)
    {
        $this->container['welfare_taxable'] = $welfare_taxable;

        return $this;
    }

    /**
     * Gets welfare_vat
     *
     * @return float
     */
    public function getWelfareVat()
    {
        return $this->container['welfare_vat'];
    }

    /**
     * Sets welfare_vat
     *
     * @param float $welfare_vat welfare_vat
     *
     * @return $this
     */
    public function setWelfareVat($welfare_vat)
    {
        $this->container['welfare_vat'] = $welfare_vat;

        return $this;
    }

    /**
     * Gets welfare_deduction
     *
     * @return bool
     */
    public function getWelfareDeduction()
    {
        return $this->container['welfare_deduction'];
    }

    /**
     * Sets welfare_deduction
     *
     * @param bool $welfare_deduction welfare_deduction
     *
     * @return $this
     */
    public function setWelfareDeduction($welfare_deduction)
    {
        $this->container['welfare_deduction'] = $welfare_deduction;

        return $this;
    }

    /**
     * Gets welfare_exemption
     *
     * @return string
     */
    public function getWelfareExemption()
    {
        return $this->container['welfare_exemption'];
    }

    /**
     * Sets welfare_exemption
     *
     * @param string $welfare_exemption welfare_exemption
     *
     * @return $this
     */
    public function setWelfareExemption($welfare_exemption)
    {
        $this->container['welfare_exemption'] = $welfare_exemption;

        return $this;
    }

    /**
     * Gets welfare_ref
     *
     * @return string
     */
    public function getWelfareRef()
    {
        return $this->container['welfare_ref'];
    }

    /**
     * Sets welfare_ref
     *
     * @param string $welfare_ref welfare_ref
     *
     * @return $this
     */
    public function setWelfareRef($welfare_ref)
    {
        $this->container['welfare_ref'] = $welfare_ref;

        return $this;
    }

    /**
     * Gets invoice_cause
     *
     * @return string
     */
    public function getInvoiceCause()
    {
        return $this->container['invoice_cause'];
    }

    /**
     * Sets invoice_cause
     *
     * @param string $invoice_cause invoice_cause
     *
     * @return $this
     */
    public function setInvoiceCause($invoice_cause)
    {
        $this->container['invoice_cause'] = $invoice_cause;

        return $this;
    }

    /**
     * Gets administrative_ref
     *
     * @return string
     */
    public function getAdministrativeRef()
    {
        return $this->container['administrative_ref'];
    }

    /**
     * Sets administrative_ref
     *
     * @param string $administrative_ref administrative_ref
     *
     * @return $this
     */
    public function setAdministrativeRef($administrative_ref)
    {
        $this->container['administrative_ref'] = $administrative_ref;

        return $this;
    }

    /**
     * Gets invoice_art_73
     *
     * @return bool
     */
    public function getInvoiceArt73()
    {
        return $this->container['invoice_art_73'];
    }

    /**
     * Sets invoice_art_73
     *
     * @param bool $invoice_art_73 invoice_art_73
     *
     * @return $this
     */
    public function setInvoiceArt73($invoice_art_73)
    {
        $this->container['invoice_art_73'] = $invoice_art_73;

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
