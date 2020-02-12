<?php

namespace App\Models\Enum;

class UserEnum
{
    // 性别
    const SECRET = 0; //保密
    const BOY = 1; //男
    const GIRL = 2; //女

    // 状态
    const NORMAL = 0; //正常
    const INVALID = 1; //已删除

    public static function getSexName($sex)
    {
        switch ($sex){
            case self::SECRET:
                return '保密';
            case self::BOY:
                return '男';
            case self::GIRL:
                return '女';
        }
    }

    public static function getStatusName($status)
    {
        switch ($status){
            case self::NORMAL:
                return '正常';
            case self::INVALID:
                return '已删除';
        }
    }
}