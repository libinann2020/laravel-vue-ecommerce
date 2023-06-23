<?php
/**
 * User: Zura
 * Date: 9/17/2022
 * Time: 6:34 AM
 */

namespace App\Enums;


/**
 * Class PaymentStatus
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package App\Enums
 */
final class PaymentStatus
{
    public const Pending = 'pending';
    public const Paid = 'paid';
    public const Failed = 'failed';
}