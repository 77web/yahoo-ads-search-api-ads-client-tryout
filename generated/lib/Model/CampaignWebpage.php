<?php
/**
 * CampaignWebpage
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
 * CampaignWebpage Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;CampaignWebpageオブジェクトは、キャンペーンに関連付けた除外設定の情報を保持します&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CampaignWebpage object contains information of excluded settings setup to campaign.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;campaignId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;campaignTrackId&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;webpage&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignWebpage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignWebpage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'campaign_id' => 'int',
        'campaign_track_id' => 'int',
        'webpage' => '\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceWebpage'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'campaign_id' => 'int64',
        'campaign_track_id' => 'int64',
        'webpage' => null
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
        'campaign_id' => 'campaignId',
        'campaign_track_id' => 'campaignTrackId',
        'webpage' => 'webpage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'campaign_id' => 'setCampaignId',
        'campaign_track_id' => 'setCampaignTrackId',
        'webpage' => 'setWebpage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'campaign_id' => 'getCampaignId',
        'campaign_track_id' => 'getCampaignTrackId',
        'webpage' => 'getWebpage'
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
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['campaign_track_id'] = isset($data['campaign_track_id']) ? $data['campaign_track_id'] : null;
        $this->container['webpage'] = isset($data['webpage']) ? $data['webpage'] : null;
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
     * @param int|null $account_id <ja>アカウントID</ja><br><en>Account ID</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param int|null $campaign_id <ja>キャンペーンID</ja><br><en>Campaign ID</en>
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_track_id
     *
     * @return int|null
     */
    public function getCampaignTrackId()
    {
        return $this->container['campaign_track_id'];
    }

    /**
     * Sets campaign_track_id
     *
     * @param int|null $campaign_track_id <ja>キャンペーントラッキングID</ja><br><en>Campaign Tracking ID</en>
     *
     * @return $this
     */
    public function setCampaignTrackId($campaign_track_id)
    {
        $this->container['campaign_track_id'] = $campaign_track_id;

        return $this;
    }

    /**
     * Gets webpage
     *
     * @return \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceWebpage|null
     */
    public function getWebpage()
    {
        return $this->container['webpage'];
    }

    /**
     * Sets webpage
     *
     * @param \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceWebpage|null $webpage webpage
     *
     * @return $this
     */
    public function setWebpage($webpage)
    {
        $this->container['webpage'] = $webpage;

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


