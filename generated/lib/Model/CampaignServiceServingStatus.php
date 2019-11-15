<?php
/**
 * CampaignServiceServingStatus
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
 * CampaignServiceServingStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;CampaignServiceServingStatusは、キャンペーンレベルの配信状況です。 ユーザーによる広告配信の調整に関わらず、キャンペーンとしての状態を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CampaignServiceServingStatus displays delivery status in campaign level. Display the campaign status, regardless of userStatus setting.&lt;/en&gt;&lt;hr&gt; * &#x60;SERVING&#x60; - &lt;ja&gt;キャンペーンは、現在配信されています。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;The campaign is currently serving ads.&lt;/en&gt;&lt;br&gt; * &#x60;ENDED&#x60; - &lt;ja&gt;配信が終了しています。&lt;br&gt;設定されたキャンペーン期間後のため、現在配信されていません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;The campaign has ended.&lt;br&gt;It is already past the delivery period, so the campaign is currently not serving ads.&lt;/en&gt;&lt;br&gt; * &#x60;PENDING&#x60; - &lt;ja&gt;配信が開始していません。&lt;br&gt;設定されたキャンペーン期間前のため、現在まだ配信されていません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;The campaign has not started.&lt;br&gt;It has not reached the delivery period, so the campaign is currently not serving ads.&lt;/en&gt;&lt;br&gt; * &#x60;STOP&#x60; - &lt;ja&gt;キャンペーンは、現在配信されていません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;The campaign has been suspended.&lt;br&gt;(Reason may from lack of allocated funds)&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceServingStatus
{
    /**
     * Possible values of this enum
     */
    const SERVING = 'SERVING';
    const ENDED = 'ENDED';
    const PENDING = 'PENDING';
    const STOP = 'STOP';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVING,
            self::ENDED,
            self::PENDING,
            self::STOP,
            self::UNKNOWN,
        ];
    }
}


