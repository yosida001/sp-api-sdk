<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateReturnItem implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateReturnItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'return_reason_code' => 'string',
        'return_comment' => 'string',
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
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'return_reason_code' => null,
        'return_comment' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'return_reason_code' => 'returnReasonCode',
        'return_comment' => 'returnComment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'return_reason_code' => 'setReturnReasonCode',
        'return_comment' => 'setReturnComment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'return_reason_code' => 'getReturnReasonCode',
        'return_comment' => 'getReturnComment',
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
        $this->container['seller_return_item_id'] = $data['seller_return_item_id'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['return_reason_code'] = $data['return_reason_code'] ?? null;
        $this->container['return_comment'] = $data['return_comment'] ?? null;
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
        if ($this->container['seller_return_item_id'] === null) {
            throw new AssertionException("'seller_return_item_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['seller_return_item_id']) > 80)) {
            throw new AssertionException("invalid value for 'seller_return_item_id', the character length must be smaller than or equal to 80.");
        }

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            throw new AssertionException("'seller_fulfillment_order_item_id' can't be null");
        }

        if ($this->container['amazon_shipment_id'] === null) {
            throw new AssertionException("'amazon_shipment_id' can't be null");
        }

        if ($this->container['return_reason_code'] === null) {
            throw new AssertionException("'return_reason_code' can't be null");
        }

        if (null !== $this->container['return_comment'] && (\mb_strlen((string) $this->container['return_comment']) > 1000)) {
            throw new AssertionException("invalid value for 'return_comment', the character length must be smaller than or equal to 1000.");
        }
    }

    /**
     * Gets seller_return_item_id.
     */
    public function getSellerReturnItemId() : string
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id.
     *
     * @param string $seller_return_item_id an identifier assigned by the seller to the return item
     */
    public function setSellerReturnItemId(string $seller_return_item_id) : self
    {
        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     */
    public function getSellerFulfillmentOrderItemId() : string
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id the identifier assigned to the item by the seller when the fulfillment order was created
     */
    public function setSellerFulfillmentOrderItemId(string $seller_fulfillment_order_item_id) : self
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id.
     */
    public function getAmazonShipmentId() : string
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id.
     *
     * @param string $amazon_shipment_id the identifier for the shipment that is associated with the return item
     */
    public function setAmazonShipmentId(string $amazon_shipment_id) : self
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets return_reason_code.
     */
    public function getReturnReasonCode() : string
    {
        return $this->container['return_reason_code'];
    }

    /**
     * Sets return_reason_code.
     *
     * @param string $return_reason_code the return reason code assigned to the return item by the seller
     */
    public function setReturnReasonCode(string $return_reason_code) : self
    {
        $this->container['return_reason_code'] = $return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment.
     */
    public function getReturnComment() : ?string
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment.
     *
     * @param null|string $return_comment an optional comment about the return item
     */
    public function setReturnComment(?string $return_comment) : self
    {
        $this->container['return_comment'] = $return_comment;

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
