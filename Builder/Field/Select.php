<?php

namespace App\Builder\Field;

use App\Builder\Base\BaseMulti;
use App\Builder\Type\FieldType;

class Select extends BaseMulti
{
    protected FieldType $type = FieldType::SELECT;
}
