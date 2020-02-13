<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static SECRET()
 * @method static static BOY()
 * @method static static GIRL()
 */
final class UserSex extends Enum
{
    const SECRET = 0;
    const BOY = 1;
    const GIRL = 2;

    public static function getDescription($value): string
	{
		switch ($value) {
			case self::SECRET:
				return '保密';
				break;
			
			case self::BOY:
				return '男';
				break;

			case self::GIRL:
				return '女';
				break;
		}
	    return parent::getDescription($value);
	}
}
