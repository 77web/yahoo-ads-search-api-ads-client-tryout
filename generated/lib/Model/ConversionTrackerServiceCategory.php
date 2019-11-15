<?php
/**
 * ConversionTrackerServiceCategory
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
 * ConversionTrackerServiceCategory Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;ConversionTrackerServiceCategoryは、トラッキング対象のコンバージョントラッカー情報のカテゴリです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTrackerServiceCategory is a category for ConversionTracker.&lt;/en&gt;&lt;hr&gt; * &#x60;DOWNLOAD&#x60; - &lt;ja&gt;ダウンロードです。&lt;br&gt;※広告管理ツールおよびレポート上での表示は「その他」になります。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;string&lt;/en&gt;&lt;br&gt; * &#x60;DEFAULT&#x60; - &lt;ja&gt;その他です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Others&lt;/en&gt;&lt;br&gt; * &#x60;PAGE_VIEW&#x60; - &lt;ja&gt;主要なページの閲覧です。&lt;br&gt;重要なページなど特定ページの閲覧数の測定を行います。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;This is used to measure page views of specific page such as an important page.&lt;/en&gt;&lt;br&gt; * &#x60;PURCHASE&#x60; - &lt;ja&gt;購入/販売です。&lt;br&gt;商品の注文やサービスへのお申し込みなど、販売につながった測定を行います。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Purchase/Sold.&lt;br&gt;It is used to measure sales such as order and application of the items or service.&lt;/en&gt;&lt;br&gt; * &#x60;SIGNUP&#x60; - &lt;ja&gt;契約です。&lt;br&gt;会員やメールマガジンの登録数などの測定を行います。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Agreement. It is used to measure registration of membership or subscription&lt;/en&gt;&lt;br&gt; * &#x60;LEAD&#x60; - &lt;ja&gt;販売促進です。&lt;br&gt;資料請求数やサービス、商品に関する問い合わせ数などの測定を行います。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Sales promotion. It is used to measure inquiries for catalog, service or merchandise.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceCategory
{
    /**
     * Possible values of this enum
     */
    const _DEFAULT = 'DEFAULT';
    const PAGE_VIEW = 'PAGE_VIEW';
    const PURCHASE = 'PURCHASE';
    const SIGNUP = 'SIGNUP';
    const LEAD = 'LEAD';
    const DOWNLOAD = 'DOWNLOAD';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::PAGE_VIEW,
            self::PURCHASE,
            self::SIGNUP,
            self::LEAD,
            self::DOWNLOAD,
            self::UNKNOWN,
        ];
    }
}


