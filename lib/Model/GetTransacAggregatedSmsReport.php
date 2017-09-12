<?php
/**
 * GetTransacAggregatedSmsReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;

/**
 * GetTransacAggregatedSmsReport Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetTransacAggregatedSmsReport implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getTransacAggregatedSmsReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'range' => 'string',
        'requests' => 'int',
        'delivered' => 'int',
        'hardBounces' => 'int',
        'softBounces' => 'int',
        'blocked' => 'int',
        'unsubscribed' => 'int',
        'replied' => 'int',
        'accepted' => 'int',
        'rejected' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'range' => null,
        'requests' => 'int32',
        'delivered' => 'int32',
        'hardBounces' => 'int32',
        'softBounces' => 'int32',
        'blocked' => 'int32',
        'unsubscribed' => 'int32',
        'replied' => 'int32',
        'accepted' => 'int32',
        'rejected' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'range' => 'range',
        'requests' => 'requests',
        'delivered' => 'delivered',
        'hardBounces' => 'hardBounces',
        'softBounces' => 'softBounces',
        'blocked' => 'blocked',
        'unsubscribed' => 'unsubscribed',
        'replied' => 'replied',
        'accepted' => 'accepted',
        'rejected' => 'rejected'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'range' => 'setRange',
        'requests' => 'setRequests',
        'delivered' => 'setDelivered',
        'hardBounces' => 'setHardBounces',
        'softBounces' => 'setSoftBounces',
        'blocked' => 'setBlocked',
        'unsubscribed' => 'setUnsubscribed',
        'replied' => 'setReplied',
        'accepted' => 'setAccepted',
        'rejected' => 'setRejected'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'range' => 'getRange',
        'requests' => 'getRequests',
        'delivered' => 'getDelivered',
        'hardBounces' => 'getHardBounces',
        'softBounces' => 'getSoftBounces',
        'blocked' => 'getBlocked',
        'unsubscribed' => 'getUnsubscribed',
        'replied' => 'getReplied',
        'accepted' => 'getAccepted',
        'rejected' => 'getRejected'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['requests'] = isset($data['requests']) ? $data['requests'] : null;
        $this->container['delivered'] = isset($data['delivered']) ? $data['delivered'] : null;
        $this->container['hardBounces'] = isset($data['hardBounces']) ? $data['hardBounces'] : null;
        $this->container['softBounces'] = isset($data['softBounces']) ? $data['softBounces'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['unsubscribed'] = isset($data['unsubscribed']) ? $data['unsubscribed'] : null;
        $this->container['replied'] = isset($data['replied']) ? $data['replied'] : null;
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['rejected'] = isset($data['rejected']) ? $data['rejected'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['range'] === null) {
            $invalid_properties[] = "'range' can't be null";
        }
        if ($this->container['requests'] === null) {
            $invalid_properties[] = "'requests' can't be null";
        }
        if ($this->container['delivered'] === null) {
            $invalid_properties[] = "'delivered' can't be null";
        }
        if ($this->container['hardBounces'] === null) {
            $invalid_properties[] = "'hardBounces' can't be null";
        }
        if ($this->container['softBounces'] === null) {
            $invalid_properties[] = "'softBounces' can't be null";
        }
        if ($this->container['blocked'] === null) {
            $invalid_properties[] = "'blocked' can't be null";
        }
        if ($this->container['unsubscribed'] === null) {
            $invalid_properties[] = "'unsubscribed' can't be null";
        }
        if ($this->container['replied'] === null) {
            $invalid_properties[] = "'replied' can't be null";
        }
        if ($this->container['accepted'] === null) {
            $invalid_properties[] = "'accepted' can't be null";
        }
        if ($this->container['rejected'] === null) {
            $invalid_properties[] = "'rejected' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['range'] === null) {
            return false;
        }
        if ($this->container['requests'] === null) {
            return false;
        }
        if ($this->container['delivered'] === null) {
            return false;
        }
        if ($this->container['hardBounces'] === null) {
            return false;
        }
        if ($this->container['softBounces'] === null) {
            return false;
        }
        if ($this->container['blocked'] === null) {
            return false;
        }
        if ($this->container['unsubscribed'] === null) {
            return false;
        }
        if ($this->container['replied'] === null) {
            return false;
        }
        if ($this->container['accepted'] === null) {
            return false;
        }
        if ($this->container['rejected'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets range
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     * @param string $range Time frame of the report
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets requests
     * @return int
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     * @param int $requests Number of requests for the timeframe
     * @return $this
     */
    public function setRequests($requests)
    {
        $this->container['requests'] = $requests;

        return $this;
    }

    /**
     * Gets delivered
     * @return int
     */
    public function getDelivered()
    {
        return $this->container['delivered'];
    }

    /**
     * Sets delivered
     * @param int $delivered Number of delivered SMS for the timeframe
     * @return $this
     */
    public function setDelivered($delivered)
    {
        $this->container['delivered'] = $delivered;

        return $this;
    }

    /**
     * Gets hardBounces
     * @return int
     */
    public function getHardBounces()
    {
        return $this->container['hardBounces'];
    }

    /**
     * Sets hardBounces
     * @param int $hardBounces Number of hardbounces for the timeframe
     * @return $this
     */
    public function setHardBounces($hardBounces)
    {
        $this->container['hardBounces'] = $hardBounces;

        return $this;
    }

    /**
     * Gets softBounces
     * @return int
     */
    public function getSoftBounces()
    {
        return $this->container['softBounces'];
    }

    /**
     * Sets softBounces
     * @param int $softBounces Number of softbounces for the timeframe
     * @return $this
     */
    public function setSoftBounces($softBounces)
    {
        $this->container['softBounces'] = $softBounces;

        return $this;
    }

    /**
     * Gets blocked
     * @return int
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     * @param int $blocked Number of blocked contact for the timeframe
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets unsubscribed
     * @return int
     */
    public function getUnsubscribed()
    {
        return $this->container['unsubscribed'];
    }

    /**
     * Sets unsubscribed
     * @param int $unsubscribed Number of unsubscription for the timeframe
     * @return $this
     */
    public function setUnsubscribed($unsubscribed)
    {
        $this->container['unsubscribed'] = $unsubscribed;

        return $this;
    }

    /**
     * Gets replied
     * @return int
     */
    public function getReplied()
    {
        return $this->container['replied'];
    }

    /**
     * Sets replied
     * @param int $replied Number of answered SMS for the timeframe
     * @return $this
     */
    public function setReplied($replied)
    {
        $this->container['replied'] = $replied;

        return $this;
    }

    /**
     * Gets accepted
     * @return int
     */
    public function getAccepted()
    {
        return $this->container['accepted'];
    }

    /**
     * Sets accepted
     * @param int $accepted Number of accepted for the timeframe
     * @return $this
     */
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;

        return $this;
    }

    /**
     * Gets rejected
     * @return int
     */
    public function getRejected()
    {
        return $this->container['rejected'];
    }

    /**
     * Sets rejected
     * @param int $rejected Number of rejected for the timeframe
     * @return $this
     */
    public function setRejected($rejected)
    {
        $this->container['rejected'] = $rejected;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


