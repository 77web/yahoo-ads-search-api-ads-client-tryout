<?php
/**
 * ConversionTrackerServiceMarkupLanguage
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
 * ConversionTrackerServiceMarkupLanguage Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;ConversionTrackerServiceMarkupLanguageは、スニペットの記述に使用するマークアップ言語を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTrackerServiceMarkupLanguage shows ConversionTrackerServiceMarkupLanguage for Snipet.&lt;/en&gt;&lt;hr&gt; * &#x60;HTML&#x60; - &lt;ja&gt;HTML言語です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;HTML&lt;/en&gt;&lt;br&gt; * &#x60;XHTML&#x60; - &lt;ja&gt;XHTML言語です。参照のみ可能です。&lt;br&gt;※XHTMLの登録・更新は2016年6月15日で終了しました。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;XHTML. Reference only.&lt;br&gt;* Add/Update XHTML has been sunset on June15, 2016.&lt;/en&gt;&lt;br&gt; * &#x60;CHTML&#x60; - &lt;ja&gt;CHTML言語です。参照のみ可能です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CHTML. Reference only.&lt;/en&gt;&lt;br&gt; * &#x60;WML&#x60; - &lt;ja&gt;WML言語です。参照のみ可能です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;WML. Reference only.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceMarkupLanguage
{
    /**
     * Possible values of this enum
     */
    const HTML = 'HTML';
    const CHTML = 'CHTML';
    const XHTML = 'XHTML';
    const WML = 'WML';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HTML,
            self::CHTML,
            self::XHTML,
            self::WML,
            self::UNKNOWN,
        ];
    }
}


