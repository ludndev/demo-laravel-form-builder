<?php

namespace App\Builder\Field;

use App\Builder\Base\BaseInput;
use App\Builder\Type\FieldType;

class Decimal extends BaseInput
{
    protected FieldType $type = FieldType::INPUT_NUMBER;
    protected ?int $decimal = 2;
}
