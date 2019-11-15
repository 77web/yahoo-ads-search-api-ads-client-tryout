<?php
/**
 * AdGroupWebpageServiceWebpageCondition
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
 * AdGroupWebpageServiceWebpageCondition Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupWebpageServiceWebpageConditionオブジェクトは、Webpageの条件を保持します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupWebpageServiceWebpageCondition object contains the rules of webpage.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;argument&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;ja&gt;※typeがALL_PAGESの場合はOptional&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If type is ALL_PAGES, Optional&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;webpageConditionType&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupWebpageServiceWebpageCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupWebpageServiceWebpageCondition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'argument' => 'string',
        'webpage_condition_type' => '\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceWebpageConditionType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'argument' => null,
        'webpage_condition_type' => null
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
        'argument' => 'argument',
        'webpage_condition_type' => 'webpageConditionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'argument' => 'setArgument',
        'webpage_condition_type' => 'setWebpageConditionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'argument' => 'getArgument',
        'webpage_condition_type' => 'getWebpageConditionType'
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
        $this->container['argument'] = isset($data['argument']) ? $data['argument'] : null;
        $this->container['webpage_condition_type'] = isset($data['webpage_condition_type']) ? $data['webpage_condition_type'] : null;
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
     * Gets argument
     *
     * @return string|null
     */
    public function getArgument()
    {
        return $this->container['argument'];
    }

    /**
     * Sets argument
     *
     * @param string|null $argument <ja>条件の設定値(正規表現の指定可)</ja><br><en>Value of rule setting (Can specify regular expression)</en>
     *
     * @return $this
     */
    public function setArgument($argument)
    {
        $this->container['argument'] = $argument;

        return $this;
    }

    /**
     * Gets webpage_condition_type
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceWebpageConditionType|null
     */
    public function getWebpageConditionType()
    {
        return $this->container['webpage_condition_type'];
    }

    /**
     * Sets webpage_condition_type
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceWebpageConditionType|null $webpage_condition_type webpage_condition_type
     *
     * @return $this
     */
    public function setWebpageConditionType($webpage_condition_type)
    {
        $this->container['webpage_condition_type'] = $webpage_condition_type;

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


