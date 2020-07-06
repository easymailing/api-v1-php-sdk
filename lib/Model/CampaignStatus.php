<?php
/**
 * CampaignStatus
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
 * CampaignStatus Class Doc Comment
 *
 * @category Class
 * @description Campaign status: * &#x60;campaign.status.draft&#x60; - Draft * &#x60;campaign.status.ready&#x60; - Ready to send * &#x60;campaign.status.scheduled&#x60; - Scheduled to send * &#x60;campaign.status.sending&#x60; - Sending * &#x60;campaign.status.sent&#x60; - Sent * &#x60;campaign.status.error&#x60; - An error ocurred sending the campaign
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignStatus
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'campaign.status.draft';
const READY = 'campaign.status.ready';
const SCHEDULED = 'campaign.status.scheduled';
const SENDING = 'campaign.status.sending';
const SENT = 'campaign.status.sent';
const ERROR = 'campaign.status.error';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
self::READY,
self::SCHEDULED,
self::SENDING,
self::SENT,
self::ERROR,        ];
    }
}
