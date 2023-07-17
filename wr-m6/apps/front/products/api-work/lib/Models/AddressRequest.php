<?php
/**
 * AddressRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMail\ClickAndDrop\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelShipper & Royal Mail Public API
 *
 * Import your orders, retrieve your orders and generate labels.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.24-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMail\ClickAndDrop\Rest\Api\Models;

use \ArrayAccess;
use \RoyalMail\ClickAndDrop\Rest\Api\ObjectSerializer;

/**
 * AddressRequest Class Doc Comment
 *
 * @category Class
 * @package  RoyalMail\ClickAndDrop\Rest\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fullName' => 'string',
        'companyName' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressLine3' => 'string',
        'city' => 'string',
        'county' => 'string',
        'postcode' => 'string',
        'countryCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fullName' => null,
        'companyName' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'addressLine3' => null,
        'city' => null,
        'county' => null,
        'postcode' => null,
        'countryCode' => null
    ];

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
        'fullName' => 'fullName',
        'companyName' => 'companyName',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'addressLine3' => 'addressLine3',
        'city' => 'city',
        'county' => 'county',
        'postcode' => 'postcode',
        'countryCode' => 'countryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fullName' => 'setFullName',
        'companyName' => 'setCompanyName',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressLine3' => 'setAddressLine3',
        'city' => 'setCity',
        'county' => 'setCounty',
        'postcode' => 'setPostcode',
        'countryCode' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fullName' => 'getFullName',
        'companyName' => 'getCompanyName',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressLine3' => 'getAddressLine3',
        'city' => 'getCity',
        'county' => 'getCounty',
        'postcode' => 'getPostcode',
        'countryCode' => 'getCountryCode'
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
        $this->container['fullName'] = isset($data['fullName']) ? $data['fullName'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressLine3'] = isset($data['addressLine3']) ? $data['addressLine3'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['fullName']) && (mb_strlen($this->container['fullName']) > 210)) {
            $invalidProperties[] = "invalid value for 'fullName', the character length must be smaller than or equal to 210.";
        }

        if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 100)) {
            $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ((mb_strlen($this->container['addressLine1']) > 100)) {
            $invalidProperties[] = "invalid value for 'addressLine1', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['addressLine2']) && (mb_strlen($this->container['addressLine2']) > 100)) {
            $invalidProperties[] = "invalid value for 'addressLine2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['addressLine3']) && (mb_strlen($this->container['addressLine3']) > 100)) {
            $invalidProperties[] = "invalid value for 'addressLine3', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 100)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['county']) && (mb_strlen($this->container['county']) > 100)) {
            $invalidProperties[] = "invalid value for 'county', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['postcode']) && (mb_strlen($this->container['postcode']) > 20)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 20.";
        }

        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
        }
        if ((mb_strlen($this->container['countryCode']) > 3)) {
            $invalidProperties[] = "invalid value for 'countryCode', the character length must be smaller than or equal to 3.";
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
     * Gets fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['fullName'];
    }

    /**
     * Sets fullName
     *
     * @param string $fullName fullName
     *
     * @return $this
     */
    public function setFullName($fullName)
    {
        if (!is_null($fullName) && (mb_strlen($fullName) > 210)) {
            throw new \InvalidArgumentException('invalid length for $fullName when calling AddressRequest., must be smaller than or equal to 210.');
        }

        $this->container['fullName'] = $fullName;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string $companyName companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        if (!is_null($companyName) && (mb_strlen($companyName) > 100)) {
            throw new \InvalidArgumentException('invalid length for $companyName when calling AddressRequest., must be smaller than or equal to 100.');
        }

        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 addressLine1
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        if ((mb_strlen($addressLine1) > 100)) {
            throw new \InvalidArgumentException('invalid length for $addressLine1 when calling AddressRequest., must be smaller than or equal to 100.');
        }

        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string $addressLine2 addressLine2
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        if (!is_null($addressLine2) && (mb_strlen($addressLine2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $addressLine2 when calling AddressRequest., must be smaller than or equal to 100.');
        }

        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressLine3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['addressLine3'];
    }

    /**
     * Sets addressLine3
     *
     * @param string $addressLine3 addressLine3
     *
     * @return $this
     */
    public function setAddressLine3($addressLine3)
    {
        if (!is_null($addressLine3) && (mb_strlen($addressLine3) > 100)) {
            throw new \InvalidArgumentException('invalid length for $addressLine3 when calling AddressRequest., must be smaller than or equal to 100.');
        }

        $this->container['addressLine3'] = $addressLine3;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if ((mb_strlen($city) > 100)) {
            throw new \InvalidArgumentException('invalid length for $city when calling AddressRequest., must be smaller than or equal to 100.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county county
     *
     * @return $this
     */
    public function setCounty($county)
    {
        if (!is_null($county) && (mb_strlen($county) > 100)) {
            throw new \InvalidArgumentException('invalid length for $county when calling AddressRequest., must be smaller than or equal to 100.');
        }

        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        if (!is_null($postcode) && (mb_strlen($postcode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling AddressRequest., must be smaller than or equal to 20.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode countryCode
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        if ((mb_strlen($countryCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $countryCode when calling AddressRequest., must be smaller than or equal to 3.');
        }

        $this->container['countryCode'] = $countryCode;

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


