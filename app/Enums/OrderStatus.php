<?php
/**
 * User: Zura
 * Date: 9/17/2022
 * Time: 6:34 AM
 */

namespace App\Enums;


/**
 * Class OrderStatus
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package App\Enums
 */
final class OrderStatus
{
    public const Unpaid = 'unpaid';
    public const Paid = 'paid';
    public const Cancelled = 'cancelled';
    public const Shipped = 'shipped';
    public const Completed = 'completed';

    public static function getStatuses(): array
    {
        return [
            self::Paid, self::Unpaid, self::Cancelled, self::Shipped, self::Completed
        ];
    }
}