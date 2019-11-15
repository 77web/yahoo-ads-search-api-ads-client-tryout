<?php
/**
 * AdGroupAd
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
 * AdGroupAd Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AdGroupAdオブジェクトは、広告に関する操作を行うための情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AdGroupAd object describes information for operations on ads.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;ad&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adGroupId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adGroupName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adGroupTrackId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;adTrackId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;approvalStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;campaignId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Requirement&lt;br&gt;&lt;i&gt;NotUpdatable&lt;/i&gt;&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;campaignName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;campaignTrackId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;disapprovalReasonCodes&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;feedId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;invalidedTrademarks&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labels&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;trademarkStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;userStatus&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;i&gt;Updatable&lt;/i&gt;&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdGroupAd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdGroupAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'ad' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceAd',
        'ad_group_id' => 'int',
        'ad_group_name' => 'string',
        'ad_group_track_id' => 'int',
        'ad_id' => 'int',
        'ad_name' => 'string',
        'ad_track_id' => 'int',
        'approval_status' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceApprovalStatus',
        'campaign_id' => 'int',
        'campaign_name' => 'string',
        'campaign_track_id' => 'int',
        'disapproval_reason_codes' => 'string[]',
        'feed_id' => 'int',
        'invalided_trademarks' => 'string[]',
        'labels' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceLabel[]',
        'trademark_status' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceTrademarkStatus',
        'user_status' => '\YahooAdsSearchApi\Client\Model\AdGroupAdServiceUserStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'ad' => null,
        'ad_group_id' => 'int64',
        'ad_group_name' => null,
        'ad_group_track_id' => 'int64',
        'ad_id' => 'int64',
        'ad_name' => null,
        'ad_track_id' => 'int64',
        'approval_status' => null,
        'campaign_id' => 'int64',
        'campaign_name' => null,
        'campaign_track_id' => 'int64',
        'disapproval_reason_codes' => null,
        'feed_id' => 'int64',
        'invalided_trademarks' => null,
        'labels' => null,
        'trademark_status' => null,
        'user_status' => null
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
        'ad' => 'ad',
        'ad_group_id' => 'adGroupId',
        'ad_group_name' => 'adGroupName',
        'ad_group_track_id' => 'adGroupTrackId',
        'ad_id' => 'adId',
        'ad_name' => 'adName',
        'ad_track_id' => 'adTrackId',
        'approval_status' => 'approvalStatus',
        'campaign_id' => 'campaignId',
        'campaign_name' => 'campaignName',
        'campaign_track_id' => 'campaignTrackId',
        'disapproval_reason_codes' => 'disapprovalReasonCodes',
        'feed_id' => 'feedId',
        'invalided_trademarks' => 'invalidedTrademarks',
        'labels' => 'labels',
        'trademark_status' => 'trademarkStatus',
        'user_status' => 'userStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'ad' => 'setAd',
        'ad_group_id' => 'setAdGroupId',
        'ad_group_name' => 'setAdGroupName',
        'ad_group_track_id' => 'setAdGroupTrackId',
        'ad_id' => 'setAdId',
        'ad_name' => 'setAdName',
        'ad_track_id' => 'setAdTrackId',
        'approval_status' => 'setApprovalStatus',
        'campaign_id' => 'setCampaignId',
        'campaign_name' => 'setCampaignName',
        'campaign_track_id' => 'setCampaignTrackId',
        'disapproval_reason_codes' => 'setDisapprovalReasonCodes',
        'feed_id' => 'setFeedId',
        'invalided_trademarks' => 'setInvalidedTrademarks',
        'labels' => 'setLabels',
        'trademark_status' => 'setTrademarkStatus',
        'user_status' => 'setUserStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'ad' => 'getAd',
        'ad_group_id' => 'getAdGroupId',
        'ad_group_name' => 'getAdGroupName',
        'ad_group_track_id' => 'getAdGroupTrackId',
        'ad_id' => 'getAdId',
        'ad_name' => 'getAdName',
        'ad_track_id' => 'getAdTrackId',
        'approval_status' => 'getApprovalStatus',
        'campaign_id' => 'getCampaignId',
        'campaign_name' => 'getCampaignName',
        'campaign_track_id' => 'getCampaignTrackId',
        'disapproval_reason_codes' => 'getDisapprovalReasonCodes',
        'feed_id' => 'getFeedId',
        'invalided_trademarks' => 'getInvalidedTrademarks',
        'labels' => 'getLabels',
        'trademark_status' => 'getTrademarkStatus',
        'user_status' => 'getUserStatus'
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
        $this->container['ad'] = isset($data['ad']) ? $data['ad'] : null;
        $this->container['ad_group_id'] = isset($data['ad_group_id']) ? $data['ad_group_id'] : null;
        $this->container['ad_group_name'] = isset($data['ad_group_name']) ? $data['ad_group_name'] : null;
        $this->container['ad_group_track_id'] = isset($data['ad_group_track_id']) ? $data['ad_group_track_id'] : null;
        $this->container['ad_id'] = isset($data['ad_id']) ? $data['ad_id'] : null;
        $this->container['ad_name'] = isset($data['ad_name']) ? $data['ad_name'] : null;
        $this->container['ad_track_id'] = isset($data['ad_track_id']) ? $data['ad_track_id'] : null;
        $this->container['approval_status'] = isset($data['approval_status']) ? $data['approval_status'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['campaign_name'] = isset($data['campaign_name']) ? $data['campaign_name'] : null;
        $this->container['campaign_track_id'] = isset($data['campaign_track_id']) ? $data['campaign_track_id'] : null;
        $this->container['disapproval_reason_codes'] = isset($data['disapproval_reason_codes']) ? $data['disapproval_reason_codes'] : null;
        $this->container['feed_id'] = isset($data['feed_id']) ? $data['feed_id'] : null;
        $this->container['invalided_trademarks'] = isset($data['invalided_trademarks']) ? $data['invalided_trademarks'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['trademark_status'] = isset($data['trademark_status']) ? $data['trademark_status'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
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
     * @param int|null $account_id <ja>アカウントID</ja><br><en>Account ID.</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets ad
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAd|null
     */
    public function getAd()
    {
        return $this->container['ad'];
    }

    /**
     * Sets ad
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceAd|null $ad ad
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->container['ad'] = $ad;

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
     * @param int|null $ad_group_id <ja>広告グループID</ja><br><en>Ad group ID.</en>
     *
     * @return $this
     */
    public function setAdGroupId($ad_group_id)
    {
        $this->container['ad_group_id'] = $ad_group_id;

        return $this;
    }

    /**
     * Gets ad_group_name
     *
     * @return string|null
     */
    public function getAdGroupName()
    {
        return $this->container['ad_group_name'];
    }

    /**
     * Sets ad_group_name
     *
     * @param string|null $ad_group_name <ja>広告グループ名</ja><br><en>Ad group name.</en>
     *
     * @return $this
     */
    public function setAdGroupName($ad_group_name)
    {
        $this->container['ad_group_name'] = $ad_group_name;

        return $this;
    }

    /**
     * Gets ad_group_track_id
     *
     * @return int|null
     */
    public function getAdGroupTrackId()
    {
        return $this->container['ad_group_track_id'];
    }

    /**
     * Sets ad_group_track_id
     *
     * @param int|null $ad_group_track_id <ja>トラッキング用広告グループID</ja><br><en>Ad group ID for tracking.</en>
     *
     * @return $this
     */
    public function setAdGroupTrackId($ad_group_track_id)
    {
        $this->container['ad_group_track_id'] = $ad_group_track_id;

        return $this;
    }

    /**
     * Gets ad_id
     *
     * @return int|null
     */
    public function getAdId()
    {
        return $this->container['ad_id'];
    }

    /**
     * Sets ad_id
     *
     * @param int|null $ad_id <ja>広告ID</ja><br><en>Ad ID.</en>
     *
     * @return $this
     */
    public function setAdId($ad_id)
    {
        $this->container['ad_id'] = $ad_id;

        return $this;
    }

    /**
     * Gets ad_name
     *
     * @return string|null
     */
    public function getAdName()
    {
        return $this->container['ad_name'];
    }

    /**
     * Sets ad_name
     *
     * @param string|null $ad_name <ja>広告名</ja><br><en>Ad name.</en>
     *
     * @return $this
     */
    public function setAdName($ad_name)
    {
        $this->container['ad_name'] = $ad_name;

        return $this;
    }

    /**
     * Gets ad_track_id
     *
     * @return int|null
     */
    public function getAdTrackId()
    {
        return $this->container['ad_track_id'];
    }

    /**
     * Sets ad_track_id
     *
     * @param int|null $ad_track_id <ja>トラッキング用広告ID</ja><br><en>Ad ID for tracking.</en>
     *
     * @return $this
     */
    public function setAdTrackId($ad_track_id)
    {
        $this->container['ad_track_id'] = $ad_track_id;

        return $this;
    }

    /**
     * Gets approval_status
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceApprovalStatus|null
     */
    public function getApprovalStatus()
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceApprovalStatus|null $approval_status approval_status
     *
     * @return $this
     */
    public function setApprovalStatus($approval_status)
    {
        $this->container['approval_status'] = $approval_status;

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
     * @param int|null $campaign_id <ja>キャンペーンID</ja><br><en>Campaign ID.</en>
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string|null $campaign_name <ja>キャンペーン名</ja><br><en>Campaign name.</en>
     *
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

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
     * @param int|null $campaign_track_id <ja>トラッキング用キャンペーンID</ja><br><en>Campaign ID for tracking.</en>
     *
     * @return $this
     */
    public function setCampaignTrackId($campaign_track_id)
    {
        $this->container['campaign_track_id'] = $campaign_track_id;

        return $this;
    }

    /**
     * Gets disapproval_reason_codes
     *
     * @return string[]|null
     */
    public function getDisapprovalReasonCodes()
    {
        return $this->container['disapproval_reason_codes'];
    }

    /**
     * Sets disapproval_reason_codes
     *
     * @param string[]|null $disapproval_reason_codes <ja>審査否認の理由コード<br>(コード詳細は、DictionaryServiceのgetDisapprovalReasonのレスポンスを参照)</ja><br><en>Code of Disapproval reason.<br>(Refer to DictionaryService getDisapprovalReason response for details)</en>
     *
     * @return $this
     */
    public function setDisapprovalReasonCodes($disapproval_reason_codes)
    {
        $this->container['disapproval_reason_codes'] = $disapproval_reason_codes;

        return $this;
    }

    /**
     * Gets feed_id
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id
     *
     * @param int|null $feed_id <ja>フィードID</ja><br><en>Feed ID.</en>
     *
     * @return $this
     */
    public function setFeedId($feed_id)
    {
        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets invalided_trademarks
     *
     * @return string[]|null
     */
    public function getInvalidedTrademarks()
    {
        return $this->container['invalided_trademarks'];
    }

    /**
     * Sets invalided_trademarks
     *
     * @param string[]|null $invalided_trademarks <ja>制限された商標</ja><br><en>Invalided trademarks.</en>
     *
     * @return $this
     */
    public function setInvalidedTrademarks($invalided_trademarks)
    {
        $this->container['invalided_trademarks'] = $invalided_trademarks;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceLabel[]|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceLabel[]|null $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets trademark_status
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceTrademarkStatus|null
     */
    public function getTrademarkStatus()
    {
        return $this->container['trademark_status'];
    }

    /**
     * Sets trademark_status
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceTrademarkStatus|null $trademark_status trademark_status
     *
     * @return $this
     */
    public function setTrademarkStatus($trademark_status)
    {
        $this->container['trademark_status'] = $trademark_status;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return \YahooAdsSearchApi\Client\Model\AdGroupAdServiceUserStatus|null
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param \YahooAdsSearchApi\Client\Model\AdGroupAdServiceUserStatus|null $user_status user_status
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $this->container['user_status'] = $user_status;

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


