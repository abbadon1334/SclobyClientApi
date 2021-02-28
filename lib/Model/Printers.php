<?php
/**
 * Printers
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
 * Printers Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Printers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'printers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'ip_address' => 'string',
'subnet_mask' => 'string',
'gateway' => 'string',
'mac_address_bt' => 'string',
'ssl' => 'bool',
'port' => 'int',
'driver' => 'string',
'connection_type' => 'string',
'type' => 'string',
'print_fiscal_receipt' => 'bool',
'print_receipt' => 'bool',
'print_invoice' => 'bool',
'print_receipt_invoice' => 'bool',
'print_summary_invoice' => 'bool',
'print_summary_e_nrc' => 'bool',
'print_summary_e_rc' => 'bool',
'print_shipping_invoice' => 'bool',
'print_e_invoice' => 'bool',
'print_generic_receipt' => 'bool',
'print_generic_invoice' => 'bool',
'print_generic_document' => 'bool',
'receipt_format' => 'string',
'columns' => 'int',
'top_space' => 'int',
'bottom_space' => 'int',
'enable_buzzer' => 'bool',
'invoice_prefix' => 'string',
'printer_number' => 'int',
'configuration' => 'string',
'configuration_pending' => 'bool',
'configured_at' => '\DateTime',
'categories' => '\Swagger\Client\Model\CategorySchema[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'ip_address' => null,
'subnet_mask' => null,
'gateway' => null,
'mac_address_bt' => null,
'ssl' => null,
'port' => null,
'driver' => null,
'connection_type' => null,
'type' => null,
'print_fiscal_receipt' => null,
'print_receipt' => null,
'print_invoice' => null,
'print_receipt_invoice' => null,
'print_summary_invoice' => null,
'print_summary_e_nrc' => null,
'print_summary_e_rc' => null,
'print_shipping_invoice' => null,
'print_e_invoice' => null,
'print_generic_receipt' => null,
'print_generic_invoice' => null,
'print_generic_document' => null,
'receipt_format' => null,
'columns' => null,
'top_space' => null,
'bottom_space' => null,
'enable_buzzer' => null,
'invoice_prefix' => null,
'printer_number' => null,
'configuration' => null,
'configuration_pending' => null,
'configured_at' => 'date-time',
'categories' => null    ];

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
'ip_address' => 'ip_address',
'subnet_mask' => 'subnet_mask',
'gateway' => 'gateway',
'mac_address_bt' => 'mac_address_bt',
'ssl' => 'ssl',
'port' => 'port',
'driver' => 'driver',
'connection_type' => 'connection_type',
'type' => 'type',
'print_fiscal_receipt' => 'print_fiscal_receipt',
'print_receipt' => 'print_receipt',
'print_invoice' => 'print_invoice',
'print_receipt_invoice' => 'print_receipt_invoice',
'print_summary_invoice' => 'print_summary_invoice',
'print_summary_e_nrc' => 'print_summary_e_nrc',
'print_summary_e_rc' => 'print_summary_e_rc',
'print_shipping_invoice' => 'print_shipping_invoice',
'print_e_invoice' => 'print_e_invoice',
'print_generic_receipt' => 'print_generic_receipt',
'print_generic_invoice' => 'print_generic_invoice',
'print_generic_document' => 'print_generic_document',
'receipt_format' => 'receipt_format',
'columns' => 'columns',
'top_space' => 'top_space',
'bottom_space' => 'bottom_space',
'enable_buzzer' => 'enable_buzzer',
'invoice_prefix' => 'invoice_prefix',
'printer_number' => 'printer_number',
'configuration' => 'configuration',
'configuration_pending' => 'configuration_pending',
'configured_at' => 'configured_at',
'categories' => 'categories'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'ip_address' => 'setIpAddress',
'subnet_mask' => 'setSubnetMask',
'gateway' => 'setGateway',
'mac_address_bt' => 'setMacAddressBt',
'ssl' => 'setSsl',
'port' => 'setPort',
'driver' => 'setDriver',
'connection_type' => 'setConnectionType',
'type' => 'setType',
'print_fiscal_receipt' => 'setPrintFiscalReceipt',
'print_receipt' => 'setPrintReceipt',
'print_invoice' => 'setPrintInvoice',
'print_receipt_invoice' => 'setPrintReceiptInvoice',
'print_summary_invoice' => 'setPrintSummaryInvoice',
'print_summary_e_nrc' => 'setPrintSummaryENrc',
'print_summary_e_rc' => 'setPrintSummaryERc',
'print_shipping_invoice' => 'setPrintShippingInvoice',
'print_e_invoice' => 'setPrintEInvoice',
'print_generic_receipt' => 'setPrintGenericReceipt',
'print_generic_invoice' => 'setPrintGenericInvoice',
'print_generic_document' => 'setPrintGenericDocument',
'receipt_format' => 'setReceiptFormat',
'columns' => 'setColumns',
'top_space' => 'setTopSpace',
'bottom_space' => 'setBottomSpace',
'enable_buzzer' => 'setEnableBuzzer',
'invoice_prefix' => 'setInvoicePrefix',
'printer_number' => 'setPrinterNumber',
'configuration' => 'setConfiguration',
'configuration_pending' => 'setConfigurationPending',
'configured_at' => 'setConfiguredAt',
'categories' => 'setCategories'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'ip_address' => 'getIpAddress',
'subnet_mask' => 'getSubnetMask',
'gateway' => 'getGateway',
'mac_address_bt' => 'getMacAddressBt',
'ssl' => 'getSsl',
'port' => 'getPort',
'driver' => 'getDriver',
'connection_type' => 'getConnectionType',
'type' => 'getType',
'print_fiscal_receipt' => 'getPrintFiscalReceipt',
'print_receipt' => 'getPrintReceipt',
'print_invoice' => 'getPrintInvoice',
'print_receipt_invoice' => 'getPrintReceiptInvoice',
'print_summary_invoice' => 'getPrintSummaryInvoice',
'print_summary_e_nrc' => 'getPrintSummaryENrc',
'print_summary_e_rc' => 'getPrintSummaryERc',
'print_shipping_invoice' => 'getPrintShippingInvoice',
'print_e_invoice' => 'getPrintEInvoice',
'print_generic_receipt' => 'getPrintGenericReceipt',
'print_generic_invoice' => 'getPrintGenericInvoice',
'print_generic_document' => 'getPrintGenericDocument',
'receipt_format' => 'getReceiptFormat',
'columns' => 'getColumns',
'top_space' => 'getTopSpace',
'bottom_space' => 'getBottomSpace',
'enable_buzzer' => 'getEnableBuzzer',
'invoice_prefix' => 'getInvoicePrefix',
'printer_number' => 'getPrinterNumber',
'configuration' => 'getConfiguration',
'configuration_pending' => 'getConfigurationPending',
'configured_at' => 'getConfiguredAt',
'categories' => 'getCategories'    ];

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
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['subnet_mask'] = isset($data['subnet_mask']) ? $data['subnet_mask'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['mac_address_bt'] = isset($data['mac_address_bt']) ? $data['mac_address_bt'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['connection_type'] = isset($data['connection_type']) ? $data['connection_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['print_fiscal_receipt'] = isset($data['print_fiscal_receipt']) ? $data['print_fiscal_receipt'] : null;
        $this->container['print_receipt'] = isset($data['print_receipt']) ? $data['print_receipt'] : null;
        $this->container['print_invoice'] = isset($data['print_invoice']) ? $data['print_invoice'] : null;
        $this->container['print_receipt_invoice'] = isset($data['print_receipt_invoice']) ? $data['print_receipt_invoice'] : null;
        $this->container['print_summary_invoice'] = isset($data['print_summary_invoice']) ? $data['print_summary_invoice'] : null;
        $this->container['print_summary_e_nrc'] = isset($data['print_summary_e_nrc']) ? $data['print_summary_e_nrc'] : null;
        $this->container['print_summary_e_rc'] = isset($data['print_summary_e_rc']) ? $data['print_summary_e_rc'] : null;
        $this->container['print_shipping_invoice'] = isset($data['print_shipping_invoice']) ? $data['print_shipping_invoice'] : null;
        $this->container['print_e_invoice'] = isset($data['print_e_invoice']) ? $data['print_e_invoice'] : null;
        $this->container['print_generic_receipt'] = isset($data['print_generic_receipt']) ? $data['print_generic_receipt'] : null;
        $this->container['print_generic_invoice'] = isset($data['print_generic_invoice']) ? $data['print_generic_invoice'] : null;
        $this->container['print_generic_document'] = isset($data['print_generic_document']) ? $data['print_generic_document'] : null;
        $this->container['receipt_format'] = isset($data['receipt_format']) ? $data['receipt_format'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['top_space'] = isset($data['top_space']) ? $data['top_space'] : null;
        $this->container['bottom_space'] = isset($data['bottom_space']) ? $data['bottom_space'] : null;
        $this->container['enable_buzzer'] = isset($data['enable_buzzer']) ? $data['enable_buzzer'] : null;
        $this->container['invoice_prefix'] = isset($data['invoice_prefix']) ? $data['invoice_prefix'] : null;
        $this->container['printer_number'] = isset($data['printer_number']) ? $data['printer_number'] : null;
        $this->container['configuration'] = isset($data['configuration']) ? $data['configuration'] : null;
        $this->container['configuration_pending'] = isset($data['configuration_pending']) ? $data['configuration_pending'] : null;
        $this->container['configured_at'] = isset($data['configured_at']) ? $data['configured_at'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
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
        if ($this->container['driver'] === null) {
            $invalidProperties[] = "'driver' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets subnet_mask
     *
     * @return string
     */
    public function getSubnetMask()
    {
        return $this->container['subnet_mask'];
    }

    /**
     * Sets subnet_mask
     *
     * @param string $subnet_mask subnet_mask
     *
     * @return $this
     */
    public function setSubnetMask($subnet_mask)
    {
        $this->container['subnet_mask'] = $subnet_mask;

        return $this;
    }

    /**
     * Gets gateway
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param string $gateway gateway
     *
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets mac_address_bt
     *
     * @return string
     */
    public function getMacAddressBt()
    {
        return $this->container['mac_address_bt'];
    }

    /**
     * Sets mac_address_bt
     *
     * @param string $mac_address_bt mac_address_bt
     *
     * @return $this
     */
    public function setMacAddressBt($mac_address_bt)
    {
        $this->container['mac_address_bt'] = $mac_address_bt;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return bool
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param bool $ssl ssl
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param int $port port
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets driver
     *
     * @return string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     *
     * @param string $driver Driver type, can be escpos, rch, epson
     *
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

        return $this;
    }

    /**
     * Gets connection_type
     *
     * @return string
     */
    public function getConnectionType()
    {
        return $this->container['connection_type'];
    }

    /**
     * Sets connection_type
     *
     * @param string $connection_type Connection type, can be 'ws' (webservice) or 'bt' (bluetooth)
     *
     * @return $this
     */
    public function setConnectionType($connection_type)
    {
        $this->container['connection_type'] = $connection_type;

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
     * @param string $type printer type, can be fiscal or nonfiscal
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets print_fiscal_receipt
     *
     * @return bool
     */
    public function getPrintFiscalReceipt()
    {
        return $this->container['print_fiscal_receipt'];
    }

    /**
     * Sets print_fiscal_receipt
     *
     * @param bool $print_fiscal_receipt true if can print fiscal receipts, false otherwise
     *
     * @return $this
     */
    public function setPrintFiscalReceipt($print_fiscal_receipt)
    {
        $this->container['print_fiscal_receipt'] = $print_fiscal_receipt;

        return $this;
    }

    /**
     * Gets print_receipt
     *
     * @return bool
     */
    public function getPrintReceipt()
    {
        return $this->container['print_receipt'];
    }

    /**
     * Sets print_receipt
     *
     * @param bool $print_receipt true if can print receipts, false otherwise
     *
     * @return $this
     */
    public function setPrintReceipt($print_receipt)
    {
        $this->container['print_receipt'] = $print_receipt;

        return $this;
    }

    /**
     * Gets print_invoice
     *
     * @return bool
     */
    public function getPrintInvoice()
    {
        return $this->container['print_invoice'];
    }

    /**
     * Sets print_invoice
     *
     * @param bool $print_invoice true if can print invoices, false otherwise
     *
     * @return $this
     */
    public function setPrintInvoice($print_invoice)
    {
        $this->container['print_invoice'] = $print_invoice;

        return $this;
    }

    /**
     * Gets print_receipt_invoice
     *
     * @return bool
     */
    public function getPrintReceiptInvoice()
    {
        return $this->container['print_receipt_invoice'];
    }

    /**
     * Sets print_receipt_invoice
     *
     * @param bool $print_receipt_invoice true if can print invoices based on a previously printed receipt, false otherwise
     *
     * @return $this
     */
    public function setPrintReceiptInvoice($print_receipt_invoice)
    {
        $this->container['print_receipt_invoice'] = $print_receipt_invoice;

        return $this;
    }

    /**
     * Gets print_summary_invoice
     *
     * @return bool
     */
    public function getPrintSummaryInvoice()
    {
        return $this->container['print_summary_invoice'];
    }

    /**
     * Sets print_summary_invoice
     *
     * @param bool $print_summary_invoice true if can print summary invoices
     *
     * @return $this
     */
    public function setPrintSummaryInvoice($print_summary_invoice)
    {
        $this->container['print_summary_invoice'] = $print_summary_invoice;

        return $this;
    }

    /**
     * Gets print_summary_e_nrc
     *
     * @return bool
     */
    public function getPrintSummaryENrc()
    {
        return $this->container['print_summary_e_nrc'];
    }

    /**
     * Sets print_summary_e_nrc
     *
     * @param bool $print_summary_e_nrc true if can print summary non claimed e-invoices
     *
     * @return $this
     */
    public function setPrintSummaryENrc($print_summary_e_nrc)
    {
        $this->container['print_summary_e_nrc'] = $print_summary_e_nrc;

        return $this;
    }

    /**
     * Gets print_summary_e_rc
     *
     * @return bool
     */
    public function getPrintSummaryERc()
    {
        return $this->container['print_summary_e_rc'];
    }

    /**
     * Sets print_summary_e_rc
     *
     * @param bool $print_summary_e_rc true if can print summary claimed e-invoices
     *
     * @return $this
     */
    public function setPrintSummaryERc($print_summary_e_rc)
    {
        $this->container['print_summary_e_rc'] = $print_summary_e_rc;

        return $this;
    }

    /**
     * Gets print_shipping_invoice
     *
     * @return bool
     */
    public function getPrintShippingInvoice()
    {
        return $this->container['print_shipping_invoice'];
    }

    /**
     * Sets print_shipping_invoice
     *
     * @param bool $print_shipping_invoice true if can print shipping invoices
     *
     * @return $this
     */
    public function setPrintShippingInvoice($print_shipping_invoice)
    {
        $this->container['print_shipping_invoice'] = $print_shipping_invoice;

        return $this;
    }

    /**
     * Gets print_e_invoice
     *
     * @return bool
     */
    public function getPrintEInvoice()
    {
        return $this->container['print_e_invoice'];
    }

    /**
     * Sets print_e_invoice
     *
     * @param bool $print_e_invoice true if can print e-invoices
     *
     * @return $this
     */
    public function setPrintEInvoice($print_e_invoice)
    {
        $this->container['print_e_invoice'] = $print_e_invoice;

        return $this;
    }

    /**
     * Gets print_generic_receipt
     *
     * @return bool
     */
    public function getPrintGenericReceipt()
    {
        return $this->container['print_generic_receipt'];
    }

    /**
     * Sets print_generic_receipt
     *
     * @param bool $print_generic_receipt true if can print generic receipts
     *
     * @return $this
     */
    public function setPrintGenericReceipt($print_generic_receipt)
    {
        $this->container['print_generic_receipt'] = $print_generic_receipt;

        return $this;
    }

    /**
     * Gets print_generic_invoice
     *
     * @return bool
     */
    public function getPrintGenericInvoice()
    {
        return $this->container['print_generic_invoice'];
    }

    /**
     * Sets print_generic_invoice
     *
     * @param bool $print_generic_invoice true if can print generic invoices
     *
     * @return $this
     */
    public function setPrintGenericInvoice($print_generic_invoice)
    {
        $this->container['print_generic_invoice'] = $print_generic_invoice;

        return $this;
    }

    /**
     * Gets print_generic_document
     *
     * @return bool
     */
    public function getPrintGenericDocument()
    {
        return $this->container['print_generic_document'];
    }

    /**
     * Sets print_generic_document
     *
     * @param bool $print_generic_document true if can print generic documents
     *
     * @return $this
     */
    public function setPrintGenericDocument($print_generic_document)
    {
        $this->container['print_generic_document'] = $print_generic_document;

        return $this;
    }

    /**
     * Gets receipt_format
     *
     * @return string
     */
    public function getReceiptFormat()
    {
        return $this->container['receipt_format'];
    }

    /**
     * Sets receipt_format
     *
     * @param string $receipt_format receipt format, for ex. 10 or 20 lines
     *
     * @return $this
     */
    public function setReceiptFormat($receipt_format)
    {
        $this->container['receipt_format'] = $receipt_format;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return int
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param int $columns columns
     *
     * @return $this
     */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;

        return $this;
    }

    /**
     * Gets top_space
     *
     * @return int
     */
    public function getTopSpace()
    {
        return $this->container['top_space'];
    }

    /**
     * Sets top_space
     *
     * @param int $top_space top_space
     *
     * @return $this
     */
    public function setTopSpace($top_space)
    {
        $this->container['top_space'] = $top_space;

        return $this;
    }

    /**
     * Gets bottom_space
     *
     * @return int
     */
    public function getBottomSpace()
    {
        return $this->container['bottom_space'];
    }

    /**
     * Sets bottom_space
     *
     * @param int $bottom_space bottom_space
     *
     * @return $this
     */
    public function setBottomSpace($bottom_space)
    {
        $this->container['bottom_space'] = $bottom_space;

        return $this;
    }

    /**
     * Gets enable_buzzer
     *
     * @return bool
     */
    public function getEnableBuzzer()
    {
        return $this->container['enable_buzzer'];
    }

    /**
     * Sets enable_buzzer
     *
     * @param bool $enable_buzzer enable_buzzer
     *
     * @return $this
     */
    public function setEnableBuzzer($enable_buzzer)
    {
        $this->container['enable_buzzer'] = $enable_buzzer;

        return $this;
    }

    /**
     * Gets invoice_prefix
     *
     * @return string
     */
    public function getInvoicePrefix()
    {
        return $this->container['invoice_prefix'];
    }

    /**
     * Sets invoice_prefix
     *
     * @param string $invoice_prefix invoice_prefix
     *
     * @return $this
     */
    public function setInvoicePrefix($invoice_prefix)
    {
        $this->container['invoice_prefix'] = $invoice_prefix;

        return $this;
    }

    /**
     * Gets printer_number
     *
     * @return int
     */
    public function getPrinterNumber()
    {
        return $this->container['printer_number'];
    }

    /**
     * Sets printer_number
     *
     * @param int $printer_number printer_number
     *
     * @return $this
     */
    public function setPrinterNumber($printer_number)
    {
        $this->container['printer_number'] = $printer_number;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param string $configuration configuration
     *
     * @return $this
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets configuration_pending
     *
     * @return bool
     */
    public function getConfigurationPending()
    {
        return $this->container['configuration_pending'];
    }

    /**
     * Sets configuration_pending
     *
     * @param bool $configuration_pending configuration_pending
     *
     * @return $this
     */
    public function setConfigurationPending($configuration_pending)
    {
        $this->container['configuration_pending'] = $configuration_pending;

        return $this;
    }

    /**
     * Gets configured_at
     *
     * @return \DateTime
     */
    public function getConfiguredAt()
    {
        return $this->container['configured_at'];
    }

    /**
     * Sets configured_at
     *
     * @param \DateTime $configured_at configured_at
     *
     * @return $this
     */
    public function setConfiguredAt($configured_at)
    {
        $this->container['configured_at'] = $configured_at;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Swagger\Client\Model\CategorySchema[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Swagger\Client\Model\CategorySchema[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

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
