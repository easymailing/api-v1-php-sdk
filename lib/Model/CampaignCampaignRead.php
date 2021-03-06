<?php
/**
 * CampaignCampaignRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Easymailing API
 *
 * The Easymailing API is a set of REST APIs that enable you to programmatically manage Campaign, Audience, Suscribers, Stats and more.\\ The Easymailing API is organized around REST. Our API has predictable resource-oriented URLs and uses standard HTTP response codes, authentication, and verbs\\ This documents all the REST API methods, with example requests and responses. You can also load this into the Postman API Development Environment to interact with the API with your own Bearer tokens.\\ If there are other uses cases you'd like the API to support, please [contact us](https://ayuda.easymailing.com).
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CampaignCampaignRead Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignCampaignRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Campaign-campaign:read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
'status' => '\Swagger\Client\Model\CampaignStatus',
'template_thumbnail' => 'string',
'email_config' => 'AnyOfCampaignCampaignReadEmailConfig',
'campaign_config' => 'AnyOfCampaignCampaignReadCampaignConfig',
'campaign_config_send' => 'AnyOfCampaignCampaignReadCampaignConfigSend',
'campaign_send_stat' => 'AnyOfCampaignCampaignReadCampaignSendStat',
'template' => 'string',
'list_distribution' => 'string',
'list_segment' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
'status' => null,
'template_thumbnail' => null,
'email_config' => null,
'campaign_config' => null,
'campaign_config_send' => null,
'campaign_send_stat' => null,
'template' => 'iri-reference',
'list_distribution' => 'iri-reference',
'list_segment' => 'iri-reference',
'created_at' => 'date-time',
'updated_at' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
'status' => 'status',
'template_thumbnail' => 'template_thumbnail',
'email_config' => 'email_config',
'campaign_config' => 'campaign_config',
'campaign_config_send' => 'campaign_config_send',
'campaign_send_stat' => 'campaign_send_stat',
'template' => 'template',
'list_distribution' => 'list_distribution',
'list_segment' => 'list_segment',
'created_at' => 'created_at',
'updated_at' => 'updated_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
'status' => 'setStatus',
'template_thumbnail' => 'setTemplateThumbnail',
'email_config' => 'setEmailConfig',
'campaign_config' => 'setCampaignConfig',
'campaign_config_send' => 'setCampaignConfigSend',
'campaign_send_stat' => 'setCampaignSendStat',
'template' => 'setTemplate',
'list_distribution' => 'setListDistribution',
'list_segment' => 'setListSegment',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
'status' => 'getStatus',
'template_thumbnail' => 'getTemplateThumbnail',
'email_config' => 'getEmailConfig',
'campaign_config' => 'getCampaignConfig',
'campaign_config_send' => 'getCampaignConfigSend',
'campaign_send_stat' => 'getCampaignSendStat',
'template' => 'getTemplate',
'list_distribution' => 'getListDistribution',
'list_segment' => 'getListSegment',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt'    ];

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
        return self::$swaggerModelName;
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['template_thumbnail'] = isset($data['template_thumbnail']) ? $data['template_thumbnail'] : null;
        $this->container['email_config'] = isset($data['email_config']) ? $data['email_config'] : null;
        $this->container['campaign_config'] = isset($data['campaign_config']) ? $data['campaign_config'] : null;
        $this->container['campaign_config_send'] = isset($data['campaign_config_send']) ? $data['campaign_config_send'] : null;
        $this->container['campaign_send_stat'] = isset($data['campaign_send_stat']) ? $data['campaign_send_stat'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['list_distribution'] = isset($data['list_distribution']) ? $data['list_distribution'] : null;
        $this->container['list_segment'] = isset($data['list_segment']) ? $data['list_segment'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Campaign title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\CampaignStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\CampaignStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets template_thumbnail
     *
     * @return string
     */
    public function getTemplateThumbnail()
    {
        return $this->container['template_thumbnail'];
    }

    /**
     * Sets template_thumbnail
     *
     * @param string $template_thumbnail The campaign thumbnail url
     *
     * @return $this
     */
    public function setTemplateThumbnail($template_thumbnail)
    {
        $this->container['template_thumbnail'] = $template_thumbnail;

        return $this;
    }

    /**
     * Gets email_config
     *
     * @return AnyOfCampaignCampaignReadEmailConfig
     */
    public function getEmailConfig()
    {
        return $this->container['email_config'];
    }

    /**
     * Sets email_config
     *
     * @param AnyOfCampaignCampaignReadEmailConfig $email_config email_config
     *
     * @return $this
     */
    public function setEmailConfig($email_config)
    {
        $this->container['email_config'] = $email_config;

        return $this;
    }

    /**
     * Gets campaign_config
     *
     * @return AnyOfCampaignCampaignReadCampaignConfig
     */
    public function getCampaignConfig()
    {
        return $this->container['campaign_config'];
    }

    /**
     * Sets campaign_config
     *
     * @param AnyOfCampaignCampaignReadCampaignConfig $campaign_config campaign_config
     *
     * @return $this
     */
    public function setCampaignConfig($campaign_config)
    {
        $this->container['campaign_config'] = $campaign_config;

        return $this;
    }

    /**
     * Gets campaign_config_send
     *
     * @return AnyOfCampaignCampaignReadCampaignConfigSend
     */
    public function getCampaignConfigSend()
    {
        return $this->container['campaign_config_send'];
    }

    /**
     * Sets campaign_config_send
     *
     * @param AnyOfCampaignCampaignReadCampaignConfigSend $campaign_config_send campaign_config_send
     *
     * @return $this
     */
    public function setCampaignConfigSend($campaign_config_send)
    {
        $this->container['campaign_config_send'] = $campaign_config_send;

        return $this;
    }

    /**
     * Gets campaign_send_stat
     *
     * @return AnyOfCampaignCampaignReadCampaignSendStat
     */
    public function getCampaignSendStat()
    {
        return $this->container['campaign_send_stat'];
    }

    /**
     * Sets campaign_send_stat
     *
     * @param AnyOfCampaignCampaignReadCampaignSendStat $campaign_send_stat campaign_send_stat
     *
     * @return $this
     */
    public function setCampaignSendStat($campaign_send_stat)
    {
        $this->container['campaign_send_stat'] = $campaign_send_stat;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string $template Template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets list_distribution
     *
     * @return string
     */
    public function getListDistribution()
    {
        return $this->container['list_distribution'];
    }

    /**
     * Sets list_distribution
     *
     * @param string $list_distribution The audience to send the campaign
     *
     * @return $this
     */
    public function setListDistribution($list_distribution)
    {
        $this->container['list_distribution'] = $list_distribution;

        return $this;
    }

    /**
     * Gets list_segment
     *
     * @return string
     */
    public function getListSegment()
    {
        return $this->container['list_segment'];
    }

    /**
     * Sets list_segment
     *
     * @param string $list_segment List segment
     *
     * @return $this
     */
    public function setListSegment($list_segment)
    {
        $this->container['list_segment'] = $list_segment;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date & Time resource created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date & Time resource updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
