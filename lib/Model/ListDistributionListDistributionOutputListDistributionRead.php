<?php
/**
 * ListDistributionListDistributionOutputListDistributionRead
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
 * ListDistributionListDistributionOutputListDistributionRead Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListDistributionListDistributionOutputListDistributionRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListDistribution:ListDistributionOutput-list_distribution:read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
'description' => 'string',
'list_segments' => '\Swagger\Client\Model\ListSegmentListDistributionRead[]',
'list_fields' => '\Swagger\Client\Model\ListFieldListFieldOutputListDistributionRead[]',
'list_gdpr' => '\Swagger\Client\Model\ListGdprListDistributionRead',
'total_suscribers' => 'int',
'active_suscribers' => 'int',
'unsuscribed' => 'int',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
'description' => null,
'list_segments' => null,
'list_fields' => null,
'list_gdpr' => null,
'total_suscribers' => null,
'active_suscribers' => null,
'unsuscribed' => null,
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
'description' => 'description',
'list_segments' => 'list_segments',
'list_fields' => 'list_fields',
'list_gdpr' => 'list_gdpr',
'total_suscribers' => 'total_suscribers',
'active_suscribers' => 'active_suscribers',
'unsuscribed' => 'unsuscribed',
'created_at' => 'created_at',
'updated_at' => 'updated_at'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
'description' => 'setDescription',
'list_segments' => 'setListSegments',
'list_fields' => 'setListFields',
'list_gdpr' => 'setListGdpr',
'total_suscribers' => 'setTotalSuscribers',
'active_suscribers' => 'setActiveSuscribers',
'unsuscribed' => 'setUnsuscribed',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
'description' => 'getDescription',
'list_segments' => 'getListSegments',
'list_fields' => 'getListFields',
'list_gdpr' => 'getListGdpr',
'total_suscribers' => 'getTotalSuscribers',
'active_suscribers' => 'getActiveSuscribers',
'unsuscribed' => 'getUnsuscribed',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['list_segments'] = isset($data['list_segments']) ? $data['list_segments'] : null;
        $this->container['list_fields'] = isset($data['list_fields']) ? $data['list_fields'] : null;
        $this->container['list_gdpr'] = isset($data['list_gdpr']) ? $data['list_gdpr'] : null;
        $this->container['total_suscribers'] = isset($data['total_suscribers']) ? $data['total_suscribers'] : null;
        $this->container['active_suscribers'] = isset($data['active_suscribers']) ? $data['active_suscribers'] : null;
        $this->container['unsuscribed'] = isset($data['unsuscribed']) ? $data['unsuscribed'] : null;
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
     * @param string $title Aundience title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Aundience description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets list_segments
     *
     * @return \Swagger\Client\Model\ListSegmentListDistributionRead[]
     */
    public function getListSegments()
    {
        return $this->container['list_segments'];
    }

    /**
     * Sets list_segments
     *
     * @param \Swagger\Client\Model\ListSegmentListDistributionRead[] $list_segments list_segments
     *
     * @return $this
     */
    public function setListSegments($list_segments)
    {
        $this->container['list_segments'] = $list_segments;

        return $this;
    }

    /**
     * Gets list_fields
     *
     * @return \Swagger\Client\Model\ListFieldListFieldOutputListDistributionRead[]
     */
    public function getListFields()
    {
        return $this->container['list_fields'];
    }

    /**
     * Sets list_fields
     *
     * @param \Swagger\Client\Model\ListFieldListFieldOutputListDistributionRead[] $list_fields list_fields
     *
     * @return $this
     */
    public function setListFields($list_fields)
    {
        $this->container['list_fields'] = $list_fields;

        return $this;
    }

    /**
     * Gets list_gdpr
     *
     * @return \Swagger\Client\Model\ListGdprListDistributionRead
     */
    public function getListGdpr()
    {
        return $this->container['list_gdpr'];
    }

    /**
     * Sets list_gdpr
     *
     * @param \Swagger\Client\Model\ListGdprListDistributionRead $list_gdpr list_gdpr
     *
     * @return $this
     */
    public function setListGdpr($list_gdpr)
    {
        $this->container['list_gdpr'] = $list_gdpr;

        return $this;
    }

    /**
     * Gets total_suscribers
     *
     * @return int
     */
    public function getTotalSuscribers()
    {
        return $this->container['total_suscribers'];
    }

    /**
     * Sets total_suscribers
     *
     * @param int $total_suscribers Total suscribers
     *
     * @return $this
     */
    public function setTotalSuscribers($total_suscribers)
    {
        $this->container['total_suscribers'] = $total_suscribers;

        return $this;
    }

    /**
     * Gets active_suscribers
     *
     * @return int
     */
    public function getActiveSuscribers()
    {
        return $this->container['active_suscribers'];
    }

    /**
     * Sets active_suscribers
     *
     * @param int $active_suscribers Active suscribers
     *
     * @return $this
     */
    public function setActiveSuscribers($active_suscribers)
    {
        $this->container['active_suscribers'] = $active_suscribers;

        return $this;
    }

    /**
     * Gets unsuscribed
     *
     * @return int
     */
    public function getUnsuscribed()
    {
        return $this->container['unsuscribed'];
    }

    /**
     * Sets unsuscribed
     *
     * @param int $unsuscribed Total unsuscribed
     *
     * @return $this
     */
    public function setUnsuscribed($unsuscribed)
    {
        $this->container['unsuscribed'] = $unsuscribed;

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
