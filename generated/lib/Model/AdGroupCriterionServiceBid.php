<?php
/**
 * AdGroupCriterionServiceBid
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
 * AdGroupCriterionServiceBid Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupCriterionServiceBidオブジェクトは、入札価格を表示します。 （AdGroupCriterionService用のオブジェクトです。）&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupCriterionServiceBid object displays the bid values.s&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adGroupMaxCpc&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;bidSource&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;keywordMaxCpc&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;maxCpc&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;※Default: 1&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupCriterionServiceBid implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupCriterionServiceBid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ad_group_max_cpc' => 'int',
        'bid_source' => '\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceBidSource',
        'keyword_max_cpc' => 'int',
        'max_cpc' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ad_group_max_cpc' => 'int64',
        'bid_source' => null,
        'keyword_max_cpc' => 'int64',
        'max_cpc' => 'int64'
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
        'ad_group_max_cpc' => 'adGroupMaxCpc',
        'bid_source' => 'bidSource',
        'keyword_max_cpc' => 'keywordMaxCpc',
        'max_cpc' => 'maxCpc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ad_group_max_cpc' => 'setAdGroupMaxCpc',
        'bid_source' => 'setBidSource',
        'keyword_max_cpc' => 'setKeywordMaxCpc',
        'max_cpc' => 'setMaxCpc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ad_group_max_cpc' => 'getAdGroupMaxCpc',
        'bid_source' => 'getBidSource',
        'keyword_max_cpc' => 'getKeywordMaxCpc',
        'max_cpc' => 'getMaxCpc'
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
        $this->container['ad_group_max_cpc'] = isset($data['ad_group_max_cpc']) ? $data['ad_group_max_cpc'] : null;
        $this->container['bid_source'] = isset($data['bid_source']) ? $data['bid_source'] : null;
        $this->container['keyword_max_cpc'] = isset($data['keyword_max_cpc']) ? $data['keyword_max_cpc'] : null;
        $this->container['max_cpc'] = isset($data['max_cpc']) ? $data['max_cpc'] : null;
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
     * Gets ad_group_max_cpc
     *
     * @return int|null
     */
    public function getAdGroupMaxCpc()
    {
        return $this->container['ad_group_max_cpc'];
    }

    /**
     * Sets ad_group_max_cpc
     *
     * @param int|null $ad_group_max_cpc <ja>広告グループ入札価格です。</ja><br><en>CPC of Ad group.</en>
     *
     * @return $this
     */
    public function setAdGroupMaxCpc($ad_group_max_cpc)
    {
        $this->container['ad_group_max_cpc'] = $ad_group_max_cpc;

        return $this;
    }

    /**
     * Gets bid_source
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceBidSource|null
     */
    public function getBidSource()
    {
        return $this->container['bid_source'];
    }

    /**
     * Sets bid_source
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceBidSource|null $bid_source bid_source
     *
     * @return $this
     */
    public function setBidSource($bid_source)
    {
        $this->container['bid_source'] = $bid_source;

        return $this;
    }

    /**
     * Gets keyword_max_cpc
     *
     * @return int|null
     */
    public function getKeywordMaxCpc()
    {
        return $this->container['keyword_max_cpc'];
    }

    /**
     * Sets keyword_max_cpc
     *
     * @param int|null $keyword_max_cpc <ja>キーワード入札価格です。</ja><br><en>CPC of Keyword.</en>
     *
     * @return $this
     */
    public function setKeywordMaxCpc($keyword_max_cpc)
    {
        $this->container['keyword_max_cpc'] = $keyword_max_cpc;

        return $this;
    }

    /**
     * Gets max_cpc
     *
     * @return int|null
     */
    public function getMaxCpc()
    {
        return $this->container['max_cpc'];
    }

    /**
     * Sets max_cpc
     *
     * @param int|null $max_cpc <ja>キーワード入札価格です。<br>※maxCpcが「0」の場合は、設定なしと同様です。</ja><br><en>Keyword CPC.<br>* Confirmed as no setting, if value is set &#34;0&#34;.</en>
     *
     * @return $this
     */
    public function setMaxCpc($max_cpc)
    {
        $this->container['max_cpc'] = $max_cpc;

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


