<?php
/**
 * ListGdprJsonld
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
 * ListGdprJsonld Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ListGdprJsonld implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListGdpr:jsonld';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'id' => 'int',
'enabled' => 'string',
'data_manager' => 'string',
'privacy_url' => 'string',
'list_gdpr_treatment_purposes' => '\Swagger\Client\Model\ListGdprTreatmentPurposeJsonld[]',
'list_distribution' => 'string',
'uuid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'id' => null,
'enabled' => null,
'data_manager' => 'iri-reference',
'privacy_url' => null,
'list_gdpr_treatment_purposes' => null,
'list_distribution' => 'iri-reference',
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
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'id' => 'id',
'enabled' => 'enabled',
'data_manager' => 'data_manager',
'privacy_url' => 'privacy_url',
'list_gdpr_treatment_purposes' => 'list_gdpr_treatment_purposes',
'list_distribution' => 'list_distribution',
'uuid' => 'uuid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'id' => 'setId',
'enabled' => 'setEnabled',
'data_manager' => 'setDataManager',
'privacy_url' => 'setPrivacyUrl',
'list_gdpr_treatment_purposes' => 'setListGdprTreatmentPurposes',
'list_distribution' => 'setListDistribution',
'uuid' => 'setUuid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'id' => 'getId',
'enabled' => 'getEnabled',
'data_manager' => 'getDataManager',
'privacy_url' => 'getPrivacyUrl',
'list_gdpr_treatment_purposes' => 'getListGdprTreatmentPurposes',
'list_distribution' => 'getListDistribution',
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['data_manager'] = isset($data['data_manager']) ? $data['data_manager'] : null;
        $this->container['privacy_url'] = isset($data['privacy_url']) ? $data['privacy_url'] : null;
        $this->container['list_gdpr_treatment_purposes'] = isset($data['list_gdpr_treatment_purposes']) ? $data['list_gdpr_treatment_purposes'] : null;
        $this->container['list_distribution'] = isset($data['list_distribution']) ? $data['list_distribution'] : null;
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
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
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
     * Gets enabled
     *
     * @return string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param string $enabled Enable GDPR tools
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets data_manager
     *
     * @return string
     */
    public function getDataManager()
    {
        return $this->container['data_manager'];
    }

    /**
     * Sets data_manager
     *
     * @param string $data_manager data_manager
     *
     * @return $this
     */
    public function setDataManager($data_manager)
    {
        $this->container['data_manager'] = $data_manager;

        return $this;
    }

    /**
     * Gets privacy_url
     *
     * @return string
     */
    public function getPrivacyUrl()
    {
        return $this->container['privacy_url'];
    }

    /**
     * Sets privacy_url
     *
     * @param string $privacy_url privacy_url
     *
     * @return $this
     */
    public function setPrivacyUrl($privacy_url)
    {
        $this->container['privacy_url'] = $privacy_url;

        return $this;
    }

    /**
     * Gets list_gdpr_treatment_purposes
     *
     * @return \Swagger\Client\Model\ListGdprTreatmentPurposeJsonld[]
     */
    public function getListGdprTreatmentPurposes()
    {
        return $this->container['list_gdpr_treatment_purposes'];
    }

    /**
     * Sets list_gdpr_treatment_purposes
     *
     * @param \Swagger\Client\Model\ListGdprTreatmentPurposeJsonld[] $list_gdpr_treatment_purposes list_gdpr_treatment_purposes
     *
     * @return $this
     */
    public function setListGdprTreatmentPurposes($list_gdpr_treatment_purposes)
    {
        $this->container['list_gdpr_treatment_purposes'] = $list_gdpr_treatment_purposes;

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
