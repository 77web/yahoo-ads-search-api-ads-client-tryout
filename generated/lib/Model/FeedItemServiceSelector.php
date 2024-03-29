<?php
/**
 * FeedItemServiceSelector
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
 * FeedItemServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;FeedItemServiceSelectorオブジェクトは、フィードアイテムの情報を指定します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;FeedItemServiceSelector describes the Feed item information.&lt;/en&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedItemServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedItemServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'approval_statuses' => '\YahooAdsSearchApi\Client\Model\FeedItemServiceApprovalStatus[]',
        'feed_ids' => 'int[]',
        'feed_item_ids' => 'int[]',
        'number_results' => 'int',
        'placeholder_types' => '\YahooAdsSearchApi\Client\Model\FeedItemServicePlaceholderType[]',
        'start_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'approval_statuses' => null,
        'feed_ids' => 'int64',
        'feed_item_ids' => 'int64',
        'number_results' => 'int32',
        'placeholder_types' => null,
        'start_index' => 'int32'
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
        'approval_statuses' => 'approvalStatuses',
        'feed_ids' => 'feedIds',
        'feed_item_ids' => 'feedItemIds',
        'number_results' => 'numberResults',
        'placeholder_types' => 'placeholderTypes',
        'start_index' => 'startIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'approval_statuses' => 'setApprovalStatuses',
        'feed_ids' => 'setFeedIds',
        'feed_item_ids' => 'setFeedItemIds',
        'number_results' => 'setNumberResults',
        'placeholder_types' => 'setPlaceholderTypes',
        'start_index' => 'setStartIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'approval_statuses' => 'getApprovalStatuses',
        'feed_ids' => 'getFeedIds',
        'feed_item_ids' => 'getFeedItemIds',
        'number_results' => 'getNumberResults',
        'placeholder_types' => 'getPlaceholderTypes',
        'start_index' => 'getStartIndex'
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
        $this->container['approval_statuses'] = isset($data['approval_statuses']) ? $data['approval_statuses'] : null;
        $this->container['feed_ids'] = isset($data['feed_ids']) ? $data['feed_ids'] : null;
        $this->container['feed_item_ids'] = isset($data['feed_item_ids']) ? $data['feed_item_ids'] : null;
        $this->container['number_results'] = isset($data['number_results']) ? $data['number_results'] : 500;
        $this->container['placeholder_types'] = isset($data['placeholder_types']) ? $data['placeholder_types'] : null;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : 1;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 2000)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['number_results']) && ($this->container['number_results'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_results', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_index']) && ($this->container['start_index'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_index', must be bigger than or equal to 1.";
        }

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
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id <ja>検索条件：アカウントIDです。</ja><br><en>Search condition: Account ID.</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets approval_statuses
     *
     * @return \YahooAdsSearchApi\Client\Model\FeedItemServiceApprovalStatus[]|null
     */
    public function getApprovalStatuses()
    {
        return $this->container['approval_statuses'];
    }

    /**
     * Sets approval_statuses
     *
     * @param \YahooAdsSearchApi\Client\Model\FeedItemServiceApprovalStatus[]|null $approval_statuses approval_statuses
     *
     * @return $this
     */
    public function setApprovalStatuses($approval_statuses)
    {
        $this->container['approval_statuses'] = $approval_statuses;

        return $this;
    }

    /**
     * Gets feed_ids
     *
     * @return int[]|null
     */
    public function getFeedIds()
    {
        return $this->container['feed_ids'];
    }

    /**
     * Sets feed_ids
     *
     * @param int[]|null $feed_ids <ja>検索条件：フィードIDです。</ja><br><en>Search condition: Feed ID.</en>
     *
     * @return $this
     */
    public function setFeedIds($feed_ids)
    {
        $this->container['feed_ids'] = $feed_ids;

        return $this;
    }

    /**
     * Gets feed_item_ids
     *
     * @return int[]|null
     */
    public function getFeedItemIds()
    {
        return $this->container['feed_item_ids'];
    }

    /**
     * Sets feed_item_ids
     *
     * @param int[]|null $feed_item_ids <ja>検索条件：フィードアイテムIDです。</ja><br><en>Search condition: Feed Item ID.</en>
     *
     * @return $this
     */
    public function setFeedItemIds($feed_item_ids)
    {
        $this->container['feed_item_ids'] = $feed_item_ids;

        return $this;
    }

    /**
     * Gets number_results
     *
     * @return int|null
     */
    public function getNumberResults()
    {
        return $this->container['number_results'];
    }

    /**
     * Sets number_results
     *
     * @param int|null $number_results ページの最大件数です。このフィールドは、1以上を指定する必要があります。<br>Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation.
     *
     * @return $this
     */
    public function setNumberResults($number_results)
    {

        if (!is_null($number_results) && ($number_results > 2000)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling FeedItemServiceSelector., must be smaller than or equal to 2000.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling FeedItemServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['number_results'] = $number_results;

        return $this;
    }

    /**
     * Gets placeholder_types
     *
     * @return \YahooAdsSearchApi\Client\Model\FeedItemServicePlaceholderType[]|null
     */
    public function getPlaceholderTypes()
    {
        return $this->container['placeholder_types'];
    }

    /**
     * Sets placeholder_types
     *
     * @param \YahooAdsSearchApi\Client\Model\FeedItemServicePlaceholderType[]|null $placeholder_types placeholder_types
     *
     * @return $this
     */
    public function setPlaceholderTypes($placeholder_types)
    {
        $this->container['placeholder_types'] = $placeholder_types;

        return $this;
    }

    /**
     * Gets start_index
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int|null $start_index ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。<br>Index of the first result to return in this page. This field must be greater than or equal to 1.
     *
     * @return $this
     */
    public function setStartIndex($start_index)
    {

        if (!is_null($start_index) && ($start_index < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_index when calling FeedItemServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

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


