<?php
/**
 * InlineResponse2003Test
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
 * InlineResponse2003Test Class Doc Comment
 *
 * @category    Class
 * @description InlineResponse2003
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2003Test extends \PHPUnit_Framework_TestCase
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
     * Test "InlineResponse2003"
     */
    public function testInlineResponse2003()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "username"
     */
    public function testPropertyUsername()
    {
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
    }

    /**
     * Test attribute "phone"
     */
    public function testPropertyPhone()
    {
    }

    /**
     * Test attribute "pin"
     */
    public function testPropertyPin()
    {
    }

    /**
     * Test attribute "thumbnail"
     */
    public function testPropertyThumbnail()
    {
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
    }

    /**
     * Test attribute "role"
     */
    public function testPropertyRole()
    {
    }

    /**
     * Test attribute "shop"
     */
    public function testPropertyShop()
    {
    }
}
