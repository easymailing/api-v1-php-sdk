<?php
/**
 * SuscriberSource
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
use \Swagger\Client\ObjectSerializer;

/**
 * SuscriberSource Class Doc Comment
 *
 * @category Class
 * @description Suscriber source: * &#x60;suscriber.source.manual&#x60; - Manually added by an admin * &#x60;suscriber.source.api&#x60; - Added through the API * &#x60;suscriber.source.webform&#x60; - Added from a webform * &#x60;suscriber.source.imported&#x60; - Added from an excel or csv importation
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SuscriberSource
{
    /**
     * Possible values of this enum
     */
    const MANUAL = 'suscriber.source.manual';
const API = 'suscriber.source.api';
const WEBFORM = 'suscriber.source.webform';
const IMPORTED = 'suscriber.source.imported';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MANUAL,
self::API,
self::WEBFORM,
self::IMPORTED,        ];
    }
}