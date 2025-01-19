<?php

namespace App\Builder\Type;

enum FieldType: string
{
    case INPUT_TEXT = 'input:text';
    case INPUT_NUMBER = 'input:number';
    case INPUT_ADDRESS = 'input:address';
    case TEXTAREA = 'textarea';
    case SELECT = 'select';
    case RADIO = 'radio';
    case CHECKBOX = 'checkbox';
    case FILE = 'file';

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
