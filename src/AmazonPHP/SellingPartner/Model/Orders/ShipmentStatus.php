<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum.
     */
    final public const READY_FOR_PICKUP = 'ReadyForPickup';

    final public const PICKED_UP = 'PickedUp';

    final public const REFUSED_PICKUP = 'RefusedPickup';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::READY_FOR_PICKUP,
            self::PICKED_UP,
            self::REFUSED_PICKUP,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
