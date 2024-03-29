<?php
/**
 * ReportDefinitionServiceReportTypeTest
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
 * ReportDefinitionServiceReportTypeTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;ja&gt;ReportDefinitionServiceReportTypeは、レポートの種類を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ReportDefinitionServiceReportType displays a type of available report.&lt;/en&gt;&lt;hr&gt; * &#x60;ACCOUNT&#x60; - &lt;ja&gt;アカウントレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account Report.&lt;br&gt;Performance data of selected account.&lt;/en&gt;&lt;br&gt; * &#x60;FEED_ITEM&#x60; - &lt;ja&gt;広告表示オプションレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ad Display Option Report.&lt;br&gt;Performance data for selected Quick Links and/or Call Extension.&lt;/en&gt;&lt;br&gt; * &#x60;KEYWORDLESS_QUERY&#x60; - &lt;ja&gt;検索クエリーレポート（動的検索連動型広告）です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search Query Report(DAS).&lt;/en&gt;&lt;br&gt; * &#x60;CAMPAIGN&#x60; - &lt;ja&gt;キャンペーンレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign Report.&lt;br&gt;Performance data for selected campaigns.&lt;/en&gt;&lt;br&gt; * &#x60;AD&#x60; - &lt;ja&gt;広告レポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ad Report.&lt;br&gt;Performance data for selected ads.&lt;/en&gt;&lt;br&gt; * &#x60;BID_STRATEGY&#x60; - &lt;ja&gt;自動入札レポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Auto Bidding Report.&lt;br&gt;Performance data for selected Auto Bidding.&lt;/en&gt;&lt;br&gt; * &#x60;AD_CUSTOMIZERS&#x60; - &lt;ja&gt;データ自動挿入レポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Data Auto Insertion Report.&lt;br&gt;Performance data for selected Data Auto Insertion.&lt;/en&gt;&lt;br&gt; * &#x60;KEYWORDS&#x60; - &lt;ja&gt;キーワードレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Keyword Report.&lt;br&gt;Performance data for selected keywords.&lt;/en&gt;&lt;br&gt; * &#x60;SCHEDULE_TARGET&#x60; - &lt;ja&gt;曜日・時間帯ターゲティングレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Schedule Targeting Report.&lt;br&gt;Performance data in Day of Week / Hours.&lt;/en&gt;&lt;br&gt; * &#x60;LANDING_PAGE_URL&#x60; - &lt;ja&gt;最終リンク先URLレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Landing Page Report.&lt;br&gt;Performance data for the final URL.&lt;/en&gt;&lt;br&gt; * &#x60;GEO_TARGET&#x60; - &lt;ja&gt;地域ターゲティングレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Geo Targeting Report.&lt;br&gt;Performance data for location targeting.&lt;/en&gt;&lt;br&gt; * &#x60;SEARCH_QUERY&#x60; - &lt;ja&gt;検索クエリレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search Query Report.&lt;br&gt;Performance data for search queries which triggered the ad and received the clicks.&lt;/en&gt;&lt;br&gt; * &#x60;WEBPAGE_CRITERION&#x60; - &lt;ja&gt;ページフィードターゲティングレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Page Feed Targeting Report.&lt;/en&gt;&lt;br&gt; * &#x60;GEO&#x60; - &lt;ja&gt;地域別レポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Geo Report.&lt;br&gt;Performance data by selected location.&lt;/en&gt;&lt;br&gt; * &#x60;TARGET_LIST&#x60; - &lt;ja&gt;ターゲットリスト設定レポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Target List Report.&lt;br&gt;Performance data for selected target list.&lt;/en&gt;&lt;br&gt; * &#x60;ADGROUP&#x60; - &lt;ja&gt;広告グループレポートです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ad Group Report.&lt;br&gt;Performance data for selected ad group for one or more of campaigns.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class ReportDefinitionServiceReportTypeTest extends TestCase
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
     * Test "ReportDefinitionServiceReportType"
     */
    public function testReportDefinitionServiceReportType()
    {
    }
}
