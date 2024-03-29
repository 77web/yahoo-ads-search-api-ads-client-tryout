<?php
/**
 * RetargetingListServiceTargetingList
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
 * RetargetingListServiceTargetingList Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;RetargetingListServiceTargetingListは、リターゲティング情報（ターゲットリスト）を保持するオブジェクトです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;RetargetingListServiceTargetingList is an object that holds retargeting information (target list).&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;closingReason&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reach&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reachStorageSpan&lt;/td&gt;&lt;td&gt;‐&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt; ※LogicalTargetListの場合、Ignore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* LogicalTargetList:Ignore&lt;/en&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;reachStorageStatus&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt; ※LogicalTargetListの場合、Ignore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* LogicalTargetList:Ignore&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※LogicalTargetListの場合、Ignore&lt;/ja&gt;&lt;br&gt;&lt;en&gt;* LogicalTargetList:Ignore&lt;/en&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;retargetingAccountStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetListDescription&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetListId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetListName&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetListTrackId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetListType&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;targetListOwner&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;logicalTargetList&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※targetListTypeがLOGICALの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If targetListType is LOGICAL, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※targetListTypeがLOGICALの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If targetListType is LOGICAL, Requirement&lt;/en&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;ruleBaseTargetList&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※targetListTypeがRULEの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If targetListType is RULE, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※targetListTypeがRULEの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If targetListType is RULE, Requirement&lt;/en&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;defaultTargetList&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※targetListTypeがDEFAULTの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If targetListType is DEFAULT, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※targetListTypeがDEFAULTの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If targetListType is DEFAULT, Requirement&lt;/en&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingListServiceTargetingList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RetargetingListServiceTargetingList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'closing_reason' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceClosingReason',
        'default_target_list' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceDefaultTargetList',
        'logical_target_list' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceLogicalTargetList',
        'reach' => 'int',
        'reach_storage_span' => 'int',
        'reach_storage_status' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceReachStorageStatus',
        'retargeting_account_status' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceRetargetingAccountStatus',
        'rule_base_target_list' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceRuleBaseTargetList',
        'target_list_description' => 'string',
        'target_list_id' => 'int',
        'target_list_name' => 'string',
        'target_list_owner' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListOwner',
        'target_list_track_id' => 'int',
        'target_list_type' => '\YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'closing_reason' => null,
        'default_target_list' => null,
        'logical_target_list' => null,
        'reach' => 'int64',
        'reach_storage_span' => 'int64',
        'reach_storage_status' => null,
        'retargeting_account_status' => null,
        'rule_base_target_list' => null,
        'target_list_description' => null,
        'target_list_id' => 'int64',
        'target_list_name' => null,
        'target_list_owner' => null,
        'target_list_track_id' => 'int64',
        'target_list_type' => null
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
        'closing_reason' => 'closingReason',
        'default_target_list' => 'defaultTargetList',
        'logical_target_list' => 'logicalTargetList',
        'reach' => 'reach',
        'reach_storage_span' => 'reachStorageSpan',
        'reach_storage_status' => 'reachStorageStatus',
        'retargeting_account_status' => 'retargetingAccountStatus',
        'rule_base_target_list' => 'ruleBaseTargetList',
        'target_list_description' => 'targetListDescription',
        'target_list_id' => 'targetListId',
        'target_list_name' => 'targetListName',
        'target_list_owner' => 'targetListOwner',
        'target_list_track_id' => 'targetListTrackId',
        'target_list_type' => 'targetListType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'closing_reason' => 'setClosingReason',
        'default_target_list' => 'setDefaultTargetList',
        'logical_target_list' => 'setLogicalTargetList',
        'reach' => 'setReach',
        'reach_storage_span' => 'setReachStorageSpan',
        'reach_storage_status' => 'setReachStorageStatus',
        'retargeting_account_status' => 'setRetargetingAccountStatus',
        'rule_base_target_list' => 'setRuleBaseTargetList',
        'target_list_description' => 'setTargetListDescription',
        'target_list_id' => 'setTargetListId',
        'target_list_name' => 'setTargetListName',
        'target_list_owner' => 'setTargetListOwner',
        'target_list_track_id' => 'setTargetListTrackId',
        'target_list_type' => 'setTargetListType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'closing_reason' => 'getClosingReason',
        'default_target_list' => 'getDefaultTargetList',
        'logical_target_list' => 'getLogicalTargetList',
        'reach' => 'getReach',
        'reach_storage_span' => 'getReachStorageSpan',
        'reach_storage_status' => 'getReachStorageStatus',
        'retargeting_account_status' => 'getRetargetingAccountStatus',
        'rule_base_target_list' => 'getRuleBaseTargetList',
        'target_list_description' => 'getTargetListDescription',
        'target_list_id' => 'getTargetListId',
        'target_list_name' => 'getTargetListName',
        'target_list_owner' => 'getTargetListOwner',
        'target_list_track_id' => 'getTargetListTrackId',
        'target_list_type' => 'getTargetListType'
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
        $this->container['closing_reason'] = isset($data['closing_reason']) ? $data['closing_reason'] : null;
        $this->container['default_target_list'] = isset($data['default_target_list']) ? $data['default_target_list'] : null;
        $this->container['logical_target_list'] = isset($data['logical_target_list']) ? $data['logical_target_list'] : null;
        $this->container['reach'] = isset($data['reach']) ? $data['reach'] : null;
        $this->container['reach_storage_span'] = isset($data['reach_storage_span']) ? $data['reach_storage_span'] : null;
        $this->container['reach_storage_status'] = isset($data['reach_storage_status']) ? $data['reach_storage_status'] : null;
        $this->container['retargeting_account_status'] = isset($data['retargeting_account_status']) ? $data['retargeting_account_status'] : null;
        $this->container['rule_base_target_list'] = isset($data['rule_base_target_list']) ? $data['rule_base_target_list'] : null;
        $this->container['target_list_description'] = isset($data['target_list_description']) ? $data['target_list_description'] : null;
        $this->container['target_list_id'] = isset($data['target_list_id']) ? $data['target_list_id'] : null;
        $this->container['target_list_name'] = isset($data['target_list_name']) ? $data['target_list_name'] : null;
        $this->container['target_list_owner'] = isset($data['target_list_owner']) ? $data['target_list_owner'] : null;
        $this->container['target_list_track_id'] = isset($data['target_list_track_id']) ? $data['target_list_track_id'] : null;
        $this->container['target_list_type'] = isset($data['target_list_type']) ? $data['target_list_type'] : null;
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
     * Gets closing_reason
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceClosingReason|null
     */
    public function getClosingReason()
    {
        return $this->container['closing_reason'];
    }

    /**
     * Sets closing_reason
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceClosingReason|null $closing_reason closing_reason
     *
     * @return $this
     */
    public function setClosingReason($closing_reason)
    {
        $this->container['closing_reason'] = $closing_reason;

        return $this;
    }

    /**
     * Gets default_target_list
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceDefaultTargetList|null
     */
    public function getDefaultTargetList()
    {
        return $this->container['default_target_list'];
    }

    /**
     * Sets default_target_list
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceDefaultTargetList|null $default_target_list default_target_list
     *
     * @return $this
     */
    public function setDefaultTargetList($default_target_list)
    {
        $this->container['default_target_list'] = $default_target_list;

        return $this;
    }

    /**
     * Gets logical_target_list
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceLogicalTargetList|null
     */
    public function getLogicalTargetList()
    {
        return $this->container['logical_target_list'];
    }

    /**
     * Sets logical_target_list
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceLogicalTargetList|null $logical_target_list logical_target_list
     *
     * @return $this
     */
    public function setLogicalTargetList($logical_target_list)
    {
        $this->container['logical_target_list'] = $logical_target_list;

        return $this;
    }

    /**
     * Gets reach
     *
     * @return int|null
     */
    public function getReach()
    {
        return $this->container['reach'];
    }

    /**
     * Sets reach
     *
     * @param int|null $reach <ja>リストに蓄積されているユーザー数です。</ja><br><en>Number of users stored to the list.</en>
     *
     * @return $this
     */
    public function setReach($reach)
    {
        $this->container['reach'] = $reach;

        return $this;
    }

    /**
     * Gets reach_storage_span
     *
     * @return int|null
     */
    public function getReachStorageSpan()
    {
        return $this->container['reach_storage_span'];
    }

    /**
     * Sets reach_storage_span
     *
     * @param int|null $reach_storage_span <ja>Cookieを保持する日数です。<br>※Default：180<br>※1-540日まで設定可能です。</ja><br><en>Days to hold Cookie.<br>*Default: 180<br>*Can set from 1-540 days</en>
     *
     * @return $this
     */
    public function setReachStorageSpan($reach_storage_span)
    {
        $this->container['reach_storage_span'] = $reach_storage_span;

        return $this;
    }

    /**
     * Gets reach_storage_status
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceReachStorageStatus|null
     */
    public function getReachStorageStatus()
    {
        return $this->container['reach_storage_status'];
    }

    /**
     * Sets reach_storage_status
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceReachStorageStatus|null $reach_storage_status reach_storage_status
     *
     * @return $this
     */
    public function setReachStorageStatus($reach_storage_status)
    {
        $this->container['reach_storage_status'] = $reach_storage_status;

        return $this;
    }

    /**
     * Gets retargeting_account_status
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceRetargetingAccountStatus|null
     */
    public function getRetargetingAccountStatus()
    {
        return $this->container['retargeting_account_status'];
    }

    /**
     * Sets retargeting_account_status
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceRetargetingAccountStatus|null $retargeting_account_status retargeting_account_status
     *
     * @return $this
     */
    public function setRetargetingAccountStatus($retargeting_account_status)
    {
        $this->container['retargeting_account_status'] = $retargeting_account_status;

        return $this;
    }

    /**
     * Gets rule_base_target_list
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceRuleBaseTargetList|null
     */
    public function getRuleBaseTargetList()
    {
        return $this->container['rule_base_target_list'];
    }

    /**
     * Sets rule_base_target_list
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceRuleBaseTargetList|null $rule_base_target_list rule_base_target_list
     *
     * @return $this
     */
    public function setRuleBaseTargetList($rule_base_target_list)
    {
        $this->container['rule_base_target_list'] = $rule_base_target_list;

        return $this;
    }

    /**
     * Gets target_list_description
     *
     * @return string|null
     */
    public function getTargetListDescription()
    {
        return $this->container['target_list_description'];
    }

    /**
     * Sets target_list_description
     *
     * @param string|null $target_list_description <ja>ターゲットリストの説明です。</ja><br><en>Description of Target List.</en>
     *
     * @return $this
     */
    public function setTargetListDescription($target_list_description)
    {
        $this->container['target_list_description'] = $target_list_description;

        return $this;
    }

    /**
     * Gets target_list_id
     *
     * @return int|null
     */
    public function getTargetListId()
    {
        return $this->container['target_list_id'];
    }

    /**
     * Sets target_list_id
     *
     * @param int|null $target_list_id <ja>ターゲットリストIDです。</ja><br><en>Target List ID.</en>
     *
     * @return $this
     */
    public function setTargetListId($target_list_id)
    {
        $this->container['target_list_id'] = $target_list_id;

        return $this;
    }

    /**
     * Gets target_list_name
     *
     * @return string|null
     */
    public function getTargetListName()
    {
        return $this->container['target_list_name'];
    }

    /**
     * Sets target_list_name
     *
     * @param string|null $target_list_name <ja>ターゲットリスト名です。</ja><br><en>Target List name.</en>
     *
     * @return $this
     */
    public function setTargetListName($target_list_name)
    {
        $this->container['target_list_name'] = $target_list_name;

        return $this;
    }

    /**
     * Gets target_list_owner
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListOwner|null
     */
    public function getTargetListOwner()
    {
        return $this->container['target_list_owner'];
    }

    /**
     * Sets target_list_owner
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListOwner|null $target_list_owner target_list_owner
     *
     * @return $this
     */
    public function setTargetListOwner($target_list_owner)
    {
        $this->container['target_list_owner'] = $target_list_owner;

        return $this;
    }

    /**
     * Gets target_list_track_id
     *
     * @return int|null
     */
    public function getTargetListTrackId()
    {
        return $this->container['target_list_track_id'];
    }

    /**
     * Sets target_list_track_id
     *
     * @param int|null $target_list_track_id <ja>ターゲットリストのトラッキング用IDです。</ja><br><en>Tracking ID of Target list.</en>
     *
     * @return $this
     */
    public function setTargetListTrackId($target_list_track_id)
    {
        $this->container['target_list_track_id'] = $target_list_track_id;

        return $this;
    }

    /**
     * Gets target_list_type
     *
     * @return \YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListType|null
     */
    public function getTargetListType()
    {
        return $this->container['target_list_type'];
    }

    /**
     * Sets target_list_type
     *
     * @param \YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListType|null $target_list_type target_list_type
     *
     * @return $this
     */
    public function setTargetListType($target_list_type)
    {
        $this->container['target_list_type'] = $target_list_type;

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


