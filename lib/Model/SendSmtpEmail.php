<?php
/**
 * SendSmtpEmail
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
 * SendSmtpEmail Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SendSmtpEmail implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sendSmtpEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sender' => '\SendinBlue\Client\Model\SendSmtpEmailSender',
        'to' => '\SendinBlue\Client\Model\SendSmtpEmailTo[]',
        'bcc' => '\SendinBlue\Client\Model\SendSmtpEmailBcc[]',
        'cc' => '\SendinBlue\Client\Model\SendSmtpEmailCc[]',
        'htmlContent' => 'string',
        'textContent' => 'string',
        'subject' => 'string',
        'replyTo' => '\SendinBlue\Client\Model\SendSmtpEmailReplyTo',
        'attachment' => '\SendinBlue\Client\Model\SendSmtpEmailAttachment[]',
        'headers' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sender' => null,
        'to' => null,
        'bcc' => null,
        'cc' => null,
        'htmlContent' => null,
        'textContent' => null,
        'subject' => null,
        'replyTo' => null,
        'attachment' => null,
        'headers' => null
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
        'sender' => 'sender',
        'to' => 'to',
        'bcc' => 'bcc',
        'cc' => 'cc',
        'htmlContent' => 'htmlContent',
        'textContent' => 'textContent',
        'subject' => 'subject',
        'replyTo' => 'replyTo',
        'attachment' => 'attachment',
        'headers' => 'headers'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'sender' => 'setSender',
        'to' => 'setTo',
        'bcc' => 'setBcc',
        'cc' => 'setCc',
        'htmlContent' => 'setHtmlContent',
        'textContent' => 'setTextContent',
        'subject' => 'setSubject',
        'replyTo' => 'setReplyTo',
        'attachment' => 'setAttachment',
        'headers' => 'setHeaders'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'sender' => 'getSender',
        'to' => 'getTo',
        'bcc' => 'getBcc',
        'cc' => 'getCc',
        'htmlContent' => 'getHtmlContent',
        'textContent' => 'getTextContent',
        'subject' => 'getSubject',
        'replyTo' => 'getReplyTo',
        'attachment' => 'getAttachment',
        'headers' => 'getHeaders'
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
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['htmlContent'] = isset($data['htmlContent']) ? $data['htmlContent'] : null;
        $this->container['textContent'] = isset($data['textContent']) ? $data['textContent'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['to'] === null) {
            $invalid_properties[] = "'to' can't be null";
        }
        if ($this->container['htmlContent'] === null) {
            $invalid_properties[] = "'htmlContent' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalid_properties[] = "'subject' can't be null";
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

        if ($this->container['to'] === null) {
            return false;
        }
        if ($this->container['htmlContent'] === null) {
            return false;
        }
        if ($this->container['subject'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sender
     * @return \SendinBlue\Client\Model\SendSmtpEmailSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \SendinBlue\Client\Model\SendSmtpEmailSender $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets to
     * @return \SendinBlue\Client\Model\SendSmtpEmailTo[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param \SendinBlue\Client\Model\SendSmtpEmailTo[] $to Email addresses and names of the recipients
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets bcc
     * @return \SendinBlue\Client\Model\SendSmtpEmailBcc[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     * @param \SendinBlue\Client\Model\SendSmtpEmailBcc[] $bcc Email addresses and names of the recipients in bcc
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets cc
     * @return \SendinBlue\Client\Model\SendSmtpEmailCc[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     * @param \SendinBlue\Client\Model\SendSmtpEmailCc[] $cc Email addresses and names of the recipients in cc
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets htmlContent
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['htmlContent'];
    }

    /**
     * Sets htmlContent
     * @param string $htmlContent HTML body of the message
     * @return $this
     */
    public function setHtmlContent($htmlContent)
    {
        $this->container['htmlContent'] = $htmlContent;

        return $this;
    }

    /**
     * Gets textContent
     * @return string
     */
    public function getTextContent()
    {
        return $this->container['textContent'];
    }

    /**
     * Sets textContent
     * @param string $textContent Plain Text body of the message
     * @return $this
     */
    public function setTextContent($textContent)
    {
        $this->container['textContent'] = $textContent;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject of the message
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets replyTo
     * @return \SendinBlue\Client\Model\SendSmtpEmailReplyTo
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     * @param \SendinBlue\Client\Model\SendSmtpEmailReplyTo $replyTo
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets attachment
     * @return \SendinBlue\Client\Model\SendSmtpEmailAttachment[]
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     * @param \SendinBlue\Client\Model\SendSmtpEmailAttachment[] $attachment Pass the absolute URL (no local file) or the base64 content of the attachment. Name can be used in both cases to define the attachment name. It is mandatory in case of content. Extension allowed: gif, png, bmp, cgm, jpg, jpeg, tif, tiff, rtf, txt, css, shtml, html, htm, csv, zip, pdf, xml, ods, doc, docx, docm, ics, xls, xlsx, ppt, tar, and ez
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

        return $this;
    }

    /**
     * Gets headers
     * @return map[string,string]
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     * @param map[string,string] $headers
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

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


