<?php
/**
 * PageFeedItemServiceDownloadJob
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
 * PageFeedItemServiceDownloadJob Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;PageFeedItemServiceDownloadJobオブジェクトは、ページフィードアイテム情報をダウンロードする処理内容を格納します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;PageFeedItemServiceDownloadJob object retains contents of page feed item information for download.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;addDownloadJob&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;bulkEncoding&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Default：SJIS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;bulkLang&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Default：JA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;bulkOutput&lt;/td&gt;&lt;td&gt;Optional&lt;br&gt;Default：CSV&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;downloadJobStatus&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;endDate&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;feedIds&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;jobId&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;progress&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;startDate&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFeedItemServiceDownloadJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageFeedItemServiceDownloadJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'bulk_encoding' => '\YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkEncoding',
        'bulk_lang' => '\YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkLang',
        'bulk_output' => '\YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkOutput',
        'download_job_status' => '\YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadJobStatus',
        'end_date' => 'string',
        'feed_ids' => 'int[]',
        'job_id' => 'int',
        'progress' => 'int',
        'start_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'bulk_encoding' => null,
        'bulk_lang' => null,
        'bulk_output' => null,
        'download_job_status' => null,
        'end_date' => null,
        'feed_ids' => 'int64',
        'job_id' => 'int64',
        'progress' => 'int32',
        'start_date' => null
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
        'bulk_encoding' => 'bulkEncoding',
        'bulk_lang' => 'bulkLang',
        'bulk_output' => 'bulkOutput',
        'download_job_status' => 'downloadJobStatus',
        'end_date' => 'endDate',
        'feed_ids' => 'feedIds',
        'job_id' => 'jobId',
        'progress' => 'progress',
        'start_date' => 'startDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'bulk_encoding' => 'setBulkEncoding',
        'bulk_lang' => 'setBulkLang',
        'bulk_output' => 'setBulkOutput',
        'download_job_status' => 'setDownloadJobStatus',
        'end_date' => 'setEndDate',
        'feed_ids' => 'setFeedIds',
        'job_id' => 'setJobId',
        'progress' => 'setProgress',
        'start_date' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'bulk_encoding' => 'getBulkEncoding',
        'bulk_lang' => 'getBulkLang',
        'bulk_output' => 'getBulkOutput',
        'download_job_status' => 'getDownloadJobStatus',
        'end_date' => 'getEndDate',
        'feed_ids' => 'getFeedIds',
        'job_id' => 'getJobId',
        'progress' => 'getProgress',
        'start_date' => 'getStartDate'
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
        $this->container['bulk_encoding'] = isset($data['bulk_encoding']) ? $data['bulk_encoding'] : null;
        $this->container['bulk_lang'] = isset($data['bulk_lang']) ? $data['bulk_lang'] : null;
        $this->container['bulk_output'] = isset($data['bulk_output']) ? $data['bulk_output'] : null;
        $this->container['download_job_status'] = isset($data['download_job_status']) ? $data['download_job_status'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['feed_ids'] = isset($data['feed_ids']) ? $data['feed_ids'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
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
     * @param int|null $account_id <ja>アカウントID</ja><br><en>Account ID</en>
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets bulk_encoding
     *
     * @return \YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkEncoding|null
     */
    public function getBulkEncoding()
    {
        return $this->container['bulk_encoding'];
    }

    /**
     * Sets bulk_encoding
     *
     * @param \YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkEncoding|null $bulk_encoding bulk_encoding
     *
     * @return $this
     */
    public function setBulkEncoding($bulk_encoding)
    {
        $this->container['bulk_encoding'] = $bulk_encoding;

        return $this;
    }

    /**
     * Gets bulk_lang
     *
     * @return \YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkLang|null
     */
    public function getBulkLang()
    {
        return $this->container['bulk_lang'];
    }

    /**
     * Sets bulk_lang
     *
     * @param \YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkLang|null $bulk_lang bulk_lang
     *
     * @return $this
     */
    public function setBulkLang($bulk_lang)
    {
        $this->container['bulk_lang'] = $bulk_lang;

        return $this;
    }

    /**
     * Gets bulk_output
     *
     * @return \YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkOutput|null
     */
    public function getBulkOutput()
    {
        return $this->container['bulk_output'];
    }

    /**
     * Sets bulk_output
     *
     * @param \YahooAdsSearchApi\Client\Model\PageFeedItemServiceBulkOutput|null $bulk_output bulk_output
     *
     * @return $this
     */
    public function setBulkOutput($bulk_output)
    {
        $this->container['bulk_output'] = $bulk_output;

        return $this;
    }

    /**
     * Gets download_job_status
     *
     * @return \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadJobStatus|null
     */
    public function getDownloadJobStatus()
    {
        return $this->container['download_job_status'];
    }

    /**
     * Sets download_job_status
     *
     * @param \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadJobStatus|null $download_job_status download_job_status
     *
     * @return $this
     */
    public function setDownloadJobStatus($download_job_status)
    {
        $this->container['download_job_status'] = $download_job_status;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date <ja>ジョブの終了日<br>形式：yyyyMMddHHmmss</ja><br><en>End date of job<br>Format:yyyyMMddHHmmss</en>
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param int[]|null $feed_ids <ja>フィードID</ja><br><en>Feed ID</en>
     *
     * @return $this
     */
    public function setFeedIds($feed_ids)
    {
        $this->container['feed_ids'] = $feed_ids;

        return $this;
    }

    /**
     * Gets job_id
     *
     * @return int|null
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param int|null $job_id <ja>ジョブID</ja><br><en>Job ID</en>
     *
     * @return $this
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets progress
     *
     * @return int|null
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int|null $progress <ja>ジョブの進捗状況</ja><br><en>Progress of page feed item job</en>
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date <ja>ジョブの開始日<br>形式：yyyyMMddHHmmss</ja><br><en>End date of job<br>Format:yyyyMMddHHmmss</en>
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

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

