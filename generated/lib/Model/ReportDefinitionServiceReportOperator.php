<?php
/**
 * ReportDefinitionServiceReportOperator
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
 * ReportDefinitionServiceReportOperator Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;ReportDefinitionServiceReportOperatorは、フィルタ条件を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ReportDefinitionServiceReportOperator displays filtering conditions for the report.&lt;/en&gt;&lt;hr&gt; * &#x60;LESS_THAN_EQUALS&#x60; - &lt;ja&gt;指定の値以下です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Less than equals to selected value.&lt;/en&gt;&lt;br&gt; * &#x60;CONTAINS&#x60; - &lt;ja&gt;指定の値を含みます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Contains the selected value.&lt;/en&gt;&lt;br&gt; * &#x60;IN&#x60; - &lt;ja&gt;いずれかに一致します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Equals to whichever of selected value.&lt;/en&gt;&lt;br&gt; * &#x60;EQUALS&#x60; - &lt;ja&gt;指定の値と一致します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Equal to selected value.&lt;/en&gt;&lt;br&gt; * &#x60;NOT_EQUALS&#x60; - &lt;ja&gt;指定の値と一致しません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Does not equals to selected value.&lt;/en&gt;&lt;br&gt; * &#x60;GREATER_THAN&#x60; - &lt;ja&gt;指定の値を超えます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Greater than selected value.&lt;/en&gt;&lt;br&gt; * &#x60;GREATER_THAN_EQUALS&#x60; - &lt;ja&gt;指定の値以上です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Greater than equals to selected value.&lt;/en&gt;&lt;br&gt; * &#x60;LESS_THAN&#x60; - &lt;ja&gt;指定の値未満です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Less than selected value.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportDefinitionServiceReportOperator
{
    /**
     * Possible values of this enum
     */
    const EQUALS = 'EQUALS';
    const NOT_EQUALS = 'NOT_EQUALS';
    const GREATER_THAN = 'GREATER_THAN';
    const GREATER_THAN_EQUALS = 'GREATER_THAN_EQUALS';
    const LESS_THAN = 'LESS_THAN';
    const LESS_THAN_EQUALS = 'LESS_THAN_EQUALS';
    const CONTAINS = 'CONTAINS';
    const IN = 'IN';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EQUALS,
            self::NOT_EQUALS,
            self::GREATER_THAN,
            self::GREATER_THAN_EQUALS,
            self::LESS_THAN,
            self::LESS_THAN_EQUALS,
            self::CONTAINS,
            self::IN,
            self::UNKNOWN,
        ];
    }
}

