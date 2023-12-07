<?php
/**
 * EmailNotificationDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  AirEml
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * airEml - API
 *
 * airEml - API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AirEml\Model;

use \ArrayAccess;
use \AirEml\ObjectSerializer;

/**
 * EmailNotificationDetails Class Doc Comment
 *
 * @category Class
 * @package  AirEml
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailNotificationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailNotificationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'locale' => '\AirEml\Model\LocaleCode',
        'recipient_id' => 'string',
        'to_name' => 'string',
        'to_email_address' => 'string',
        'from_name' => 'string',
        'from_email_address' => 'string',
        'status' => 'int',
        'custom_params' => 'object',
        'created_at' => '\DateTime',
        'opens' => '\AirEml\Model\EmailNotificationOpen[]',
        'clicks' => '\AirEml\Model\EmailNotificationClick[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'locale' => null,
        'recipient_id' => null,
        'to_name' => null,
        'to_email_address' => null,
        'from_name' => null,
        'from_email_address' => null,
        'status' => null,
        'custom_params' => null,
        'created_at' => 'date-time',
        'opens' => null,
        'clicks' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'locale' => false,
        'recipient_id' => false,
        'to_name' => false,
        'to_email_address' => false,
        'from_name' => false,
        'from_email_address' => false,
        'status' => false,
        'custom_params' => false,
        'created_at' => false,
        'opens' => false,
        'clicks' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'locale' => 'locale',
        'recipient_id' => 'recipient_id',
        'to_name' => 'to_name',
        'to_email_address' => 'to_email_address',
        'from_name' => 'from_name',
        'from_email_address' => 'from_email_address',
        'status' => 'status',
        'custom_params' => 'custom_params',
        'created_at' => 'created_at',
        'opens' => 'opens',
        'clicks' => 'clicks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'locale' => 'setLocale',
        'recipient_id' => 'setRecipientId',
        'to_name' => 'setToName',
        'to_email_address' => 'setToEmailAddress',
        'from_name' => 'setFromName',
        'from_email_address' => 'setFromEmailAddress',
        'status' => 'setStatus',
        'custom_params' => 'setCustomParams',
        'created_at' => 'setCreatedAt',
        'opens' => 'setOpens',
        'clicks' => 'setClicks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'locale' => 'getLocale',
        'recipient_id' => 'getRecipientId',
        'to_name' => 'getToName',
        'to_email_address' => 'getToEmailAddress',
        'from_name' => 'getFromName',
        'from_email_address' => 'getFromEmailAddress',
        'status' => 'getStatus',
        'custom_params' => 'getCustomParams',
        'created_at' => 'getCreatedAt',
        'opens' => 'getOpens',
        'clicks' => 'getClicks'
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

    public const STATUS_1 = 1;
    public const STATUS_2 = 2;
    public const STATUS_3 = 3;
    public const STATUS_4 = 4;
    public const STATUS_5 = 5;
    public const STATUS_6 = 6;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_1,
            self::STATUS_2,
            self::STATUS_3,
            self::STATUS_4,
            self::STATUS_5,
            self::STATUS_6,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('recipient_id', $data ?? [], null);
        $this->setIfExists('to_name', $data ?? [], null);
        $this->setIfExists('to_email_address', $data ?? [], null);
        $this->setIfExists('from_name', $data ?? [], null);
        $this->setIfExists('from_email_address', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('custom_params', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('opens', $data ?? [], null);
        $this->setIfExists('clicks', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The unique identifier of the Notification.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \AirEml\Model\LocaleCode|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \AirEml\Model\LocaleCode|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets recipient_id
     *
     * @return string|null
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     *
     * @param string|null $recipient_id The ID of recipient.
     *
     * @return self
     */
    public function setRecipientId($recipient_id)
    {
        if (is_null($recipient_id)) {
            throw new \InvalidArgumentException('non-nullable recipient_id cannot be null');
        }
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets to_name
     *
     * @return string|null
     */
    public function getToName()
    {
        return $this->container['to_name'];
    }

    /**
     * Sets to_name
     *
     * @param string|null $to_name The name of the recipient.
     *
     * @return self
     */
    public function setToName($to_name)
    {
        if (is_null($to_name)) {
            throw new \InvalidArgumentException('non-nullable to_name cannot be null');
        }
        $this->container['to_name'] = $to_name;

        return $this;
    }

    /**
     * Gets to_email_address
     *
     * @return string|null
     */
    public function getToEmailAddress()
    {
        return $this->container['to_email_address'];
    }

    /**
     * Sets to_email_address
     *
     * @param string|null $to_email_address The email address of the recipient.
     *
     * @return self
     */
    public function setToEmailAddress($to_email_address)
    {
        if (is_null($to_email_address)) {
            throw new \InvalidArgumentException('non-nullable to_email_address cannot be null');
        }
        $this->container['to_email_address'] = $to_email_address;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string|null
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string|null $from_name The name of the sender.
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        if (is_null($from_name)) {
            throw new \InvalidArgumentException('non-nullable from_name cannot be null');
        }
        $this->container['from_name'] = $from_name;

        return $this;
    }

    /**
     * Gets from_email_address
     *
     * @return string|null
     */
    public function getFromEmailAddress()
    {
        return $this->container['from_email_address'];
    }

    /**
     * Sets from_email_address
     *
     * @param string|null $from_email_address The email address of the sender.
     *
     * @return self
     */
    public function setFromEmailAddress($from_email_address)
    {
        if (is_null($from_email_address)) {
            throw new \InvalidArgumentException('non-nullable from_email_address cannot be null');
        }
        $this->container['from_email_address'] = $from_email_address;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status The state of the Notification status.  - 1: Notification Accepted  - 2: Notification Blocked  - 3: Notification Sent  - 4: Notification Not Sent  - 5: Notification Delivered  - 6: Notification Not Delivered
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets custom_params
     *
     * @return object|null
     */
    public function getCustomParams()
    {
        return $this->container['custom_params'];
    }

    /**
     * Sets custom_params
     *
     * @param object|null $custom_params The custom parameters of the notification.
     *
     * @return self
     */
    public function setCustomParams($custom_params)
    {
        if (is_null($custom_params)) {
            throw new \InvalidArgumentException('non-nullable custom_params cannot be null');
        }
        $this->container['custom_params'] = $custom_params;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The datetime when the Notification was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets opens
     *
     * @return \AirEml\Model\EmailNotificationOpen[]|null
     */
    public function getOpens()
    {
        return $this->container['opens'];
    }

    /**
     * Sets opens
     *
     * @param \AirEml\Model\EmailNotificationOpen[]|null $opens opens
     *
     * @return self
     */
    public function setOpens($opens)
    {
        if (is_null($opens)) {
            throw new \InvalidArgumentException('non-nullable opens cannot be null');
        }
        $this->container['opens'] = $opens;

        return $this;
    }

    /**
     * Gets clicks
     *
     * @return \AirEml\Model\EmailNotificationClick[]|null
     */
    public function getClicks()
    {
        return $this->container['clicks'];
    }

    /**
     * Sets clicks
     *
     * @param \AirEml\Model\EmailNotificationClick[]|null $clicks clicks
     *
     * @return self
     */
    public function setClicks($clicks)
    {
        if (is_null($clicks)) {
            throw new \InvalidArgumentException('non-nullable clicks cannot be null');
        }
        $this->container['clicks'] = $clicks;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


