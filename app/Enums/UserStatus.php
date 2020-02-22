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
    const NORMAL = 0;
    const INVALID = 1;

    public static function getDescription($value): string
	{
		switch ($value) {
			case self::NORMAL:
				return '正常';
				break;
			
			case self::INVALID:
				return '已删除';
				break;
		}
	    return parent::getDescription($value);
	}
}
