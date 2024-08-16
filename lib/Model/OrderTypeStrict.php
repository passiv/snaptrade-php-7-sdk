<?php
/**
 * OrderTypeStrict
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapTrade
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SnapTrade
 *
 * Connect brokerage accounts to your app for live positions and trading
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@snaptrade.com
 * Generated by: https://konfigthis.com
 */


namespace SnapTrade\Model;
use \SnapTrade\ObjectSerializer;

/**
 * OrderTypeStrict Class Doc Comment
 *
 * @category Class
 * @description Order Type
 * @package  SnapTrade
 */
class OrderTypeStrict
{
    /**
     * Possible values of this enum
     */
    public const LIMIT = 'Limit';

    public const MARKET = 'Market';

    public const STOP_LIMIT = 'StopLimit';

    public const STOP = 'Stop';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIMIT,
            self::MARKET,
            self::STOP_LIMIT,
            self::STOP
        ];
    }
}


