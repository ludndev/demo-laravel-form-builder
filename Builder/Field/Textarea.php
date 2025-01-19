<?php

namespace App\Builder\Field;

use App\Builder\Base\BaseInput;
use App\Builder\Type\FieldType;

class Textarea extends BaseInput
{
    protected FieldType $type = FieldType::TEXTAREA;
    protected ?int $row = 5;
}
