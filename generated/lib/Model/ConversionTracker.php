<?php
/**
 * ConversionTracker
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
 * ConversionTracker Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;ConversionTrackerオブジェクトは、コンバージョン測定タグやタグごとのパフォーマンスデータなどのコンバージョントラッカー情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTracker object shows ConversionTracker information such as ConversionTag and performance data by tag.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;GET&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;allConversions&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;category&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionTrackerId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionTrackerName&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionTrackerType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionValue&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversions&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;excludeFromBidding&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;default: FALSE（使用する）&lt;/ja&gt;&lt;br&gt;&lt;en&gt;default: FALSE（include）&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;mostRecentConversionDate&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;status&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;userRevenueValue&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Updatable&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;allConversionValue&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;conversionCountingType&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;default：MANY_PER_CLICK&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;measurementPeriod&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;default: 30&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;webConversion&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※conversionTrackerTypeがWEB_CONVERSIONの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If conversionTrackerType is WEB_CONVERSION, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;appConversion&lt;/td&gt;&lt;td&gt;-&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;&lt;ja&gt;※conversionTrackerTypeがAPP_CONVERSIONの場合、Requirement&lt;/ja&gt;&lt;br&gt;&lt;en&gt;∗ If conversionTrackerType is APP_CONVERSION, Requirement&lt;/en&gt;&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionTracker implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionTracker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'all_conversion_value' => 'string',
        'all_conversions' => 'int',
        'app_conversion' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceAppConversion',
        'category' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory',
        'conversion_counting_type' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType',
        'conversion_tracker_id' => 'int',
        'conversion_tracker_name' => 'string',
        'conversion_tracker_type' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType',
        'conversion_value' => 'string',
        'conversions' => 'int',
        'exclude_from_bidding' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding',
        'measurement_period' => 'int',
        'most_recent_conversion_date' => 'string',
        'status' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus',
        'user_revenue_value' => 'string',
        'web_conversion' => '\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceWebConversion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'all_conversion_value' => null,
        'all_conversions' => 'int64',
        'app_conversion' => null,
        'category' => null,
        'conversion_counting_type' => null,
        'conversion_tracker_id' => 'int64',
        'conversion_tracker_name' => null,
        'conversion_tracker_type' => null,
        'conversion_value' => null,
        'conversions' => 'int64',
        'exclude_from_bidding' => null,
        'measurement_period' => 'int32',
        'most_recent_conversion_date' => null,
        'status' => null,
        'user_revenue_value' => null,
        'web_conversion' => null
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
        'all_conversion_value' => 'allConversionValue',
        'all_conversions' => 'allConversions',
        'app_conversion' => 'appConversion',
        'category' => 'category',
        'conversion_counting_type' => 'conversionCountingType',
        'conversion_tracker_id' => 'conversionTrackerId',
        'conversion_tracker_name' => 'conversionTrackerName',
        'conversion_tracker_type' => 'conversionTrackerType',
        'conversion_value' => 'conversionValue',
        'conversions' => 'conversions',
        'exclude_from_bidding' => 'excludeFromBidding',
        'measurement_period' => 'measurementPeriod',
        'most_recent_conversion_date' => 'mostRecentConversionDate',
        'status' => 'status',
        'user_revenue_value' => 'userRevenueValue',
        'web_conversion' => 'webConversion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'all_conversion_value' => 'setAllConversionValue',
        'all_conversions' => 'setAllConversions',
        'app_conversion' => 'setAppConversion',
        'category' => 'setCategory',
        'conversion_counting_type' => 'setConversionCountingType',
        'conversion_tracker_id' => 'setConversionTrackerId',
        'conversion_tracker_name' => 'setConversionTrackerName',
        'conversion_tracker_type' => 'setConversionTrackerType',
        'conversion_value' => 'setConversionValue',
        'conversions' => 'setConversions',
        'exclude_from_bidding' => 'setExcludeFromBidding',
        'measurement_period' => 'setMeasurementPeriod',
        'most_recent_conversion_date' => 'setMostRecentConversionDate',
        'status' => 'setStatus',
        'user_revenue_value' => 'setUserRevenueValue',
        'web_conversion' => 'setWebConversion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'all_conversion_value' => 'getAllConversionValue',
        'all_conversions' => 'getAllConversions',
        'app_conversion' => 'getAppConversion',
        'category' => 'getCategory',
        'conversion_counting_type' => 'getConversionCountingType',
        'conversion_tracker_id' => 'getConversionTrackerId',
        'conversion_tracker_name' => 'getConversionTrackerName',
        'conversion_tracker_type' => 'getConversionTrackerType',
        'conversion_value' => 'getConversionValue',
        'conversions' => 'getConversions',
        'exclude_from_bidding' => 'getExcludeFromBidding',
        'measurement_period' => 'getMeasurementPeriod',
        'most_recent_conversion_date' => 'getMostRecentConversionDate',
        'status' => 'getStatus',
        'user_revenue_value' => 'getUserRevenueValue',
        'web_conversion' => 'getWebConversion'
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
        $this->container['all_conversion_value'] = isset($data['all_conversion_value']) ? $data['all_conversion_value'] : null;
        $this->container['all_conversions'] = isset($data['all_conversions']) ? $data['all_conversions'] : null;
        $this->container['app_conversion'] = isset($data['app_conversion']) ? $data['app_conversion'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['conversion_counting_type'] = isset($data['conversion_counting_type']) ? $data['conversion_counting_type'] : null;
        $this->container['conversion_tracker_id'] = isset($data['conversion_tracker_id']) ? $data['conversion_tracker_id'] : null;
        $this->container['conversion_tracker_name'] = isset($data['conversion_tracker_name']) ? $data['conversion_tracker_name'] : null;
        $this->container['conversion_tracker_type'] = isset($data['conversion_tracker_type']) ? $data['conversion_tracker_type'] : null;
        $this->container['conversion_value'] = isset($data['conversion_value']) ? $data['conversion_value'] : null;
        $this->container['conversions'] = isset($data['conversions']) ? $data['conversions'] : null;
        $this->container['exclude_from_bidding'] = isset($data['exclude_from_bidding']) ? $data['exclude_from_bidding'] : null;
        $this->container['measurement_period'] = isset($data['measurement_period']) ? $data['measurement_period'] : null;
        $this->container['most_recent_conversion_date'] = isset($data['most_recent_conversion_date']) ? $data['most_recent_conversion_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user_revenue_value'] = isset($data['user_revenue_value']) ? $data['user_revenue_value'] : null;
        $this->container['web_conversion'] = isset($data['web_conversion']) ? $data['web_conversion'] : null;
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
     * @param int|null $account_id <ja>アカウントIDです。</ja><br><en>Account ID</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets all_conversion_value
     *
     * @return string|null
     */
    public function getAllConversionValue()
    {
        return $this->container['all_conversion_value'];
    }

    /**
     * Sets all_conversion_value
     *
     * @param string|null $all_conversion_value <ja>自動入札設定対象のコンバージョン値と、対象外のコンバージョン値の合計です。</ja><br><en>Total value of conversions to be included to auto bidding and to be exluded from auto bidding.</en>
     *
     * @return $this
     */
    public function setAllConversionValue($all_conversion_value)
    {
        $this->container['all_conversion_value'] = $all_conversion_value;

        return $this;
    }

    /**
     * Gets all_conversions
     *
     * @return int|null
     */
    public function getAllConversions()
    {
        return $this->container['all_conversions'];
    }

    /**
     * Sets all_conversions
     *
     * @param int|null $all_conversions <ja>自動入札設定対象のコンバージョン数と、対象外のコンバージョン数の合計です。</ja><br><en>Total number of conversions to be included to auto bidding and to be excluded from auto bidding.</en>
     *
     * @return $this
     */
    public function setAllConversions($all_conversions)
    {
        $this->container['all_conversions'] = $all_conversions;

        return $this;
    }

    /**
     * Gets app_conversion
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceAppConversion|null
     */
    public function getAppConversion()
    {
        return $this->container['app_conversion'];
    }

    /**
     * Sets app_conversion
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceAppConversion|null $app_conversion app_conversion
     *
     * @return $this
     */
    public function setAppConversion($app_conversion)
    {
        $this->container['app_conversion'] = $app_conversion;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory|null $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets conversion_counting_type
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType|null
     */
    public function getConversionCountingType()
    {
        return $this->container['conversion_counting_type'];
    }

    /**
     * Sets conversion_counting_type
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType|null $conversion_counting_type conversion_counting_type
     *
     * @return $this
     */
    public function setConversionCountingType($conversion_counting_type)
    {
        $this->container['conversion_counting_type'] = $conversion_counting_type;

        return $this;
    }

    /**
     * Gets conversion_tracker_id
     *
     * @return int|null
     */
    public function getConversionTrackerId()
    {
        return $this->container['conversion_tracker_id'];
    }

    /**
     * Sets conversion_tracker_id
     *
     * @param int|null $conversion_tracker_id <ja>コンバージョントラッカーのIDです。</ja><br><en>ConversionTracker ID.</en>
     *
     * @return $this
     */
    public function setConversionTrackerId($conversion_tracker_id)
    {
        $this->container['conversion_tracker_id'] = $conversion_tracker_id;

        return $this;
    }

    /**
     * Gets conversion_tracker_name
     *
     * @return string|null
     */
    public function getConversionTrackerName()
    {
        return $this->container['conversion_tracker_name'];
    }

    /**
     * Sets conversion_tracker_name
     *
     * @param string|null $conversion_tracker_name <ja>コンバージョントラッカーの名称です。</ja><br><en>ConversionTracker Name.</en>
     *
     * @return $this
     */
    public function setConversionTrackerName($conversion_tracker_name)
    {
        $this->container['conversion_tracker_name'] = $conversion_tracker_name;

        return $this;
    }

    /**
     * Gets conversion_tracker_type
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType|null
     */
    public function getConversionTrackerType()
    {
        return $this->container['conversion_tracker_type'];
    }

    /**
     * Sets conversion_tracker_type
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType|null $conversion_tracker_type conversion_tracker_type
     *
     * @return $this
     */
    public function setConversionTrackerType($conversion_tracker_type)
    {
        $this->container['conversion_tracker_type'] = $conversion_tracker_type;

        return $this;
    }

    /**
     * Gets conversion_value
     *
     * @return string|null
     */
    public function getConversionValue()
    {
        return $this->container['conversion_value'];
    }

    /**
     * Sets conversion_value
     *
     * @param string|null $conversion_value <ja>自動入札設定対象のコンバージョン値です。</ja><br><en>Conversion value to be included to auto bidding.</en>
     *
     * @return $this
     */
    public function setConversionValue($conversion_value)
    {
        $this->container['conversion_value'] = $conversion_value;

        return $this;
    }

    /**
     * Gets conversions
     *
     * @return int|null
     */
    public function getConversions()
    {
        return $this->container['conversions'];
    }

    /**
     * Sets conversions
     *
     * @param int|null $conversions <ja>自動入札設定対象のコンバージョン数です。<br>ユニークコンバージョンか総コンバージョンかは、countingTypeに依存します。</ja><br><en>Conversions which counts as included to Auto Bidding setting.<br>countingType specifies whether one-per-click or many-per-click.</en>
     *
     * @return $this
     */
    public function setConversions($conversions)
    {
        $this->container['conversions'] = $conversions;

        return $this;
    }

    /**
     * Gets exclude_from_bidding
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding|null
     */
    public function getExcludeFromBidding()
    {
        return $this->container['exclude_from_bidding'];
    }

    /**
     * Sets exclude_from_bidding
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding|null $exclude_from_bidding exclude_from_bidding
     *
     * @return $this
     */
    public function setExcludeFromBidding($exclude_from_bidding)
    {
        $this->container['exclude_from_bidding'] = $exclude_from_bidding;

        return $this;
    }

    /**
     * Gets measurement_period
     *
     * @return int|null
     */
    public function getMeasurementPeriod()
    {
        return $this->container['measurement_period'];
    }

    /**
     * Sets measurement_period
     *
     * @param int|null $measurement_period <ja>コンバージョン計測期間です（単位：日)。<br>7～90日間で設定可能です。<br>※アプリダウンロードの場合は30日間固定。</ja><br><en>Counting period of conversoins (days).<br>It is available between 7 to 90 days<br>* For Mobile App Download, this period is fixed as 30 days.</en>
     *
     * @return $this
     */
    public function setMeasurementPeriod($measurement_period)
    {
        $this->container['measurement_period'] = $measurement_period;

        return $this;
    }

    /**
     * Gets most_recent_conversion_date
     *
     * @return string|null
     */
    public function getMostRecentConversionDate()
    {
        return $this->container['most_recent_conversion_date'];
    }

    /**
     * Sets most_recent_conversion_date
     *
     * @param string|null $most_recent_conversion_date <ja>直近のコンバージョン発生日です。</ja><br><en>The most latest date when conversion occured.</en>
     *
     * @return $this
     */
    public function setMostRecentConversionDate($most_recent_conversion_date)
    {
        $this->container['most_recent_conversion_date'] = $most_recent_conversion_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_revenue_value
     *
     * @return string|null
     */
    public function getUserRevenueValue()
    {
        return $this->container['user_revenue_value'];
    }

    /**
     * Sets user_revenue_value
     *
     * @param string|null $user_revenue_value <ja>このコンバージョントラッカーに対するユーザー指定の収益値です。<br>1コンバージョンあたりの売上金額が固定値の場合、その金額を設定することで、売上金額をレポートなどで確認できます。<br>ADDリクエスト時に未指定の場合、0が設定されます。</ja><br><en>The value of revenue of the conversion tracker specified by user.<br>When the sales revenue of 1 conversion is fixed value, you are able to review the total sales on reports by specifying the amount on this item.<br>If it is not specified on ADD request, the value &#34;0&#34; is set.</en>
     *
     * @return $this
     */
    public function setUserRevenueValue($user_revenue_value)
    {
        $this->container['user_revenue_value'] = $user_revenue_value;

        return $this;
    }

    /**
     * Gets web_conversion
     *
     * @return \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceWebConversion|null
     */
    public function getWebConversion()
    {
        return $this->container['web_conversion'];
    }

    /**
     * Sets web_conversion
     *
     * @param \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceWebConversion|null $web_conversion web_conversion
     *
     * @return $this
     */
    public function setWebConversion($web_conversion)
    {
        $this->container['web_conversion'] = $web_conversion;

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


