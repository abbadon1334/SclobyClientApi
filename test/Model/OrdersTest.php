<?php
/**
 * OrdersTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * OrdersTest Class Doc Comment
 *
 * @category    Class
 * @description Orders
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrdersTest extends \PHPUnit_Framework_TestCase
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
     * Test "Orders"
     */
    public function testOrders()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "uuid"
     */
    public function testPropertyUuid()
    {
    }

    /**
     * Test attribute "order_parent_id"
     */
    public function testPropertyOrderParentId()
    {
    }

    /**
     * Test attribute "order_parent_uuid"
     */
    public function testPropertyOrderParentUuid()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "paid"
     */
    public function testPropertyPaid()
    {
    }

    /**
     * Test attribute "external_id"
     */
    public function testPropertyExternalId()
    {
    }

    /**
     * Test attribute "channel"
     */
    public function testPropertyChannel()
    {
    }

    /**
     * Test attribute "notes"
     */
    public function testPropertyNotes()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "amount"
     */
    public function testPropertyAmount()
    {
    }

    /**
     * Test attribute "net_amount"
     */
    public function testPropertyNetAmount()
    {
    }

    /**
     * Test attribute "room_id"
     */
    public function testPropertyRoomId()
    {
    }

    /**
     * Test attribute "room_name"
     */
    public function testPropertyRoomName()
    {
    }

    /**
     * Test attribute "table_id"
     */
    public function testPropertyTableId()
    {
    }

    /**
     * Test attribute "table_name"
     */
    public function testPropertyTableName()
    {
    }

    /**
     * Test attribute "operator_id"
     */
    public function testPropertyOperatorId()
    {
    }

    /**
     * Test attribute "operator_name"
     */
    public function testPropertyOperatorName()
    {
    }

    /**
     * Test attribute "lastupdate_at"
     */
    public function testPropertyLastupdateAt()
    {
    }

    /**
     * Test attribute "lastupdate_by"
     */
    public function testPropertyLastupdateBy()
    {
    }

    /**
     * Test attribute "order_number"
     */
    public function testPropertyOrderNumber()
    {
    }

    /**
     * Test attribute "covers"
     */
    public function testPropertyCovers()
    {
    }

    /**
     * Test attribute "open_at"
     */
    public function testPropertyOpenAt()
    {
    }

    /**
     * Test attribute "checkout_at"
     */
    public function testPropertyCheckoutAt()
    {
    }

    /**
     * Test attribute "closed_at"
     */
    public function testPropertyClosedAt()
    {
    }

    /**
     * Test attribute "deliver_at"
     */
    public function testPropertyDeliverAt()
    {
    }

    /**
     * Test attribute "last_sent_by"
     */
    public function testPropertyLastSentBy()
    {
    }

    /**
     * Test attribute "last_sent_at"
     */
    public function testPropertyLastSentAt()
    {
    }

    /**
     * Test attribute "previous"
     */
    public function testPropertyPrevious()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "updated_at"
     */
    public function testPropertyUpdatedAt()
    {
    }

    /**
     * Test attribute "deleted_at"
     */
    public function testPropertyDeletedAt()
    {
    }

    /**
     * Test attribute "createdby_id"
     */
    public function testPropertyCreatedbyId()
    {
    }

    /**
     * Test attribute "updatedby_id"
     */
    public function testPropertyUpdatedbyId()
    {
    }

    /**
     * Test attribute "deletedby_id"
     */
    public function testPropertyDeletedbyId()
    {
    }

    /**
     * Test attribute "previous_order"
     */
    public function testPropertyPreviousOrder()
    {
    }

    /**
     * Test attribute "order_items"
     */
    public function testPropertyOrderItems()
    {
    }

    /**
     * Test attribute "order_customer"
     */
    public function testPropertyOrderCustomer()
    {
    }
}
