<?php
/**
 * AdGroupRetargetingListServiceSelector
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
 * AdGroupRetargetingListServiceSelector Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupRetargetingListServiceSelector、広告グループレベルでのターゲットリスト設定の検索条件（実行パラメータ）を保持するオブジェクトです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupRetargetingListServiceSelector is an object that holds search condition (parameter).&lt;/en&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupRetargetingListServiceSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupRetargetingListServiceSelector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'ad_group_ids' => 'int[]',
        'campaign_ids' => 'int[]',
        'excluded_type' => '\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceExcludedType',
        'number_results' => 'int',
        'start_index' => 'int',
        'target_list_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'ad_group_ids' => 'int64',
        'campaign_ids' => 'int64',
        'excluded_type' => null,
        'number_results' => 'int32',
        'start_index' => 'int32',
        'target_list_ids' => 'int64'
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
        'ad_group_ids' => 'adGroupIds',
        'campaign_ids' => 'campaignIds',
        'excluded_type' => 'excludedType',
        'number_results' => 'numberResults',
        'start_index' => 'startIndex',
        'target_list_ids' => 'targetListIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'ad_group_ids' => 'setAdGroupIds',
        'campaign_ids' => 'setCampaignIds',
        'excluded_type' => 'setExcludedType',
        'number_results' => 'setNumberResults',
        'start_index' => 'setStartIndex',
        'target_list_ids' => 'setTargetListIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'ad_group_ids' => 'getAdGroupIds',
        'campaign_ids' => 'getCampaignIds',
        'excluded_type' => 'getExcludedType',
        'number_results' => 'getNumberResults',
        'start_index' => 'getStartIndex',
        'target_list_ids' => 'getTargetListIds'
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
        $this->container['ad_group_ids'] = isset($data['ad_group_ids']) ? $data['ad_group_ids'] : null;
        $this->container['campaign_ids'] = isset($data['campaign_ids']) ? $data['campaign_ids'] : null;
        $this->container['excluded_type'] = isset($data['excluded_type']) ? $data['excluded_type'] : null;
        $this->container['number_results'] = isset($data['number_results']) ? $data['number_results'] : 500;
        $this->container['start_index'] = isset($data['start_index']) ? $data['start_index'] : 1;
        $this->container['target_list_ids'] = isset($data['target_list_ids']) ? $data['target_list_ids'] : null;
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
        if (!is_null($this->container['number_results']) && ($this->container['number_results'] > 1000)) {
            $invalidProperties[] = "invalid value for 'number_results', must be smaller than or equal to 1000.";
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
     * @param int $account_id <ja>検索条件：アカウントIDです。</ja><br><en>Account ID.</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets ad_group_ids
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return $this->container['ad_group_ids'];
    }

    /**
     * Sets ad_group_ids
     *
     * @param int[]|null $ad_group_ids <ja>検索条件：広告グループIDです。</ja><br><en>Ad group ID.</en>
     *
     * @return $this
     */
    public function setAdGroupIds($ad_group_ids)
    {
        $this->container['ad_group_ids'] = $ad_group_ids;

        return $this;
    }

    /**
     * Gets campaign_ids
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->container['campaign_ids'];
    }

    /**
     * Sets campaign_ids
     *
     * @param int[]|null $campaign_ids <ja>検索条件：キャンペーンIDです。</ja><br><en>Campaign ID.</en>
     *
     * @return $this
     */
    public function setCampaignIds($campaign_ids)
    {
        $this->container['campaign_ids'] = $campaign_ids;

        return $this;
    }

    /**
     * Gets excluded_type
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceExcludedType|null
     */
    public function getExcludedType()
    {
        return $this->container['excluded_type'];
    }

    /**
     * Sets excluded_type
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceExcludedType|null $excluded_type excluded_type
     *
     * @return $this
     */
    public function setExcludedType($excluded_type)
    {
        $this->container['excluded_type'] = $excluded_type;

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

        if (!is_null($number_results) && ($number_results > 1000)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling AdGroupRetargetingListServiceSelector., must be smaller than or equal to 1000.');
        }
        if (!is_null($number_results) && ($number_results < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_results when calling AdGroupRetargetingListServiceSelector., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $start_index when calling AdGroupRetargetingListServiceSelector., must be bigger than or equal to 1.');
        }

        $this->container['start_index'] = $start_index;

        return $this;
    }

    /**
     * Gets target_list_ids
     *
     * @return int[]|null
     */
    public function getTargetListIds()
    {
        return $this->container['target_list_ids'];
    }

    /**
     * Sets target_list_ids
     *
     * @param int[]|null $target_list_ids <ja>検索条件：ターゲットリストIDです。</ja><br><en>Target list ID.</en>
     *
     * @return $this
     */
    public function setTargetListIds($target_list_ids)
    {
        $this->container['target_list_ids'] = $target_list_ids;

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


