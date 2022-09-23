<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FileContents implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'FileContents';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'contents' => 'string',
        'file_type' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\FileType',
        'checksum' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'contents' => null,
        'file_type' => null,
        'checksum' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'contents' => 'Contents',
        'file_type' => 'FileType',
        'checksum' => 'Checksum',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'contents' => 'setContents',
        'file_type' => 'setFileType',
        'checksum' => 'setChecksum',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'contents' => 'getContents',
        'file_type' => 'getFileType',
        'checksum' => 'getChecksum',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['contents'] = $data['contents'] ?? null;
        $this->container['file_type'] = $data['file_type'] ?? null;
        $this->container['checksum'] = $data['checksum'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['contents'] === null) {
            throw new AssertionException("'contents' can't be null");
        }

        if ($this->container['file_type'] === null) {
            throw new AssertionException("'file_type' can't be null");
        }

        if ($this->container['checksum'] === null) {
            throw new AssertionException("'checksum' can't be null");
        }
    }

    /**
     * Gets contents.
     */
    public function getContents() : string
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents.
     *
     * @param string $contents data for printing labels, in the form of a Base64-encoded, GZip-compressed string
     */
    public function setContents(string $contents) : self
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets file_type.
     */
    public function getFileType() : FileType
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\FileType $file_type file_type
     */
    public function setFileType(FileType $file_type) : self
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets checksum.
     */
    public function getChecksum() : string
    {
        return $this->container['checksum'];
    }

    /**
     * Sets checksum.
     *
     * @param string $checksum an MD5 hash to validate the PDF document data, in the form of a Base64-encoded string
     */
    public function setChecksum(string $checksum) : self
    {
        $this->container['checksum'] = $checksum;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string|bool
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string|bool
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
