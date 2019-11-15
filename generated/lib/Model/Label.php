<?php
/**
 * Label
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
 * Label Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;Labelオブジェクトは、ラベルの情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Label object describes label information.&lt;/en&gt;&lt;hr&gt;&lt;details&gt;&lt;summary&gt;Requirement&lt;/summary&gt;&lt;table border&#x3D;&#39;1&#39;&gt;&lt;tr&gt;&lt;th&gt;PROPERTY&lt;/th&gt;&lt;th&gt;ADD&lt;/th&gt;&lt;th&gt;SET&lt;/th&gt;&lt;th&gt;REMOVE&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;accountId&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;color&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;description&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labelId&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labelName&lt;/td&gt;&lt;td&gt;Requirement&lt;/td&gt;&lt;td&gt;Optional&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labeledAdGroup&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labeledAdGroupAd&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labeledAdGroupCriterion&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;labeledCampaign&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;td&gt;Ignore&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/details&gt;
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Label implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'color' => 'string',
        'description' => 'string',
        'label_id' => 'int',
        'label_name' => 'string',
        'labeled_ad_group' => 'int',
        'labeled_ad_group_ad' => 'int',
        'labeled_ad_group_criterion' => 'int',
        'labeled_campaign' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_id' => 'int64',
        'color' => null,
        'description' => null,
        'label_id' => 'int64',
        'label_name' => null,
        'labeled_ad_group' => 'int64',
        'labeled_ad_group_ad' => 'int64',
        'labeled_ad_group_criterion' => 'int64',
        'labeled_campaign' => 'int64'
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
        'color' => 'color',
        'description' => 'description',
        'label_id' => 'labelId',
        'label_name' => 'labelName',
        'labeled_ad_group' => 'labeledAdGroup',
        'labeled_ad_group_ad' => 'labeledAdGroupAd',
        'labeled_ad_group_criterion' => 'labeledAdGroupCriterion',
        'labeled_campaign' => 'labeledCampaign'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'color' => 'setColor',
        'description' => 'setDescription',
        'label_id' => 'setLabelId',
        'label_name' => 'setLabelName',
        'labeled_ad_group' => 'setLabeledAdGroup',
        'labeled_ad_group_ad' => 'setLabeledAdGroupAd',
        'labeled_ad_group_criterion' => 'setLabeledAdGroupCriterion',
        'labeled_campaign' => 'setLabeledCampaign'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'color' => 'getColor',
        'description' => 'getDescription',
        'label_id' => 'getLabelId',
        'label_name' => 'getLabelName',
        'labeled_ad_group' => 'getLabeledAdGroup',
        'labeled_ad_group_ad' => 'getLabeledAdGroupAd',
        'labeled_ad_group_criterion' => 'getLabeledAdGroupCriterion',
        'labeled_campaign' => 'getLabeledCampaign'
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['label_id'] = isset($data['label_id']) ? $data['label_id'] : null;
        $this->container['label_name'] = isset($data['label_name']) ? $data['label_name'] : null;
        $this->container['labeled_ad_group'] = isset($data['labeled_ad_group']) ? $data['labeled_ad_group'] : null;
        $this->container['labeled_ad_group_ad'] = isset($data['labeled_ad_group_ad']) ? $data['labeled_ad_group_ad'] : null;
        $this->container['labeled_ad_group_criterion'] = isset($data['labeled_ad_group_criterion']) ? $data['labeled_ad_group_criterion'] : null;
        $this->container['labeled_campaign'] = isset($data['labeled_campaign']) ? $data['labeled_campaign'] : null;
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
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color <ja>カラー</ja><br><en>Color</en>
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description <ja>説明文</ja><br><en>Description</en>
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets label_id
     *
     * @return int|null
     */
    public function getLabelId()
    {
        return $this->container['label_id'];
    }

    /**
     * Sets label_id
     *
     * @param int|null $label_id <ja>ラベルID</ja><br><en>Label ID</en>
     *
     * @return $this
     */
    public function setLabelId($label_id)
    {
        $this->container['label_id'] = $label_id;

        return $this;
    }

    /**
     * Gets label_name
     *
     * @return string|null
     */
    public function getLabelName()
    {
        return $this->container['label_name'];
    }

    /**
     * Sets label_name
     *
     * @param string|null $label_name <ja>ラベル名</ja><br><en>Label Name</en>
     *
     * @return $this
     */
    public function setLabelName($label_name)
    {
        $this->container['label_name'] = $label_name;

        return $this;
    }

    /**
     * Gets labeled_ad_group
     *
     * @return int|null
     */
    public function getLabeledAdGroup()
    {
        return $this->container['labeled_ad_group'];
    }

    /**
     * Sets labeled_ad_group
     *
     * @param int|null $labeled_ad_group <ja>広告グループの紐付け数</ja><br><en>Number of labeled AdGroup</en>
     *
     * @return $this
     */
    public function setLabeledAdGroup($labeled_ad_group)
    {
        $this->container['labeled_ad_group'] = $labeled_ad_group;

        return $this;
    }

    /**
     * Gets labeled_ad_group_ad
     *
     * @return int|null
     */
    public function getLabeledAdGroupAd()
    {
        return $this->container['labeled_ad_group_ad'];
    }

    /**
     * Sets labeled_ad_group_ad
     *
     * @param int|null $labeled_ad_group_ad <ja>広告の紐付け数</ja><br><en>Number of labeled AdGroupAd</en>
     *
     * @return $this
     */
    public function setLabeledAdGroupAd($labeled_ad_group_ad)
    {
        $this->container['labeled_ad_group_ad'] = $labeled_ad_group_ad;

        return $this;
    }

    /**
     * Gets labeled_ad_group_criterion
     *
     * @return int|null
     */
    public function getLabeledAdGroupCriterion()
    {
        return $this->container['labeled_ad_group_criterion'];
    }

    /**
     * Sets labeled_ad_group_criterion
     *
     * @param int|null $labeled_ad_group_criterion <ja>キーワードの紐付け数</ja><br><en>Number of labeled Ad Group Criterion</en>
     *
     * @return $this
     */
    public function setLabeledAdGroupCriterion($labeled_ad_group_criterion)
    {
        $this->container['labeled_ad_group_criterion'] = $labeled_ad_group_criterion;

        return $this;
    }

    /**
     * Gets labeled_campaign
     *
     * @return int|null
     */
    public function getLabeledCampaign()
    {
        return $this->container['labeled_campaign'];
    }

    /**
     * Sets labeled_campaign
     *
     * @param int|null $labeled_campaign <ja>キャンペーンの紐付け数</ja><br><en>Number of labeled Campaign</en>
     *
     * @return $this
     */
    public function setLabeledCampaign($labeled_campaign)
    {
        $this->container['labeled_campaign'] = $labeled_campaign;

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

