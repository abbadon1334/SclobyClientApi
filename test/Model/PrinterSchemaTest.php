<?php
/**
 * PrinterSchemaTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * PrinterSchemaTest Class Doc Comment
 *
 * @category    Class
 * @description PrinterSchema
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PrinterSchemaTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "PrinterSchema"
     */
    public function testPrinterSchema()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "ip_address"
     */
    public function testPropertyIpAddress()
    {
    }

    /**
     * Test attribute "subnet_mask"
     */
    public function testPropertySubnetMask()
    {
    }

    /**
     * Test attribute "gateway"
     */
    public function testPropertyGateway()
    {
    }

    /**
     * Test attribute "mac_address_bt"
     */
    public function testPropertyMacAddressBt()
    {
    }

    /**
     * Test attribute "ssl"
     */
    public function testPropertySsl()
    {
    }

    /**
     * Test attribute "port"
     */
    public function testPropertyPort()
    {
    }

    /**
     * Test attribute "driver"
     */
    public function testPropertyDriver()
    {
    }

    /**
     * Test attribute "connection_type"
     */
    public function testPropertyConnectionType()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "print_fiscal_receipt"
     */
    public function testPropertyPrintFiscalReceipt()
    {
    }

    /**
     * Test attribute "print_receipt"
     */
    public function testPropertyPrintReceipt()
    {
    }

    /**
     * Test attribute "print_invoice"
     */
    public function testPropertyPrintInvoice()
    {
    }

    /**
     * Test attribute "print_receipt_invoice"
     */
    public function testPropertyPrintReceiptInvoice()
    {
    }

    /**
     * Test attribute "print_summary_invoice"
     */
    public function testPropertyPrintSummaryInvoice()
    {
    }

    /**
     * Test attribute "print_summary_e_nrc"
     */
    public function testPropertyPrintSummaryENrc()
    {
    }

    /**
     * Test attribute "print_summary_e_rc"
     */
    public function testPropertyPrintSummaryERc()
    {
    }

    /**
     * Test attribute "print_shipping_invoice"
     */
    public function testPropertyPrintShippingInvoice()
    {
    }

    /**
     * Test attribute "print_e_invoice"
     */
    public function testPropertyPrintEInvoice()
    {
    }

    /**
     * Test attribute "print_generic_receipt"
     */
    public function testPropertyPrintGenericReceipt()
    {
    }

    /**
     * Test attribute "print_generic_invoice"
     */
    public function testPropertyPrintGenericInvoice()
    {
    }

    /**
     * Test attribute "print_generic_document"
     */
    public function testPropertyPrintGenericDocument()
    {
    }

    /**
     * Test attribute "receipt_format"
     */
    public function testPropertyReceiptFormat()
    {
    }

    /**
     * Test attribute "columns"
     */
    public function testPropertyColumns()
    {
    }

    /**
     * Test attribute "top_space"
     */
    public function testPropertyTopSpace()
    {
    }

    /**
     * Test attribute "bottom_space"
     */
    public function testPropertyBottomSpace()
    {
    }

    /**
     * Test attribute "enable_buzzer"
     */
    public function testPropertyEnableBuzzer()
    {
    }

    /**
     * Test attribute "invoice_prefix"
     */
    public function testPropertyInvoicePrefix()
    {
    }

    /**
     * Test attribute "printer_number"
     */
    public function testPropertyPrinterNumber()
    {
    }

    /**
     * Test attribute "configuration"
     */
    public function testPropertyConfiguration()
    {
    }

    /**
     * Test attribute "configuration_pending"
     */
    public function testPropertyConfigurationPending()
    {
    }

    /**
     * Test attribute "configured_at"
     */
    public function testPropertyConfiguredAt()
    {
    }
}