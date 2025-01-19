<?php

namespace App\Builder\Base;

use App\Builder\Type\GroupType;

class BaseGroup extends Base
{
    protected string $class = BaseGroup::class;
    protected ?string $label;
    protected GroupType $type;
    protected array $elements;

    /**
     * @param string|null $label
     * @param GroupType $type
     * @param array $elements
     * @return static
     */
    public function __construct(string $label = null, GroupType $type = GroupType::CARD, array $elements = [])
    {
        $this->label = $label;
        $this->type = $type;
        $this->elements = $elements;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     * @return BaseGroup
     */
    public function setLabel(?string $label): BaseGroup
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return GroupType
     */
    public function getType(): GroupType
    {
        return $this->type;
    }

    /**
     * @param GroupType $type
     * @return BaseGroup
     */
    public function setType(GroupType $type): BaseGroup
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     * @return BaseGroup
     */
    public function setElements(array $elements): BaseGroup
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @param string $index
     * @param BaseInput|BaseMulti $element
     * @return static
     */
    public function addElement(string $index, BaseInput|BaseMulti $element): static
    {
        $this->elements[$index] = $element;
        return $this;
    }
}
