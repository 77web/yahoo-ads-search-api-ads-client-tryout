<?php
/**
 * AdGroupAdServiceAd
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

use \ArrayAccess;
use \YahooAdsSearchApi\Client\ObjectSerializer;

/**
 * AdGroupAdServiceAd Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupAdServiceAdオブジェクトは、広告に関する情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupAdServiceAd object describes ad information.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;additionalAdvancedMobileUrls&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合:Ignore。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is DYNAMIC_SEARCH_LINK_AD, Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;additionalAdvancedUrls&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合:Ignore。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is DYNAMIC_SEARCH_LINK_AD, Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;advancedMobileUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合:Ignore。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is DYNAMIC_SEARCH_LINK_AD, Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;advancedUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;ja&gt;※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合:Ignore。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is DYNAMIC_SEARCH_LINK_AD, Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;appAd&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※adTypeがAPP_ADの場合:Requirement。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is APP_AD, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;customParameters&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;description&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;devicePreference&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※DOUBLE_TEXT_ADの場合、Ignore。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* Ignore for DOUBLE_TEXT_AD.&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;displayUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;extendedTextAd&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※adTypeがEXTENDED_TEXT_ADの場合:Requirement。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is EXTENDED_TEXT_AD, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;headline&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;ja&gt;※adTypeがDYNAMIC_SEARCH_LINKED_ADの場合:Ignore。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is DYNAMIC_SEARCH_LINKED_AD, Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;textAd2&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※adTypeがTEXT_AD2の場合:Requirement。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗If adType is TEXT_AD2, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;trackingUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;url&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAdServiceAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAdServiceAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ad_type' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdType',
        'additional_advanced_mobile_urls' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdditionalAdvancedMobileUrls[]',
        'additional_advanced_urls' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdditionalAdvancedUrls[]',
        'advanced_mobile_url' => 'string',
        'advanced_url' => 'string',
        'app_ad' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceAppAd',
        'custom_parameters' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceCustomParameters',
        'description' => 'string',
        'device_preference' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceDevicePreference',
        'display_url' => 'string',
        'extended_text_ad' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceExtendedTextAd',
        'headline' => 'string',
        'text_ad2' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceTextAd2',
        'tracking_url' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ad_type' => null,
        'additional_advanced_mobile_urls' => null,
        'additional_advanced_urls' => null,
        'advanced_mobile_url' => null,
        'advanced_url' => null,
        'app_ad' => null,
        'custom_parameters' => null,
        'description' => null,
        'device_preference' => null,
        'display_url' => null,
        'extended_text_ad' => null,
        'headline' => null,
        'text_ad2' => null,
        'tracking_url' => null,
        'url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ad_type' => 'adType',
        'additional_advanced_mobile_urls' => 'additionalAdvancedMobileUrls',
        'additional_advanced_urls' => 'additionalAdvancedUrls',
        'advanced_mobile_url' => 'advancedMobileUrl',
        'advanced_url' => 'advancedUrl',
        'app_ad' => 'appAd',
        'custom_parameters' => 'customParameters',
        'description' => 'description',
        'device_preference' => 'devicePreference',
        'display_url' => 'displayUrl',
        'extended_text_ad' => 'extendedTextAd',
        'headline' => 'headline',
        'text_ad2' => 'textAd2',
        'tracking_url' => 'trackingUrl',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_type' => 'setAdType',
        'additional_advanced_mobile_urls' => 'setAdditionalAdvancedMobileUrls',
        'additional_advanced_urls' => 'setAdditionalAdvancedUrls',
        'advanced_mobile_url' => 'setAdvancedMobileUrl',
        'advanced_url' => 'setAdvancedUrl',
        'app_ad' => 'setAppAd',
        'custom_parameters' => 'setCustomParameters',
        'description' => 'setDescription',
        'device_preference' => 'setDevicePreference',
        'display_url' => 'setDisplayUrl',
        'extended_text_ad' => 'setExtendedTextAd',
        'headline' => 'setHeadline',
        'text_ad2' => 'setTextAd2',
        'tracking_url' => 'setTrackingUrl',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_type' => 'getAdType',
        'additional_advanced_mobile_urls' => 'getAdditionalAdvancedMobileUrls',
        'additional_advanced_urls' => 'getAdditionalAdvancedUrls',
        'advanced_mobile_url' => 'getAdvancedMobileUrl',
        'advanced_url' => 'getAdvancedUrl',
        'app_ad' => 'getAppAd',
        'custom_parameters' => 'getCustomParameters',
        'description' => 'getDescription',
        'device_preference' => 'getDevicePreference',
        'display_url' => 'getDisplayUrl',
        'extended_text_ad' => 'getExtendedTextAd',
        'headline' => 'getHeadline',
        'text_ad2' => 'getTextAd2',
        'tracking_url' => 'getTrackingUrl',
        'url' => 'getUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ad_type'] = isset($data['ad_type']) ? $data['ad_type'] : null;
        $this->container['additional_advanced_mobile_urls'] = isset($data['additional_advanced_mobile_urls']) ? $data['additional_advanced_mobile_urls'] : null;
        $this->container['additional_advanced_urls'] = isset($data['additional_advanced_urls']) ? $data['additional_advanced_urls'] : null;
        $this->container['advanced_mobile_url'] = isset($data['advanced_mobile_url']) ? $data['advanced_mobile_url'] : null;
        $this->container['advanced_url'] = isset($data['advanced_url']) ? $data['advanced_url'] : null;
        $this->container['app_ad'] = isset($data['app_ad']) ? $data['app_ad'] : null;
        $this->container['custom_parameters'] = isset($data['custom_parameters']) ? $data['custom_parameters'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['device_preference'] = isset($data['device_preference']) ? $data['device_preference'] : null;
        $this->container['display_url'] = isset($data['display_url']) ? $data['display_url'] : null;
        $this->container['extended_text_ad'] = isset($data['extended_text_ad']) ? $data['extended_text_ad'] : null;
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['text_ad2'] = isset($data['text_ad2']) ? $data['text_ad2'] : null;
        $this->container['tracking_url'] = isset($data['tracking_url']) ? $data['tracking_url'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ad_type
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdType|null
     */
    public function getAdType()
    {
        return $this->container['ad_type'];
    }

    /**
     * Sets ad_type
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdType|null $ad_type ad_type
     *
     * @return $this
     */
    public function setAdType($ad_type)
    {
        $this->container['ad_type'] = $ad_type;

        return $this;
    }

    /**
     * Gets additional_advanced_mobile_urls
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdditionalAdvancedMobileUrls[]|null
     */
    public function getAdditionalAdvancedMobileUrls()
    {
        return $this->container['additional_advanced_mobile_urls'];
    }

    /**
     * Sets additional_advanced_mobile_urls
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdditionalAdvancedMobileUrls[]|null $additional_advanced_mobile_urls additional_advanced_mobile_urls
     *
     * @return $this
     */
    public function setAdditionalAdvancedMobileUrls($additional_advanced_mobile_urls)
    {
        $this->container['additional_advanced_mobile_urls'] = $additional_advanced_mobile_urls;

        return $this;
    }

    /**
     * Gets additional_advanced_urls
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdditionalAdvancedUrls[]|null
     */
    public function getAdditionalAdvancedUrls()
    {
        return $this->container['additional_advanced_urls'];
    }

    /**
     * Sets additional_advanced_urls
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdditionalAdvancedUrls[]|null $additional_advanced_urls additional_advanced_urls
     *
     * @return $this
     */
    public function setAdditionalAdvancedUrls($additional_advanced_urls)
    {
        $this->container['additional_advanced_urls'] = $additional_advanced_urls;

        return $this;
    }

    /**
     * Gets advanced_mobile_url
     *
     * @return string|null
     */
    public function getAdvancedMobileUrl()
    {
        return $this->container['advanced_mobile_url'];
    }

    /**
     * Sets advanced_mobile_url
     *
     * @param string|null $advanced_mobile_url <ja>最終リンク先URL（スマート フォン）です。</ja><br><en>Landing Page URL (Smartphone).</en>
     *
     * @return $this
     */
    public function setAdvancedMobileUrl($advanced_mobile_url)
    {
        $this->container['advanced_mobile_url'] = $advanced_mobile_url;

        return $this;
    }

    /**
     * Gets advanced_url
     *
     * @return string|null
     */
    public function getAdvancedUrl()
    {
        return $this->container['advanced_url'];
    }

    /**
     * Sets advanced_url
     *
     * @param string|null $advanced_url <ja>最終リンク先URLです。</ja><br><en>Landing Page URL.</en>
     *
     * @return $this
     */
    public function setAdvancedUrl($advanced_url)
    {
        $this->container['advanced_url'] = $advanced_url;

        return $this;
    }

    /**
     * Gets app_ad
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAppAd|null
     */
    public function getAppAd()
    {
        return $this->container['app_ad'];
    }

    /**
     * Sets app_ad
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAppAd|null $app_ad app_ad
     *
     * @return $this
     */
    public function setAppAd($app_ad)
    {
        $this->container['app_ad'] = $app_ad;

        return $this;
    }

    /**
     * Gets custom_parameters
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceCustomParameters|null
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * Sets custom_parameters
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceCustomParameters|null $custom_parameters custom_parameters
     *
     * @return $this
     */
    public function setCustomParameters($custom_parameters)
    {
        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description <ja>説明文です。</ja><br><en>Description of ad.</en>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets device_preference
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceDevicePreference|null
     */
    public function getDevicePreference()
    {
        return $this->container['device_preference'];
    }

    /**
     * Sets device_preference
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceDevicePreference|null $device_preference device_preference
     *
     * @return $this
     */
    public function setDevicePreference($device_preference)
    {
        $this->container['device_preference'] = $device_preference;

        return $this;
    }

    /**
     * Gets display_url
     *
     * @return string|null
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string|null $display_url <ja>表示URLです。</ja><br><en>Display URL.</en>
     *
     * @return $this
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets extended_text_ad
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceExtendedTextAd|null
     */
    public function getExtendedTextAd()
    {
        return $this->container['extended_text_ad'];
    }

    /**
     * Sets extended_text_ad
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceExtendedTextAd|null $extended_text_ad extended_text_ad
     *
     * @return $this
     */
    public function setExtendedTextAd($extended_text_ad)
    {
        $this->container['extended_text_ad'] = $extended_text_ad;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline <ja>タイトル文です。</ja><br><en>Title of ad.</en>
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets text_ad2
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceTextAd2|null
     */
    public function getTextAd2()
    {
        return $this->container['text_ad2'];
    }

    /**
     * Sets text_ad2
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceTextAd2|null $text_ad2 text_ad2
     *
     * @return $this
     */
    public function setTextAd2($text_ad2)
    {
        $this->container['text_ad2'] = $text_ad2;

        return $this;
    }

    /**
     * Gets tracking_url
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     *
     * @param string|null $tracking_url <ja>トラッキングURLです。</ja><br><en>Tracking URL.</en>
     *
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url <ja>移行前のリンク先URLです。</ja><br><en>Destination URL before upgrading.</en>
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


