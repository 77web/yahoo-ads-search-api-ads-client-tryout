<?php
/**
 * PageFeedItemServiceUploadJob
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
 * PageFeedItemServiceUploadJob Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;PageFeedItemServiceUploadJobオブジェクトは、ページフィードアイテム情報をダウンロードする処理内容を格納します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;PageFeedItemServiceUploadJob object retains contents of page feed item information for upload.&lt;/en&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFeedItemServiceUploadJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageFeedItemServiceUploadJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'end_date' => 'string',
        'error_count' => 'int',
        'feed_ids' => 'int[]',
        'job_id' => 'int',
        'progress' => 'int',
        'start_date' => 'string',
        'upload_job_status' => '\YahooAdsSearchApi\Client\Model\PageFeedItemServiceUploadJobStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'end_date' => null,
        'error_count' => 'int32',
        'feed_ids' => 'int64',
        'job_id' => 'int64',
        'progress' => 'int32',
        'start_date' => null,
        'upload_job_status' => null
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
        'end_date' => 'endDate',
        'error_count' => 'errorCount',
        'feed_ids' => 'feedIds',
        'job_id' => 'jobId',
        'progress' => 'progress',
        'start_date' => 'startDate',
        'upload_job_status' => 'uploadJobStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'end_date' => 'setEndDate',
        'error_count' => 'setErrorCount',
        'feed_ids' => 'setFeedIds',
        'job_id' => 'setJobId',
        'progress' => 'setProgress',
        'start_date' => 'setStartDate',
        'upload_job_status' => 'setUploadJobStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'end_date' => 'getEndDate',
        'error_count' => 'getErrorCount',
        'feed_ids' => 'getFeedIds',
        'job_id' => 'getJobId',
        'progress' => 'getProgress',
        'start_date' => 'getStartDate',
        'upload_job_status' => 'getUploadJobStatus'
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
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['error_count'] = isset($data['error_count']) ? $data['error_count'] : null;
        $this->container['feed_ids'] = isset($data['feed_ids']) ? $data['feed_ids'] : null;
        $this->container['job_id'] = isset($data['job_id']) ? $data['job_id'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['upload_job_status'] = isset($data['upload_job_status']) ? $data['upload_job_status'] : null;
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
     * Gets error_count
     *
     * @return int|null
     */
    public function getErrorCount()
    {
        return $this->container['error_count'];
    }

    /**
     * Sets error_count
     *
     * @param int|null $error_count <ja>エラーの件数</ja><br><en>count of error occured</en>
     *
     * @return $this
     */
    public function setErrorCount($error_count)
    {
        $this->container['error_count'] = $error_count;

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
     * @param int[]|null $feed_ids feed_ids
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
     * @param int|null $job_id <ja>ジョブID</ja><br><en>Job ID.</en>
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
     * @param string|null $start_date <ja>ジョブの開始日<br>形式：yyyyMMddHHmmss</ja><br><en>Start date of job<br>Format:yyyyMMddHHmmss</en>
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets upload_job_status
     *
     * @return \YahooAdsSearchApi\Client\Model\PageFeedItemServiceUploadJobStatus|null
     */
    public function getUploadJobStatus()
    {
        return $this->container['upload_job_status'];
    }

    /**
     * Sets upload_job_status
     *
     * @param \YahooAdsSearchApi\Client\Model\PageFeedItemServiceUploadJobStatus|null $upload_job_status upload_job_status
     *
     * @return $this
     */
    public function setUploadJobStatus($upload_job_status)
    {
        $this->container['upload_job_status'] = $upload_job_status;

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

