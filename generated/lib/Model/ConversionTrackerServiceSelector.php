<?php
/**
 * ConversionTrackerServiceSelector
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
 * ConversionTrackerServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;ConversionTrackerServiceSelectorオブジェクトは、操作の対象となるコンバージョントラッカーおよび操作を指定します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTrackerServiceSelector object specifies ConversionTracker and operation.&lt;/en&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTrackerServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTrackerServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'app_ids' => 'string[]',
        'categories' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory[]',
        'conversion_counting_types' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType[]',
        'conversion_date_range' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionDateRange',
        'conversion_tracker_ids' => 'int[]',
        'conversion_tracker_types' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType[]',
        'exclude_from_biddings' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding[]',
        'number_results' => 'int',
        'start_index' => 'int',
        'statuses' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus[]',
        'tracking_code_types' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceTrackingCodeType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'app_ids' => null,
        'categories' => null,
        'conversion_counting_types' => null,
        'conversion_date_range' => null,
        'conversion_tracker_ids' => 'int64',
        'conversion_tracker_types' => null,
        'exclude_from_biddings' => null,
        'number_results' => 'int32',
        'start_index' => 'int32',
        'statuses' => null,
        'tracking_code_types' => null
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
        'app_ids' => 'appIds',
        'categories' => 'categories',
        'conversion_counting_types' => 'conversionCountingTypes',
        'conversion_date_range' => 'conversionDateRange',
        'conversion_tracker_ids' => 'conversionTrackerIds',
        'conversion_tracker_types' => 'conversionTrackerTypes',
        'exclude_from_biddings' => 'excludeFromBiddings',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex',
        'statuses' => 'statuses',
        'tracking_code_types' => 'trackingCodeTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'app_ids' => 'setAppIds',
        'categories' => 'setCategories',
        'conversion_counting_types' => 'setConversionCountingTypes',
        'conversion_date_range' => 'setConversionDateRange',
        'conversion_tracker_ids' => 'setConversionTrackerIds',
        'conversion_tracker_types' => 'setConversionTrackerTypes',
        'exclude_from_biddings' => 'setExcludeFromBiddings',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex',
        'statuses' => 'setStatuses',
        'tracking_code_types' => 'setTrackingCodeTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'app_ids' => 'getAppIds',
        'categories' => 'getCategories',
        'conversion_counting_types' => 'getConversionCountingTypes',
        'conversion_date_range' => 'getConversionDateRange',
        'conversion_tracker_ids' => 'getConversionTrackerIds',
        'conversion_tracker_types' => 'getConversionTrackerTypes',
        'exclude_from_biddings' => 'getExcludeFromBiddings',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex',
        'statuses' => 'getStatuses',
        'tracking_code_types' => 'getTrackingCodeTypes'
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
        $this->container['app_ids'] = isset($data['app_ids']) ? $data['app_ids'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['conversion_counting_types'] = isset($data['conversion_counting_types']) ? $data['conversion_counting_types'] : null;
        $this->container['conversion_date_range'] = isset($data['conversion_date_range']) ? $data['conversion_date_range'] : null;
        $this->container['conversion_tracker_ids'] = isset($data['conversion_tracker_ids']) ? $data['conversion_tracker_ids'] : null;
        $this->container['conversion_tracker_types'] = isset($data['conversion_tracker_types']) ? $data['conversion_tracker_types'] : null;
        $this->container['exclude_from_biddings'] = isset($data['exclude_from_biddings']) ? $data['exclude_from_biddings'] : null;
        $this->container['number_results'] = isset($data['number_results']) ? $data['number_results'] : 500;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : 1;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['tracking_code_types'] = isset($data['tracking_code_types']) ? $data['tracking_code_types'] : null;
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
        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 500)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 500.";
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
     * @param int $account_id <ja>アカウントIDです。</ja><br><en>Account ID.</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets app_ids
     *
     * @return string[]|null
     */
    public function getAppIds()
    {
        return $this->container['app_ids'];
    }

    /**
     * Sets app_ids
     *
     * @param string[]|null $app_ids <ja>アプリケーションIDです。</ja><br><en>App ID.</en>
     *
     * @return $this
     */
    public function setAppIds($app_ids)
    {
        $this->container['app_ids'] = $app_ids;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory[]|null $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets conversion_counting_types
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType[]|null
     */
    public function getConversionCountingTypes()
    {
        return $this->container['conversion_counting_types'];
    }

    /**
     * Sets conversion_counting_types
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType[]|null $conversion_counting_types conversion_counting_types
     *
     * @return $this
     */
    public function setConversionCountingTypes($conversion_counting_types)
    {
        $this->container['conversion_counting_types'] = $conversion_counting_types;

        return $this;
    }

    /**
     * Gets conversion_date_range
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionDateRange|null
     */
    public function getConversionDateRange()
    {
        return $this->container['conversion_date_range'];
    }

    /**
     * Sets conversion_date_range
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionDateRange|null $conversion_date_range conversion_date_range
     *
     * @return $this
     */
    public function setConversionDateRange($conversion_date_range)
    {
        $this->container['conversion_date_range'] = $conversion_date_range;

        return $this;
    }

    /**
     * Gets conversion_tracker_ids
     *
     * @return int[]|null
     */
    public function getConversionTrackerIds()
    {
        return $this->container['conversion_tracker_ids'];
    }

    /**
     * Sets conversion_tracker_ids
     *
     * @param int[]|null $conversion_tracker_ids <ja>コンバージョントラッカーIDです。</ja><br><en>Conversion Tracker ID.</en>
     *
     * @return $this
     */
    public function setConversionTrackerIds($conversion_tracker_ids)
    {
        $this->container['conversion_tracker_ids'] = $conversion_tracker_ids;

        return $this;
    }

    /**
     * Gets conversion_tracker_types
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType[]|null
     */
    public function getConversionTrackerTypes()
    {
        return $this->container['conversion_tracker_types'];
    }

    /**
     * Sets conversion_tracker_types
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType[]|null $conversion_tracker_types conversion_tracker_types
     *
     * @return $this
     */
    public function setConversionTrackerTypes($conversion_tracker_types)
    {
        $this->container['conversion_tracker_types'] = $conversion_tracker_types;

        return $this;
    }

    /**
     * Gets exclude_from_biddings
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding[]|null
     */
    public function getExcludeFromBiddings()
    {
        return $this->container['exclude_from_biddings'];
    }

    /**
     * Sets exclude_from_biddings
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding[]|null $exclude_from_biddings exclude_from_biddings
     *
     * @return $this
     */
    public function setExcludeFromBiddings($exclude_from_biddings)
    {
        $this->container['exclude_from_biddings'] = $exclude_from_biddings;

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

        if (!is_null($number_results) && ($number_results > 500)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling ConversionTrackerServiceSelector., must be smaller than or equal to 500.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling ConversionTrackerServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['number_results'] = $number_results;

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
            throw new \InvalidArgumentException('invalid value for $start_index when calling ConversionTrackerServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus[]|null $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets tracking_code_types
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceTrackingCodeType[]|null
     */
    public function getTrackingCodeTypes()
    {
        return $this->container['tracking_code_types'];
    }

    /**
     * Sets tracking_code_types
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceTrackingCodeType[]|null $tracking_code_types tracking_code_types
     *
     * @return $this
     */
    public function setTrackingCodeTypes($tracking_code_types)
    {
        $this->container['tracking_code_types'] = $tracking_code_types;

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


