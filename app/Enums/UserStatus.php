<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NORMAL()
 * @method static static INVALID()
 */
final class UserStatus extends Enum
{
    // 状态
    const NORMAL = 0; //正常
    const INVALID = 1; //已删除
}
