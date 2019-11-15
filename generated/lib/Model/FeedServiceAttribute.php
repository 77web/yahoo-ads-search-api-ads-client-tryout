<?php
/**
 * FeedServiceAttribute
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
 * FeedServiceAttribute Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;FeedServiceAttributeオブジェクトは、自動データ挿入のリストの属性を格納します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;FeedServiceAttribute object contains the attribute of auto data insertion list.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;feedAttributeId&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;feedAttributeName&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;placeholderField&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedServiceAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedServiceAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'feed_attribute_id' => 'int',
        'feed_attribute_name' => 'string',
        'placeholder_field' => '\YahooAdsSearchApi\Client\Model\FeedServicePlaceholderField'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'feed_attribute_id' => 'int64',
        'feed_attribute_name' => null,
        'placeholder_field' => null
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
        'feed_attribute_id' => 'feedAttributeId',
        'feed_attribute_name' => 'feedAttributeName',
        'placeholder_field' => 'placeholderField'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_attribute_id' => 'setFeedAttributeId',
        'feed_attribute_name' => 'setFeedAttributeName',
        'placeholder_field' => 'setPlaceholderField'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_attribute_id' => 'getFeedAttributeId',
        'feed_attribute_name' => 'getFeedAttributeName',
        'placeholder_field' => 'getPlaceholderField'
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
        $this->container['feed_attribute_id'] = isset($data['feed_attribute_id']) ? $data['feed_attribute_id'] : null;
        $this->container['feed_attribute_name'] = isset($data['feed_attribute_name']) ? $data['feed_attribute_name'] : null;
        $this->container['placeholder_field'] = isset($data['placeholder_field']) ? $data['placeholder_field'] : null;
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
     * Gets feed_attribute_id
     *
     * @return int|null
     */
    public function getFeedAttributeId()
    {
        return $this->container['feed_attribute_id'];
    }

    /**
     * Sets feed_attribute_id
     *
     * @param int|null $feed_attribute_id <ja>自動データ挿入のリストの属性（カラム）IDです。</ja><br><en>Attribute ID (column ID) of auto data insertion list.</en>
     *
     * @return $this
     */
    public function setFeedAttributeId($feed_attribute_id)
    {
        $this->container['feed_attribute_id'] = $feed_attribute_id;

        return $this;
    }

    /**
     * Gets feed_attribute_name
     *
     * @return string|null
     */
    public function getFeedAttributeName()
    {
        return $this->container['feed_attribute_name'];
    }

    /**
     * Sets feed_attribute_name
     *
     * @param string|null $feed_attribute_name <ja>自動データ挿入のリストの属性（カラム）名です。</ja><br><en>Attribute name (column name) of auto data insertion list.</en>
     *
     * @return $this
     */
    public function setFeedAttributeName($feed_attribute_name)
    {
        $this->container['feed_attribute_name'] = $feed_attribute_name;

        return $this;
    }

    /**
     * Gets placeholder_field
     *
     * @return \YahooAdsSearchApi\Client\Model\FeedServicePlaceholderField|null
     */
    public function getPlaceholderField()
    {
        return $this->container['placeholder_field'];
    }

    /**
     * Sets placeholder_field
     *
     * @param \YahooAdsSearchApi\Client\Model\FeedServicePlaceholderField|null $placeholder_field placeholder_field
     *
     * @return $this
     */
    public function setPlaceholderField($placeholder_field)
    {
        $this->container['placeholder_field'] = $placeholder_field;

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


