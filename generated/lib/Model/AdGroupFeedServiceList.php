<?php
/**
 * AdGroupFeedServiceList
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
 * AdGroupFeedServiceList Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupFeedServiceListオブジェクトは、広告グループに関連付けられたFeedItem情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupFeedServiceList object describes the FeedItem information connected to ad group.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adGroupFeed&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adGroupId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;campaignId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;placeholderType&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupFeedServiceList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupFeedServiceList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'ad_group_feed' => '\YahooAdsSearchApi\Client\Model\AdGroupFeed[]',
        'ad_group_id' => 'int',
        'campaign_id' => 'int',
        'placeholder_type' => '\YahooAdsSearchApi\Client\Model\AdGroupFeedServicePlaceholderType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'ad_group_feed' => null,
        'ad_group_id' => 'int64',
        'campaign_id' => 'int64',
        'placeholder_type' => null
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
        'account_id' => 'accountId',
        'ad_group_feed' => 'adGroupFeed',
        'ad_group_id' => 'adGroupId',
        'campaign_id' => 'campaignId',
        'placeholder_type' => 'placeholderType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'ad_group_feed' => 'setAdGroupFeed',
        'ad_group_id' => 'setAdGroupId',
        'campaign_id' => 'setCampaignId',
        'placeholder_type' => 'setPlaceholderType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'ad_group_feed' => 'getAdGroupFeed',
        'ad_group_id' => 'getAdGroupId',
        'campaign_id' => 'getCampaignId',
        'placeholder_type' => 'getPlaceholderType'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['ad_group_feed'] = isset($data['ad_group_feed']) ? $data['ad_group_feed'] : null;
        $this->container['ad_group_id'] = isset($data['ad_group_id']) ? $data['ad_group_id'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['placeholder_type'] = isset($data['placeholder_type']) ? $data['placeholder_type'] : null;
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
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id <ja>アカウントIDです。</ja><br><en>Account ID.</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets ad_group_feed
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupFeed[]|null
     */
    public function getAdGroupFeed()
    {
        return $this->container['ad_group_feed'];
    }

    /**
     * Sets ad_group_feed
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupFeed[]|null $ad_group_feed ad_group_feed
     *
     * @return $this
     */
    public function setAdGroupFeed($ad_group_feed)
    {
        $this->container['ad_group_feed'] = $ad_group_feed;

        return $this;
    }

    /**
     * Gets ad_group_id
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->container['ad_group_id'];
    }

    /**
     * Sets ad_group_id
     *
     * @param int|null $ad_group_id <ja>広告グループIDです。</ja><br><en>Ad Group ID.</en>
     *
     * @return $this
     */
    public function setAdGroupId($ad_group_id)
    {
        $this->container['ad_group_id'] = $ad_group_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id <ja>キャンペーンIDです。</ja><br><en>Campaign ID.</en>
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets placeholder_type
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupFeedServicePlaceholderType|null
     */
    public function getPlaceholderType()
    {
        return $this->container['placeholder_type'];
    }

    /**
     * Sets placeholder_type
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupFeedServicePlaceholderType|null $placeholder_type placeholder_type
     *
     * @return $this
     */
    public function setPlaceholderType($placeholder_type)
    {
        $this->container['placeholder_type'] = $placeholder_type;

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


