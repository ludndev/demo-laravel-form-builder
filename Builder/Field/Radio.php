<?php

namespace App\Builder\Field;

use App\Builder\Base\BaseMulti;
use App\Builder\Type\FieldType;

class Radio extends BaseMulti
{
    protected FieldType $type = FieldType::RADIO;
}
