<?php

namespace App\Builder\Group;

use App\Builder\Base\BaseGroup;
use App\Builder\Type\GroupType;

class NoLabelCard extends BaseGroup
{
    protected GroupType $type = GroupType::CARD;

    public function setLabel(?string $label): NoLabelCard
    {
        return parent::setLabel(null);
    }
}
