<?php
/**
 * ResponseUnReservedSchemaV60
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merchant APIs
 *
 * Technical document APIs for Merchant APIs
 *
 * The version of the OpenAPI document: 6.0
 * Contact: duong.vu@gotit.vn
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ResponseUnReservedSchemaV60 Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResponseUnReservedSchemaV60 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResponseUnReservedSchemaV60';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success' => 'bool',
        'returnCode' => 'string',
        'messageEn' => 'string',
        'messageVi' => 'string',
        'usedStore' => '\OpenAPI\Client\Model\ResponseReservedSchemaV60UsedStore',
        'billNumber' => 'string',
        'data' => '\OpenAPI\Client\Model\ResponseReservedSchemaV60DataInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'success' => null,
        'returnCode' => null,
        'messageEn' => null,
        'messageVi' => null,
        'usedStore' => null,
        'billNumber' => null,
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'success' => false,
        'returnCode' => false,
        'messageEn' => false,
        'messageVi' => false,
        'usedStore' => false,
        'billNumber' => false,
        'data' => false
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
        'success' => 'success',
        'returnCode' => 'return_code',
        'messageEn' => 'message_en',
        'messageVi' => 'message_vi',
        'usedStore' => 'used_store',
        'billNumber' => 'bill_number',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success' => 'setSuccess',
        'returnCode' => 'setReturnCode',
        'messageEn' => 'setMessageEn',
        'messageVi' => 'setMessageVi',
        'usedStore' => 'setUsedStore',
        'billNumber' => 'setBillNumber',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success' => 'getSuccess',
        'returnCode' => 'getReturnCode',
        'messageEn' => 'getMessageEn',
        'messageVi' => 'getMessageVi',
        'usedStore' => 'getUsedStore',
        'billNumber' => 'getBillNumber',
        'data' => 'getData'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('success', $data ?? [], null);
        $this->setIfExists('returnCode', $data ?? [], null);
        $this->setIfExists('messageEn', $data ?? [], null);
        $this->setIfExists('messageVi', $data ?? [], null);
        $this->setIfExists('usedStore', $data ?? [], null);
        $this->setIfExists('billNumber', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
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
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success success
     *
     * @return self
     */
    public function setSuccess($success)
    {
        if (is_null($success)) {
            throw new \InvalidArgumentException('non-nullable success cannot be null');
        }
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets returnCode
     *
     * @return string|null
     */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
     * Sets returnCode
     *
     * @param string|null $returnCode Result code if failed. Default is null
     *
     * @return self
     */
    public function setReturnCode($returnCode)
    {
        if (is_null($returnCode)) {
            throw new \InvalidArgumentException('non-nullable returnCode cannot be null');
        }
        $this->container['returnCode'] = $returnCode;

        return $this;
    }

    /**
     * Gets messageEn
     *
     * @return string|null
     */
    public function getMessageEn()
    {
        return $this->container['messageEn'];
    }

    /**
     * Sets messageEn
     *
     * @param string|null $messageEn Message notification in English
     *
     * @return self
     */
    public function setMessageEn($messageEn)
    {
        if (is_null($messageEn)) {
            throw new \InvalidArgumentException('non-nullable messageEn cannot be null');
        }
        $this->container['messageEn'] = $messageEn;

        return $this;
    }

    /**
     * Gets messageVi
     *
     * @return string|null
     */
    public function getMessageVi()
    {
        return $this->container['messageVi'];
    }

    /**
     * Sets messageVi
     *
     * @param string|null $messageVi Message notification in Vietnamese
     *
     * @return self
     */
    public function setMessageVi($messageVi)
    {
        if (is_null($messageVi)) {
            throw new \InvalidArgumentException('non-nullable messageVi cannot be null');
        }
        $this->container['messageVi'] = $messageVi;

        return $this;
    }

    /**
     * Gets usedStore
     *
     * @return \OpenAPI\Client\Model\ResponseReservedSchemaV60UsedStore|null
     */
    public function getUsedStore()
    {
        return $this->container['usedStore'];
    }

    /**
     * Sets usedStore
     *
     * @param \OpenAPI\Client\Model\ResponseReservedSchemaV60UsedStore|null $usedStore usedStore
     *
     * @return self
     */
    public function setUsedStore($usedStore)
    {
        if (is_null($usedStore)) {
            throw new \InvalidArgumentException('non-nullable usedStore cannot be null');
        }
        $this->container['usedStore'] = $usedStore;

        return $this;
    }

    /**
     * Gets billNumber
     *
     * @return string|null
     */
    public function getBillNumber()
    {
        return $this->container['billNumber'];
    }

    /**
     * Sets billNumber
     *
     * @param string|null $billNumber Bill number
     *
     * @return self
     */
    public function setBillNumber($billNumber)
    {
        if (is_null($billNumber)) {
            throw new \InvalidArgumentException('non-nullable billNumber cannot be null');
        }
        $this->container['billNumber'] = $billNumber;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \OpenAPI\Client\Model\ResponseReservedSchemaV60DataInner[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \OpenAPI\Client\Model\ResponseReservedSchemaV60DataInner[]|null $data Detail items of voucher, if result is failed, response will return the first voucher code which is invalid
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

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


