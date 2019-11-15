<?php
/**
 * PageFeedItemServiceJobType
 *
 * PHP version 5
 *
 * @category Class
 * @package  YahooAdsSearchApi\Client
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
 * Do not edit the class manually.
 */

namespace YahooAdsSearchApi\Client\Model;
use \YahooAdsSearchApi\Client\ObjectSerializer;

/**
 * PageFeedItemServiceJobType Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;PageFeedItemServiceJobTypeは、登録したジョブの種類を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;PageFeedItemServiceJobType displays kind of registered job.&lt;/en&gt;&lt;hr&gt; * &#x60;UPLOAD&#x60; - &lt;ja&gt;アップロード&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Upload.&lt;/en&gt;&lt;br&gt; * &#x60;DOWNLOAD&#x60; - &lt;ja&gt;ダウンロード&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Download.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFeedItemServiceJobType
{
    /**
     * Possible values of this enum
     */
    const UPLOAD = 'UPLOAD';
    const DOWNLOAD = 'DOWNLOAD';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPLOAD,
            self::DOWNLOAD,
            self::UNKNOWN,
        ];
    }
}


