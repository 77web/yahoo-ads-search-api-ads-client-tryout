<?php
/**
 * ConversionTrackerTest
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
 * ConversionTrackerTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;ja&gt;ConversionTrackerオブジェクトは、コンバージョン測定タグやタグごとのパフォーマンスデータなどのコンバージョントラッカー情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTracker object shows ConversionTracker information such as ConversionTag and performance data by tag.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;allConversions&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;category&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionTrackerId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionTrackerName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionTrackerType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionValue&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversions&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;excludeFromBidding&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;default: FALSE（使用する）&lt;/ja&gt;&lt;br&gt;&lt;en&gt;default: FALSE（include）&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;mostRecentConversionDate&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;status&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;userRevenueValue&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;allConversionValue&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionCountingType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;default：MANY_PER_CLICK&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;measurementPeriod&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;default: 30&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;webConversion&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※conversionTrackerTypeがWEB_CONVERSIONの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If conversionTrackerType is WEB_CONVERSION, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;appConversion&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※conversionTrackerTypeがAPP_CONVERSIONの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If conversionTrackerType is APP_CONVERSION, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ConversionTrackerTest extends TestCase
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
     * Test "ConversionTracker"
     */
    public function testConversionTracker()
    {
    }

    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
    }

    /**
     * Test attribute "all_conversion_value"
     */
    public function testPropertyAllConversionValue()
    {
    }

    /**
     * Test attribute "all_conversions"
     */
    public function testPropertyAllConversions()
    {
    }

    /**
     * Test attribute "app_conversion"
     */
    public function testPropertyAppConversion()
    {
    }

    /**
     * Test attribute "category"
     */
    public function testPropertyCategory()
    {
    }

    /**
     * Test attribute "conversion_counting_type"
     */
    public function testPropertyConversionCountingType()
    {
    }

    /**
     * Test attribute "conversion_tracker_id"
     */
    public function testPropertyConversionTrackerId()
    {
    }

    /**
     * Test attribute "conversion_tracker_name"
     */
    public function testPropertyConversionTrackerName()
    {
    }

    /**
     * Test attribute "conversion_tracker_type"
     */
    public function testPropertyConversionTrackerType()
    {
    }

    /**
     * Test attribute "conversion_value"
     */
    public function testPropertyConversionValue()
    {
    }

    /**
     * Test attribute "conversions"
     */
    public function testPropertyConversions()
    {
    }

    /**
     * Test attribute "exclude_from_bidding"
     */
    public function testPropertyExcludeFromBidding()
    {
    }

    /**
     * Test attribute "measurement_period"
     */
    public function testPropertyMeasurementPeriod()
    {
    }

    /**
     * Test attribute "most_recent_conversion_date"
     */
    public function testPropertyMostRecentConversionDate()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "user_revenue_value"
     */
    public function testPropertyUserRevenueValue()
    {
    }

    /**
     * Test attribute "web_conversion"
     */
    public function testPropertyWebConversion()
    {
    }
}
