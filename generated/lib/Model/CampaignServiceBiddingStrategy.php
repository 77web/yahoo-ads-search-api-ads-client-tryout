<?php
/**
 * CampaignServiceBiddingStrategy
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
 * CampaignServiceBiddingStrategy Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;CampaignServiceBiddingStrategyオブジェクトは、自動入札設定方法を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CampaignServiceBiddingStrategy object describes Auto Bidding setting.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;biddingScheme&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;biddingStrategyId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;biddingStrategyName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;biddingStrategySource&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;biddingStrategyType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceBiddingStrategy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignServiceBiddingStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bidding_scheme' => '\YahooAdsSearchApi\Client\Model\CampaignServiceBiddingScheme',
        'bidding_strategy_id' => 'int',
        'bidding_strategy_name' => 'string',
        'bidding_strategy_source' => '\YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategySource',
        'bidding_strategy_type' => '\YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bidding_scheme' => null,
        'bidding_strategy_id' => 'int64',
        'bidding_strategy_name' => null,
        'bidding_strategy_source' => null,
        'bidding_strategy_type' => null
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
        'bidding_scheme' => 'biddingScheme',
        'bidding_strategy_id' => 'biddingStrategyId',
        'bidding_strategy_name' => 'biddingStrategyName',
        'bidding_strategy_source' => 'biddingStrategySource',
        'bidding_strategy_type' => 'biddingStrategyType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bidding_scheme' => 'setBiddingScheme',
        'bidding_strategy_id' => 'setBiddingStrategyId',
        'bidding_strategy_name' => 'setBiddingStrategyName',
        'bidding_strategy_source' => 'setBiddingStrategySource',
        'bidding_strategy_type' => 'setBiddingStrategyType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bidding_scheme' => 'getBiddingScheme',
        'bidding_strategy_id' => 'getBiddingStrategyId',
        'bidding_strategy_name' => 'getBiddingStrategyName',
        'bidding_strategy_source' => 'getBiddingStrategySource',
        'bidding_strategy_type' => 'getBiddingStrategyType'
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
        $this->container['bidding_scheme'] = isset($data['bidding_scheme']) ? $data['bidding_scheme'] : null;
        $this->container['bidding_strategy_id'] = isset($data['bidding_strategy_id']) ? $data['bidding_strategy_id'] : null;
        $this->container['bidding_strategy_name'] = isset($data['bidding_strategy_name']) ? $data['bidding_strategy_name'] : null;
        $this->container['bidding_strategy_source'] = isset($data['bidding_strategy_source']) ? $data['bidding_strategy_source'] : null;
        $this->container['bidding_strategy_type'] = isset($data['bidding_strategy_type']) ? $data['bidding_strategy_type'] : null;
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
     * Gets bidding_scheme
     *
     * @return \YahooAdsSearchApi\Client\Model\CampaignServiceBiddingScheme|null
     */
    public function getBiddingScheme()
    {
        return $this->container['bidding_scheme'];
    }

    /**
     * Sets bidding_scheme
     *
     * @param \YahooAdsSearchApi\Client\Model\CampaignServiceBiddingScheme|null $bidding_scheme bidding_scheme
     *
     * @return $this
     */
    public function setBiddingScheme($bidding_scheme)
    {
        $this->container['bidding_scheme'] = $bidding_scheme;

        return $this;
    }

    /**
     * Gets bidding_strategy_id
     *
     * @return int|null
     */
    public function getBiddingStrategyId()
    {
        return $this->container['bidding_strategy_id'];
    }

    /**
     * Sets bidding_strategy_id
     *
     * @param int|null $bidding_strategy_id <ja>自動入札ID</ja><br><en>Auto Bidding ID</en>
     *
     * @return $this
     */
    public function setBiddingStrategyId($bidding_strategy_id)
    {
        $this->container['bidding_strategy_id'] = $bidding_strategy_id;

        return $this;
    }

    /**
     * Gets bidding_strategy_name
     *
     * @return string|null
     */
    public function getBiddingStrategyName()
    {
        return $this->container['bidding_strategy_name'];
    }

    /**
     * Sets bidding_strategy_name
     *
     * @param string|null $bidding_strategy_name <ja>自動入札名<br>※50文字以内になります。</ja><br><en>Auto Bidding name.<br>* Up to 50 characters.</en>
     *
     * @return $this
     */
    public function setBiddingStrategyName($bidding_strategy_name)
    {
        $this->container['bidding_strategy_name'] = $bidding_strategy_name;

        return $this;
    }

    /**
     * Gets bidding_strategy_source
     *
     * @return \YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategySource|null
     */
    public function getBiddingStrategySource()
    {
        return $this->container['bidding_strategy_source'];
    }

    /**
     * Sets bidding_strategy_source
     *
     * @param \YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategySource|null $bidding_strategy_source bidding_strategy_source
     *
     * @return $this
     */
    public function setBiddingStrategySource($bidding_strategy_source)
    {
        $this->container['bidding_strategy_source'] = $bidding_strategy_source;

        return $this;
    }

    /**
     * Gets bidding_strategy_type
     *
     * @return \YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategyType|null
     */
    public function getBiddingStrategyType()
    {
        return $this->container['bidding_strategy_type'];
    }

    /**
     * Sets bidding_strategy_type
     *
     * @param \YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategyType|null $bidding_strategy_type bidding_strategy_type
     *
     * @return $this
     */
    public function setBiddingStrategyType($bidding_strategy_type)
    {
        $this->container['bidding_strategy_type'] = $bidding_strategy_type;

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


