<?php
/**
 * AdGroupWebpageServiceExcludedType
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
 * AdGroupWebpageServiceExcludedType Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupWebpageServiceExcludedTypeは、配信対象、および除外対象の設定を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupWebpageServiceExcludedType describes the setting type which delivers ads or do not delivers ads.&lt;/en&gt;&lt;hr&gt; * &#x60;INCLUDED&#x60; - &lt;ja&gt;配信対象&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ads to be delivered&lt;/en&gt;&lt;br&gt; * &#x60;EXCLUDED&#x60; - &lt;ja&gt;除外対象&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ads not to be delivered&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupWebpageServiceExcludedType
{
    /**
     * Possible values of this enum
     */
    const INCLUDED = 'INCLUDED';
    const EXCLUDED = 'EXCLUDED';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCLUDED,
            self::EXCLUDED,
            self::UNKNOWN,
        ];
    }
}

