<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserIsTourist extends Enum
{
    
    
   	const NOT_YET = 0;
   	const YES = 1;

    public static function getDescription($value): string
	{
		switch ($value) {
			case self::NOT_YET:
				return '非游客';
				break;
			
			case self::YES:
				return '游客';
				break;
		}
	    return parent::getDescription($value);
	}
}
