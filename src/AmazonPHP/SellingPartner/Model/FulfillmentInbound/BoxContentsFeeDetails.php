<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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
class BoxContentsFeeDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'BoxContentsFeeDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_units' => 'int',
        'fee_per_unit' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount',
        'total_fee' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount',
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
        'total_units' => 'int32',
        'fee_per_unit' => null,
        'total_fee' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'total_units' => 'TotalUnits',
        'fee_per_unit' => 'FeePerUnit',
        'total_fee' => 'TotalFee',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_units' => 'setTotalUnits',
        'fee_per_unit' => 'setFeePerUnit',
        'total_fee' => 'setTotalFee',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_units' => 'getTotalUnits',
        'fee_per_unit' => 'getFeePerUnit',
        'total_fee' => 'getTotalFee',
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
        $this->container['total_units'] = $data['total_units'] ?? null;
        $this->container['fee_per_unit'] = $data['fee_per_unit'] ?? null;
        $this->container['total_fee'] = $data['total_fee'] ?? null;
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
        if ($this->container['fee_per_unit'] !== null) {
            $this->container['fee_per_unit']->validate();
        }

        if ($this->container['total_fee'] !== null) {
            $this->container['total_fee']->validate();
        }
    }

    /**
     * Gets total_units.
     */
    public function getTotalUnits() : ?int
    {
        return $this->container['total_units'];
    }

    /**
     * Sets total_units.
     *
     * @param null|int $total_units the item quantity
     */
    public function setTotalUnits(?int $total_units) : self
    {
        $this->container['total_units'] = $total_units;

        return $this;
    }

    /**
     * Gets fee_per_unit.
     */
    public function getFeePerUnit() : ?Amount
    {
        return $this->container['fee_per_unit'];
    }

    /**
     * Sets fee_per_unit.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount $fee_per_unit fee_per_unit
     */
    public function setFeePerUnit(?Amount $fee_per_unit) : self
    {
        $this->container['fee_per_unit'] = $fee_per_unit;

        return $this;
    }

    /**
     * Gets total_fee.
     */
    public function getTotalFee() : ?Amount
    {
        return $this->container['total_fee'];
    }

    /**
     * Sets total_fee.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Amount $total_fee total_fee
     */
    public function setTotalFee(?Amount $total_fee) : self
    {
        $this->container['total_fee'] = $total_fee;

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
