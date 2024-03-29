<?php
/**
 * PageFeedItemServiceUploadJobStatusTest
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
 * PageFeedItemServiceUploadJobStatusTest Class Doc Comment
 *
 * @category    Class
 * @description &lt;ja&gt;PageFeedItemServiceUploadJobStatusは、ページフィードアイテムアップロードジョブの実行状況を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;PageFeedItemServiceUploadJobStatus displays status of page feed item upload jobs.&lt;/en&gt;&lt;hr&gt; * &#x60;IN_PROGRESS&#x60; - &lt;ja&gt;処理中&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Currently in progress of creating.&lt;/en&gt;&lt;br&gt; * &#x60;INVALID_FEED_ID&#x60; - &lt;ja&gt;フィードIDが不正&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Feed ID is invalid.&lt;/en&gt;&lt;br&gt; * &#x60;TIMEOUT&#x60; - &lt;ja&gt;タイムアウト&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Timeout&lt;/en&gt;&lt;br&gt; * &#x60;EXCEED_ROW_LINES&#x60; - &lt;ja&gt;ファイルの最大行数が超過しています。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Row count of the file exceeded the maximum.&lt;/en&gt;&lt;br&gt; * &#x60;COMPLETED&#x60; - &lt;ja&gt;処理完了&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Job has completed.&lt;/en&gt;&lt;br&gt; * &#x60;COMPLETED_WITH_VALIDATION_ERROR&#x60; - &lt;ja&gt;ファイル内の入力値が不正&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Contents written in the file are invalid.&lt;/en&gt;&lt;br&gt; * &#x60;COLUMN_HEADER_ERROR&#x60; - &lt;ja&gt;ファイルのヘッダーが不正&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Content header of the file is invalid.&lt;/en&gt;&lt;br&gt; * &#x60;FILE_FORMAT_ERROR&#x60; - &lt;ja&gt;ファイルのフォーマットが不正&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Format of the file is invalid.&lt;/en&gt;&lt;br&gt; * &#x60;FILE_ENCODING_ERROR&#x60; - &lt;ja&gt;ファイルのエンコードが不正&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Encoding of the file is invalid.&lt;/en&gt;&lt;br&gt; * &#x60;EXCEED_FILE_COUNTS&#x60; - &lt;ja&gt;複数のファイルを圧縮しているためエラー&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Count of the file exceeded the maximum.&lt;/en&gt;&lt;br&gt; * &#x60;SYSTEM_ERROR&#x60; - &lt;ja&gt;エラー&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Systen error.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package     OpenAPI\Client
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class PageFeedItemServiceUploadJobStatusTest extends TestCase
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
     * Test "PageFeedItemServiceUploadJobStatus"
     */
    public function testPageFeedItemServiceUploadJobStatus()
    {
    }
}
