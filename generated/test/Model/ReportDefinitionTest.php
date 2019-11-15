<?php
/**
 * ReportDefinitionTest
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
 * ReportDefinitionTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;ja&gt;ReportDefinitionオブジェクトは、レポートの情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ReportDefinition object describes report information.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;completeTime&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;dateRange&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;fields&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;filters&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportJobErrorDetail&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportJobId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportJobStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;requestTime&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;sortFields&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportIncludeDeleted&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※レポートタイプが以下の場合のみ。&lt;br&gt;・CAMPAIGN&lt;br&gt;・ADGROUP&lt;br&gt;・AD&lt;br&gt;・KEYWORDS&lt;br&gt;・FEED_ITEM&lt;br&gt;・AD_CUSTOMIZERS&lt;br&gt;これ以外の場合はIgnore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If ReportType is [ CAMPAIGN, ADGROUP, AD, KEYWORDS, FEED_ITEM, AD_CUSTOMIZERS ], Optional&lt;br&gt;Otherwise, Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportCompressType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportDateRangeType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportDownloadFormat&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportLanguage&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportDownloadEncode&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reportIncludeZeroImpressions&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ReportDefinitionTest extends TestCase
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
     * Test "ReportDefinition"
     */
    public function testReportDefinition()
    {
    }

    /**
     * Test attribute "account_id"
     */
    public function testPropertyAccountId()
    {
    }

    /**
     * Test attribute "complete_time"
     */
    public function testPropertyCompleteTime()
    {
    }

    /**
     * Test attribute "date_range"
     */
    public function testPropertyDateRange()
    {
    }

    /**
     * Test attribute "fields"
     */
    public function testPropertyFields()
    {
    }

    /**
     * Test attribute "filters"
     */
    public function testPropertyFilters()
    {
    }

    /**
     * Test attribute "report_compress_type"
     */
    public function testPropertyReportCompressType()
    {
    }

    /**
     * Test attribute "report_date_range_type"
     */
    public function testPropertyReportDateRangeType()
    {
    }

    /**
     * Test attribute "report_download_encode"
     */
    public function testPropertyReportDownloadEncode()
    {
    }

    /**
     * Test attribute "report_download_format"
     */
    public function testPropertyReportDownloadFormat()
    {
    }

    /**
     * Test attribute "report_include_deleted"
     */
    public function testPropertyReportIncludeDeleted()
    {
    }

    /**
     * Test attribute "report_include_zero_impressions"
     */
    public function testPropertyReportIncludeZeroImpressions()
    {
    }

    /**
     * Test attribute "report_job_error_detail"
     */
    public function testPropertyReportJobErrorDetail()
    {
    }

    /**
     * Test attribute "report_job_id"
     */
    public function testPropertyReportJobId()
    {
    }

    /**
     * Test attribute "report_job_status"
     */
    public function testPropertyReportJobStatus()
    {
    }

    /**
     * Test attribute "report_language"
     */
    public function testPropertyReportLanguage()
    {
    }

    /**
     * Test attribute "report_name"
     */
    public function testPropertyReportName()
    {
    }

    /**
     * Test attribute "report_type"
     */
    public function testPropertyReportType()
    {
    }

    /**
     * Test attribute "request_time"
     */
    public function testPropertyRequestTime()
    {
    }

    /**
     * Test attribute "sort_fields"
     */
    public function testPropertySortFields()
    {
    }
}