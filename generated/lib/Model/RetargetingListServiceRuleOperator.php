<?php
/**
 * RetargetingListServiceRuleOperator
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
 * RetargetingListServiceRuleOperator Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;RetargetingListServiceRuleOperatorは、ルールの評価条件で設定する評価式の種別です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;RetargetingListServiceRuleOperator is the evaluation type to set evaluation condition of rules.&lt;/en&gt;&lt;hr&gt; * &#x60;STARTS_WITH&#x60; - &lt;ja&gt;（指定した文字列で）始まります。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Starts with (the specified string).&lt;/en&gt;&lt;br&gt; * &#x60;NOT_START_WITH&#x60; - &lt;ja&gt;（指定した文字列で）始まりません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Does not start with (the specified string).&lt;/en&gt;&lt;br&gt; * &#x60;EQUALS&#x60; - &lt;ja&gt;一致します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Equals or match.&lt;/en&gt;&lt;br&gt; * &#x60;NOT_CONTAIN&#x60; - &lt;ja&gt;（指定した文字列を）含みません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Does not contain nor include (the specified string).&lt;/en&gt;&lt;br&gt; * &#x60;ENDS_WITH&#x60; - &lt;ja&gt;（指定した文字列で）終わります。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ends with (the specified string).&lt;/en&gt;&lt;br&gt; * &#x60;NOT_END_WITH&#x60; - &lt;ja&gt;（指定した文字列で）終わりません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Does not end with (the specified string).&lt;/en&gt;&lt;br&gt; * &#x60;CONTAINS&#x60; - &lt;ja&gt;（指定した文字列を）含みます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Contains or include (the specified string).&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - &lt;ja&gt;未指定です。&lt;br&gt;※読み取り専用で設定はできなくなります。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Unknown, or not been set.&lt;br&gt;*Cannot set for read only.&lt;/en&gt;&lt;br&gt; * &#x60;NOT_EQUAL&#x60; - &lt;ja&gt;一致しません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Do not equal nor match.&lt;/en&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingListServiceRuleOperator
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'UNKNOWN';
    const EQUALS = 'EQUALS';
    const NOT_EQUAL = 'NOT_EQUAL';
    const CONTAINS = 'CONTAINS';
    const NOT_CONTAIN = 'NOT_CONTAIN';
    const STARTS_WITH = 'STARTS_WITH';
    const NOT_START_WITH = 'NOT_START_WITH';
    const ENDS_WITH = 'ENDS_WITH';
    const NOT_END_WITH = 'NOT_END_WITH';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::EQUALS,
            self::NOT_EQUAL,
            self::CONTAINS,
            self::NOT_CONTAIN,
            self::STARTS_WITH,
            self::NOT_START_WITH,
            self::ENDS_WITH,
            self::NOT_END_WITH,
        ];
    }
}


