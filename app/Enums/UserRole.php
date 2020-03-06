<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRole extends Enum
{
	// 身份
    const TEACHER = 1;
    const STUDENT = 2;
   
    public static function getDescription($value): string
	{
		switch ($value) {
			case self::TEACHER:
				return '老师';
				break;
			
			case self::STUDENT:
				return '学生';
				break;
		}
	    return parent::getDescription($value);
	}
}
