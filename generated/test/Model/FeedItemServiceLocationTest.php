<?php
/**
 * FeedItemServiceLocationTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス β版 / Yahoo! Ads Search Ads API Reference β Version
 *
 * <ja>Yahoo!広告 検索広告 APIのWebサービスについて説明します。<br> 「Try it out」のご利用には、事前にアプリケーションの登録が必要です。また、アプリケーションのリダイレクトURIの1つに<br> https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.htmlを登録してください。 </ja><br> <br> <en>Search Ads API Web Services supported in Yahoo! Ads API.<br> When you use \"Try it out\", you need to register your application in advance.<br> As one of redirect URI for application, you need to set \"https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.html\". </en>
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Client;

use PHPUnit\Framework\TestCase;

/**
 * FeedItemServiceLocationTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;ja&gt;FeedItemServiceLocationオブジェクトは、地域設定情報を格納します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;FeedItemServiceLocation object contains the information of Geographic FeedItemServiceLocation.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;isRemove&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※地域設定を解除する場合は、isRemoveにTRUEを指定します。&lt;br&gt;解除後は、geoTargetingRestrictionにNONEが設定されます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* To deactivate the location restriction, set isRemove:TRUE.&lt;br&gt;After deactivation, geoTargetingRestriction is set to NONE.&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;criterionTypeFeedItem&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;※default：LOCATION&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;geoRestriction&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;※default：NONE&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class FeedItemServiceLocationTest extends TestCase
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
     * Test "FeedItemServiceLocation"
     */
    public function testFeedItemServiceLocation()
    {
    }

    /**
     * Test attribute "criterion_type_feed_item"
     */
    public function testPropertyCriterionTypeFeedItem()
    {
    }

    /**
     * Test attribute "geo_restriction"
     */
    public function testPropertyGeoRestriction()
    {
    }

    /**
     * Test attribute "is_remove"
     */
    public function testPropertyIsRemove()
    {
    }

    /**
     * Test attribute "target_id"
     */
    public function testPropertyTargetId()
    {
    }
}
