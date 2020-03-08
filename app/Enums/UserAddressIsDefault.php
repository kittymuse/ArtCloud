<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserAddressIsDefault extends Enum
{
    // 是否为默认地址
   	const NOT_YET = 0;
   	const YES = 1;

    public static function getDescription($value): string
	{
		switch ($value) {
			case self::NOT_YET:
				return '非默认地址';
				break;
			
			case self::YES:
				return '默认地址';
				break;
		}
	    return parent::getDescription($value);
	}
}
