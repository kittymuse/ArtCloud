<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Image extends Enum
{
	// 图片路径
    const USERS_AVATAR = 1;
   
    public static function getDescription($value): string
	{
		switch ($value) {
			case self::USERS_AVATAR:
				return 'users/avatar';
				break;
		}
	    return parent::getDescription($value);
	}
}
