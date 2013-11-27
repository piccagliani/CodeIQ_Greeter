<?php
namespace Greeter;

class Greeter
{
    public function greet()
    {
        $hour = self::getHour();
        if (5 <= $hour && $hour < 12) {
            return 'おはようございます';
        }
        if (12 <= $hour && $hour < 18) {
            return 'こんにちは';
        }
        return 'こんばんは';
    }

    private static function getHour()
    {
        return date("G", time());
    }
} 