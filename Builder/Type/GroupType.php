<?php

namespace App\Builder\Type;

enum GroupType: string
{
    case CARD = 'card';

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
