<?php
/**
 * AdGroupCriterionServiceBiddableAdGroupCriterion
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
 * AdGroupCriterionServiceBiddableAdGroupCriterion Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupCriterionServiceBiddableAdGroupCriterionオブジェクトは、広告グループの単価設定可能（包含）クライテリアです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupCriterionServiceBiddableAdGroupCriterion object displays biddable criterion in ad group.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;additionalAdvancedMobileUrls&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;additionalAdvancedUrls&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;advancedMobileUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※移行しない（advanced&#x3D;FALSE）場合、Ignore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* Ignore when not updating (advanced &#x3D;FALSE).&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;advancedUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※移行してtracking Urlを指定している場合、Requirement&lt;br&gt;※移行しない（advanced&#x3D;FALSE）場合、Ignore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* Requirement when designating tracking URL after the upgrade.&lt;br&gt;* Ignore when not updating (advanced &#x3D;FALSE).&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;approvalStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;bid&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;customParameters&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※移行しない（advanced&#x3D;FALSE）場合、Ignore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* Ignore when not to be updated (advanced &#x3D;FALSE).&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;destinationUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;disapprovalReasonCodes&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reviewAdvancedMobileUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reviewAdvancedUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reviewCustomParameters&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reviewDestinationUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reviewTrackingUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;trackingUrl&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;userStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupCriterionServiceBiddableAdGroupCriterion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupCriterionServiceBiddableAdGroupCriterion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_advanced_mobile_urls' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceAdditionalAdvancedMobileUrls',
        'additional_advanced_urls' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceAdditionalAdvancedUrls',
        'advanced_mobile_url' => 'string',
        'advanced_url' => 'string',
        'approval_status' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceApprovalStatus',
        'bid' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceBid',
        'custom_parameters' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceCustomParameters',
        'destination_url' => 'string',
        'disapproval_reason_codes' => 'string[]',
        'review_advanced_mobile_url' => 'string',
        'review_advanced_url' => 'string',
        'review_custom_parameters' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceCustomParameters',
        'review_destination_url' => 'string',
        'review_tracking_url' => 'string',
        'tracking_url' => 'string',
        'user_status' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceUserStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additional_advanced_mobile_urls' => null,
        'additional_advanced_urls' => null,
        'advanced_mobile_url' => null,
        'advanced_url' => null,
        'approval_status' => null,
        'bid' => null,
        'custom_parameters' => null,
        'destination_url' => null,
        'disapproval_reason_codes' => null,
        'review_advanced_mobile_url' => null,
        'review_advanced_url' => null,
        'review_custom_parameters' => null,
        'review_destination_url' => null,
        'review_tracking_url' => null,
        'tracking_url' => null,
        'user_status' => null
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
        'additional_advanced_mobile_urls' => 'additionalAdvancedMobileUrls',
        'additional_advanced_urls' => 'additionalAdvancedUrls',
        'advanced_mobile_url' => 'advancedMobileUrl',
        'advanced_url' => 'advancedUrl',
        'approval_status' => 'approvalStatus',
        'bid' => 'bid',
        'custom_parameters' => 'customParameters',
        'destination_url' => 'destinationUrl',
        'disapproval_reason_codes' => 'disapprovalReasonCodes',
        'review_advanced_mobile_url' => 'reviewAdvancedMobileUrl',
        'review_advanced_url' => 'reviewAdvancedUrl',
        'review_custom_parameters' => 'reviewCustomParameters',
        'review_destination_url' => 'reviewDestinationUrl',
        'review_tracking_url' => 'reviewTrackingUrl',
        'tracking_url' => 'trackingUrl',
        'user_status' => 'userStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_advanced_mobile_urls' => 'setAdditionalAdvancedMobileUrls',
        'additional_advanced_urls' => 'setAdditionalAdvancedUrls',
        'advanced_mobile_url' => 'setAdvancedMobileUrl',
        'advanced_url' => 'setAdvancedUrl',
        'approval_status' => 'setApprovalStatus',
        'bid' => 'setBid',
        'custom_parameters' => 'setCustomParameters',
        'destination_url' => 'setDestinationUrl',
        'disapproval_reason_codes' => 'setDisapprovalReasonCodes',
        'review_advanced_mobile_url' => 'setReviewAdvancedMobileUrl',
        'review_advanced_url' => 'setReviewAdvancedUrl',
        'review_custom_parameters' => 'setReviewCustomParameters',
        'review_destination_url' => 'setReviewDestinationUrl',
        'review_tracking_url' => 'setReviewTrackingUrl',
        'tracking_url' => 'setTrackingUrl',
        'user_status' => 'setUserStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_advanced_mobile_urls' => 'getAdditionalAdvancedMobileUrls',
        'additional_advanced_urls' => 'getAdditionalAdvancedUrls',
        'advanced_mobile_url' => 'getAdvancedMobileUrl',
        'advanced_url' => 'getAdvancedUrl',
        'approval_status' => 'getApprovalStatus',
        'bid' => 'getBid',
        'custom_parameters' => 'getCustomParameters',
        'destination_url' => 'getDestinationUrl',
        'disapproval_reason_codes' => 'getDisapprovalReasonCodes',
        'review_advanced_mobile_url' => 'getReviewAdvancedMobileUrl',
        'review_advanced_url' => 'getReviewAdvancedUrl',
        'review_custom_parameters' => 'getReviewCustomParameters',
        'review_destination_url' => 'getReviewDestinationUrl',
        'review_tracking_url' => 'getReviewTrackingUrl',
        'tracking_url' => 'getTrackingUrl',
        'user_status' => 'getUserStatus'
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
        $this->container['additional_advanced_mobile_urls'] = isset($data['additional_advanced_mobile_urls']) ? $data['additional_advanced_mobile_urls'] : null;
        $this->container['additional_advanced_urls'] = isset($data['additional_advanced_urls']) ? $data['additional_advanced_urls'] : null;
        $this->container['advanced_mobile_url'] = isset($data['advanced_mobile_url']) ? $data['advanced_mobile_url'] : null;
        $this->container['advanced_url'] = isset($data['advanced_url']) ? $data['advanced_url'] : null;
        $this->container['approval_status'] = isset($data['approval_status']) ? $data['approval_status'] : null;
        $this->container['bid'] = isset($data['bid']) ? $data['bid'] : null;
        $this->container['custom_parameters'] = isset($data['custom_parameters']) ? $data['custom_parameters'] : null;
        $this->container['destination_url'] = isset($data['destination_url']) ? $data['destination_url'] : null;
        $this->container['disapproval_reason_codes'] = isset($data['disapproval_reason_codes']) ? $data['disapproval_reason_codes'] : null;
        $this->container['review_advanced_mobile_url'] = isset($data['review_advanced_mobile_url']) ? $data['review_advanced_mobile_url'] : null;
        $this->container['review_advanced_url'] = isset($data['review_advanced_url']) ? $data['review_advanced_url'] : null;
        $this->container['review_custom_parameters'] = isset($data['review_custom_parameters']) ? $data['review_custom_parameters'] : null;
        $this->container['review_destination_url'] = isset($data['review_destination_url']) ? $data['review_destination_url'] : null;
        $this->container['review_tracking_url'] = isset($data['review_tracking_url']) ? $data['review_tracking_url'] : null;
        $this->container['tracking_url'] = isset($data['tracking_url']) ? $data['tracking_url'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
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
     * Gets additional_advanced_mobile_urls
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceAdditionalAdvancedMobileUrls|null
     */
    public function getAdditionalAdvancedMobileUrls()
    {
        return $this->container['additional_advanced_mobile_urls'];
    }

    /**
     * Sets additional_advanced_mobile_urls
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceAdditionalAdvancedMobileUrls|null $additional_advanced_mobile_urls additional_advanced_mobile_urls
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
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceAdditionalAdvancedUrls|null
     */
    public function getAdditionalAdvancedUrls()
    {
        return $this->container['additional_advanced_urls'];
    }

    /**
     * Sets additional_advanced_urls
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceAdditionalAdvancedUrls|null $additional_advanced_urls additional_advanced_urls
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
     * @param string|null $advanced_mobile_url <ja>カスタムURL（スマートフォン）です。<br>※空で設定すると、既存のカスタムURL （スマートフォン）は削除されます。</ja><br><en>Upgraded Custom URL (Smartphone).<br>*When tag is set blank, existing upgraded Custom URL (Smartphone) will be deleted.</en>
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
     * @param string|null $advanced_url <ja>移行後のカスタムURLです。<br>※空で設定すると、既存の移行後の カスタムURLは削除されます。</ja><br><en>Upgraded Custom URL.<br>*When this is set blank, existing upgraded Custom URL will be deleted.</en>
     *
     * @return $this
     */
    public function setAdvancedUrl($advanced_url)
    {
        $this->container['advanced_url'] = $advanced_url;

        return $this;
    }

    /**
     * Gets approval_status
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceApprovalStatus|null $approval_status approval_status
     *
     * @return $this
     */
    public function setApprovalStatus($approval_status)
    {
        $this->container['approval_status'] = $approval_status;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceBid|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceBid|null $bid bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets custom_parameters
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceCustomParameters|null
     */
    public function getCustomParameters()
    {
        return $this->container['custom_parameters'];
    }

    /**
     * Sets custom_parameters
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceCustomParameters|null $custom_parameters custom_parameters
     *
     * @return $this
     */
    public function setCustomParameters($custom_parameters)
    {
        $this->container['custom_parameters'] = $custom_parameters;

        return $this;
    }

    /**
     * Gets destination_url
     *
     * @return string|null
     */
    public function getDestinationUrl()
    {
        return $this->container['destination_url'];
    }

    /**
     * Sets destination_url
     *
     * @param string|null $destination_url <ja>移行前のカスタムURLです。<br>※空で設定すると、既存の移行前の カスタムURLは削除されます。</ja><br><en>Custom URL of before upgrading.<br>*When tag is set blank, existing Custom URL before upgrade will be deleted.</en>
     *
     * @return $this
     */
    public function setDestinationUrl($destination_url)
    {
        $this->container['destination_url'] = $destination_url;

        return $this;
    }

    /**
     * Gets disapproval_reason_codes
     *
     * @return string[]|null
     */
    public function getDisapprovalReasonCodes()
    {
        return $this->container['disapproval_reason_codes'];
    }

    /**
     * Sets disapproval_reason_codes
     *
     * @param string[]|null $disapproval_reason_codes <ja>審査否認コードです。<br>(コード詳細は、DictionaryServiceのgetDisapprovalReasonのレスポンスを参照)</ja><br><en>Code of Disapproval reason.<br>(Refer to DictionaryService getDisapprovalReason response for details)</en>
     *
     * @return $this
     */
    public function setDisapprovalReasonCodes($disapproval_reason_codes)
    {
        $this->container['disapproval_reason_codes'] = $disapproval_reason_codes;

        return $this;
    }

    /**
     * Gets review_advanced_mobile_url
     *
     * @return string|null
     */
    public function getReviewAdvancedMobileUrl()
    {
        return $this->container['review_advanced_mobile_url'];
    }

    /**
     * Sets review_advanced_mobile_url
     *
     * @param string|null $review_advanced_mobile_url <ja>配信審査中のカスタムURL（スマートフォン）です。</ja><br><en>Upgraded Custom URL (Smartphone), in review.</en>
     *
     * @return $this
     */
    public function setReviewAdvancedMobileUrl($review_advanced_mobile_url)
    {
        $this->container['review_advanced_mobile_url'] = $review_advanced_mobile_url;

        return $this;
    }

    /**
     * Gets review_advanced_url
     *
     * @return string|null
     */
    public function getReviewAdvancedUrl()
    {
        return $this->container['review_advanced_url'];
    }

    /**
     * Sets review_advanced_url
     *
     * @param string|null $review_advanced_url <ja>移行後の配信審査中のカスタムURLです。</ja><br><en>Upgraded Custom URL, in review.</en>
     *
     * @return $this
     */
    public function setReviewAdvancedUrl($review_advanced_url)
    {
        $this->container['review_advanced_url'] = $review_advanced_url;

        return $this;
    }

    /**
     * Gets review_custom_parameters
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceCustomParameters|null
     */
    public function getReviewCustomParameters()
    {
        return $this->container['review_custom_parameters'];
    }

    /**
     * Sets review_custom_parameters
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceCustomParameters|null $review_custom_parameters review_custom_parameters
     *
     * @return $this
     */
    public function setReviewCustomParameters($review_custom_parameters)
    {
        $this->container['review_custom_parameters'] = $review_custom_parameters;

        return $this;
    }

    /**
     * Gets review_destination_url
     *
     * @return string|null
     */
    public function getReviewDestinationUrl()
    {
        return $this->container['review_destination_url'];
    }

    /**
     * Sets review_destination_url
     *
     * @param string|null $review_destination_url <ja>移行前の配信審査中のカスタムURLです。</ja><br><en>Custom URL of before upgrading, in review.</en>
     *
     * @return $this
     */
    public function setReviewDestinationUrl($review_destination_url)
    {
        $this->container['review_destination_url'] = $review_destination_url;

        return $this;
    }

    /**
     * Gets review_tracking_url
     *
     * @return string|null
     */
    public function getReviewTrackingUrl()
    {
        return $this->container['review_tracking_url'];
    }

    /**
     * Sets review_tracking_url
     *
     * @param string|null $review_tracking_url <ja>配信審査中のトラッキングURLです。</ja><br><en>Tracking URL, in review.</en>
     *
     * @return $this
     */
    public function setReviewTrackingUrl($review_tracking_url)
    {
        $this->container['review_tracking_url'] = $review_tracking_url;

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
     * @param string|null $tracking_url <ja>トラッキングURLです。<br>※空で設定すると、既存のトラッキングURLは 削除されます。</ja><br><en>Tracking URL.<br>*When tag is set blank, existing Tracking URL will be deleted.</en>
     *
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceUserStatus|null
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceUserStatus|null $user_status user_status
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

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


