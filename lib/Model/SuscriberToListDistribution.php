<?php
/**
 * SuscriberToListDistribution
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
 * SuscriberToListDistribution Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SuscriberToListDistribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SuscriberToListDistribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'suscriber' => 'string',
'list_distribution' => 'string',
'status' => 'string',
'source' => 'string',
'ip' => 'string',
'list_field_values' => 'string[]',
'rating' => 'string',
'deleted' => 'bool',
'suscriber_activities' => '\Swagger\Client\Model\SuscriberActivity[]',
'email_suscription_confirmations' => '\Swagger\Client\Model\EmailSuscriptionConfirmation[]',
'suscriber_consent' => 'AnyOfSuscriberToListDistributionSuscriberConsent',
'list_field_value' => 'string[]',
'_type' => '',
'_key' => '',
'_title' => '',
'_route' => '',
'_route_parameters' => '',
'admin_sent_suscription_email' => 'bool',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'uuid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'suscriber' => 'iri-reference',
'list_distribution' => 'iri-reference',
'status' => null,
'source' => null,
'ip' => null,
'list_field_values' => 'iri-reference',
'rating' => null,
'deleted' => null,
'suscriber_activities' => null,
'email_suscription_confirmations' => null,
'suscriber_consent' => null,
'list_field_value' => 'iri-reference',
'_type' => null,
'_key' => null,
'_title' => null,
'_route' => null,
'_route_parameters' => null,
'admin_sent_suscription_email' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'uuid' => 'uuid'    ];

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
        'id' => 'id',
'suscriber' => 'suscriber',
'list_distribution' => 'list_distribution',
'status' => 'status',
'source' => 'source',
'ip' => 'ip',
'list_field_values' => 'list_field_values',
'rating' => 'rating',
'deleted' => 'deleted',
'suscriber_activities' => 'suscriber_activities',
'email_suscription_confirmations' => 'email_suscription_confirmations',
'suscriber_consent' => 'suscriber_consent',
'list_field_value' => 'list_field_value',
'_type' => '_type',
'_key' => '_key',
'_title' => '_title',
'_route' => '_route',
'_route_parameters' => '_route_parameters',
'admin_sent_suscription_email' => 'admin_sent_suscription_email',
'created_at' => 'created_at',
'updated_at' => 'updated_at',
'uuid' => 'uuid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'suscriber' => 'setSuscriber',
'list_distribution' => 'setListDistribution',
'status' => 'setStatus',
'source' => 'setSource',
'ip' => 'setIp',
'list_field_values' => 'setListFieldValues',
'rating' => 'setRating',
'deleted' => 'setDeleted',
'suscriber_activities' => 'setSuscriberActivities',
'email_suscription_confirmations' => 'setEmailSuscriptionConfirmations',
'suscriber_consent' => 'setSuscriberConsent',
'list_field_value' => 'setListFieldValue',
'_type' => 'setType',
'_key' => 'setKey',
'_title' => 'setTitle',
'_route' => 'setRoute',
'_route_parameters' => 'setRouteParameters',
'admin_sent_suscription_email' => 'setAdminSentSuscriptionEmail',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'uuid' => 'setUuid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'suscriber' => 'getSuscriber',
'list_distribution' => 'getListDistribution',
'status' => 'getStatus',
'source' => 'getSource',
'ip' => 'getIp',
'list_field_values' => 'getListFieldValues',
'rating' => 'getRating',
'deleted' => 'getDeleted',
'suscriber_activities' => 'getSuscriberActivities',
'email_suscription_confirmations' => 'getEmailSuscriptionConfirmations',
'suscriber_consent' => 'getSuscriberConsent',
'list_field_value' => 'getListFieldValue',
'_type' => 'getType',
'_key' => 'getKey',
'_title' => 'getTitle',
'_route' => 'getRoute',
'_route_parameters' => 'getRouteParameters',
'admin_sent_suscription_email' => 'getAdminSentSuscriptionEmail',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'uuid' => 'getUuid'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['suscriber'] = isset($data['suscriber']) ? $data['suscriber'] : null;
        $this->container['list_distribution'] = isset($data['list_distribution']) ? $data['list_distribution'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['list_field_values'] = isset($data['list_field_values']) ? $data['list_field_values'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['suscriber_activities'] = isset($data['suscriber_activities']) ? $data['suscriber_activities'] : null;
        $this->container['email_suscription_confirmations'] = isset($data['email_suscription_confirmations']) ? $data['email_suscription_confirmations'] : null;
        $this->container['suscriber_consent'] = isset($data['suscriber_consent']) ? $data['suscriber_consent'] : null;
        $this->container['list_field_value'] = isset($data['list_field_value']) ? $data['list_field_value'] : null;
        $this->container['_type'] = isset($data['_type']) ? $data['_type'] : null;
        $this->container['_key'] = isset($data['_key']) ? $data['_key'] : null;
        $this->container['_title'] = isset($data['_title']) ? $data['_title'] : null;
        $this->container['_route'] = isset($data['_route']) ? $data['_route'] : null;
        $this->container['_route_parameters'] = isset($data['_route_parameters']) ? $data['_route_parameters'] : null;
        $this->container['admin_sent_suscription_email'] = isset($data['admin_sent_suscription_email']) ? $data['admin_sent_suscription_email'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['list_distribution'] === null) {
            $invalidProperties[] = "'list_distribution' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets suscriber
     *
     * @return string
     */
    public function getSuscriber()
    {
        return $this->container['suscriber'];
    }

    /**
     * Sets suscriber
     *
     * @param string $suscriber suscriber
     *
     * @return $this
     */
    public function setSuscriber($suscriber)
    {
        $this->container['suscriber'] = $suscriber;

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
     * @param string $list_distribution list_distribution
     *
     * @return $this
     */
    public function setListDistribution($list_distribution)
    {
        $this->container['list_distribution'] = $list_distribution;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets list_field_values
     *
     * @return string[]
     */
    public function getListFieldValues()
    {
        return $this->container['list_field_values'];
    }

    /**
     * Sets list_field_values
     *
     * @param string[] $list_field_values list_field_values
     *
     * @return $this
     */
    public function setListFieldValues($list_field_values)
    {
        $this->container['list_field_values'] = $list_field_values;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param string $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets suscriber_activities
     *
     * @return \Swagger\Client\Model\SuscriberActivity[]
     */
    public function getSuscriberActivities()
    {
        return $this->container['suscriber_activities'];
    }

    /**
     * Sets suscriber_activities
     *
     * @param \Swagger\Client\Model\SuscriberActivity[] $suscriber_activities suscriber_activities
     *
     * @return $this
     */
    public function setSuscriberActivities($suscriber_activities)
    {
        $this->container['suscriber_activities'] = $suscriber_activities;

        return $this;
    }

    /**
     * Gets email_suscription_confirmations
     *
     * @return \Swagger\Client\Model\EmailSuscriptionConfirmation[]
     */
    public function getEmailSuscriptionConfirmations()
    {
        return $this->container['email_suscription_confirmations'];
    }

    /**
     * Sets email_suscription_confirmations
     *
     * @param \Swagger\Client\Model\EmailSuscriptionConfirmation[] $email_suscription_confirmations email_suscription_confirmations
     *
     * @return $this
     */
    public function setEmailSuscriptionConfirmations($email_suscription_confirmations)
    {
        $this->container['email_suscription_confirmations'] = $email_suscription_confirmations;

        return $this;
    }

    /**
     * Gets suscriber_consent
     *
     * @return AnyOfSuscriberToListDistributionSuscriberConsent
     */
    public function getSuscriberConsent()
    {
        return $this->container['suscriber_consent'];
    }

    /**
     * Sets suscriber_consent
     *
     * @param AnyOfSuscriberToListDistributionSuscriberConsent $suscriber_consent suscriber_consent
     *
     * @return $this
     */
    public function setSuscriberConsent($suscriber_consent)
    {
        $this->container['suscriber_consent'] = $suscriber_consent;

        return $this;
    }

    /**
     * Gets list_field_value
     *
     * @return string[]
     */
    public function getListFieldValue()
    {
        return $this->container['list_field_value'];
    }

    /**
     * Sets list_field_value
     *
     * @param string[] $list_field_value Add listFieldValue.
     *
     * @return $this
     */
    public function setListFieldValue($list_field_value)
    {
        $this->container['list_field_value'] = $list_field_value;

        return $this;
    }

    /**
     * Gets _type
     *
     * @return 
     */
    public function getType()
    {
        return $this->container['_type'];
    }

    /**
     * Sets _type
     *
     * @param  $_type _type
     *
     * @return $this
     */
    public function setType($_type)
    {
        $this->container['_type'] = $_type;

        return $this;
    }

    /**
     * Gets _key
     *
     * @return 
     */
    public function getKey()
    {
        return $this->container['_key'];
    }

    /**
     * Sets _key
     *
     * @param  $_key _key
     *
     * @return $this
     */
    public function setKey($_key)
    {
        $this->container['_key'] = $_key;

        return $this;
    }

    /**
     * Gets _title
     *
     * @return 
     */
    public function getTitle()
    {
        return $this->container['_title'];
    }

    /**
     * Sets _title
     *
     * @param  $_title _title
     *
     * @return $this
     */
    public function setTitle($_title)
    {
        $this->container['_title'] = $_title;

        return $this;
    }

    /**
     * Gets _route
     *
     * @return 
     */
    public function getRoute()
    {
        return $this->container['_route'];
    }

    /**
     * Sets _route
     *
     * @param  $_route _route
     *
     * @return $this
     */
    public function setRoute($_route)
    {
        $this->container['_route'] = $_route;

        return $this;
    }

    /**
     * Gets _route_parameters
     *
     * @return 
     */
    public function getRouteParameters()
    {
        return $this->container['_route_parameters'];
    }

    /**
     * Sets _route_parameters
     *
     * @param  $_route_parameters _route_parameters
     *
     * @return $this
     */
    public function setRouteParameters($_route_parameters)
    {
        $this->container['_route_parameters'] = $_route_parameters;

        return $this;
    }

    /**
     * Gets admin_sent_suscription_email
     *
     * @return bool
     */
    public function getAdminSentSuscriptionEmail()
    {
        return $this->container['admin_sent_suscription_email'];
    }

    /**
     * Sets admin_sent_suscription_email
     *
     * @param bool $admin_sent_suscription_email admin_sent_suscription_email
     *
     * @return $this
     */
    public function setAdminSentSuscriptionEmail($admin_sent_suscription_email)
    {
        $this->container['admin_sent_suscription_email'] = $admin_sent_suscription_email;

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
     * @param \DateTime $created_at created_at
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
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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
