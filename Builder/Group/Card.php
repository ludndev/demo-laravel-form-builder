<?php

namespace App\Builder\Group;

use App\Builder\Base\BaseGroup;
use App\Builder\Type\GroupType;

class Card extends BaseGroup
{
    protected GroupType $type = GroupType::CARD;
}
