<?php

namespace App\Builder\Field;

use App\Builder\Base\BaseInput;
use App\Builder\Type\FieldType;

class Number extends BaseInput
{
    protected FieldType $type = FieldType::INPUT_NUMBER;
}
