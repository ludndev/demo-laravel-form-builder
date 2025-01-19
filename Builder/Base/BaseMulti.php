<?php

namespace App\Builder\Base;

use App\Builder\Type\FieldType;

class BaseMulti extends Base
{
    protected string $class = BaseMulti::class;
    protected FieldType $type;
    protected string $label;
    protected mixed $value;
    protected mixed $placeholder;
    protected mixed $selected;
    protected array $options;
    protected bool $required;
    protected bool $disabled;

    /**
     * @return FieldType
     */
    public function getType(): FieldType
    {
        return $this->type;
    }

    /**
     * @param FieldType $type
     * @return BaseMulti
     */
    public function setType(FieldType $type): BaseMulti
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return BaseMulti
     */
    public function setLabel(string $label): BaseMulti
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return BaseMulti
     */
    public function setValue(mixed $value): BaseMulti
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder(): mixed
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     * @return BaseMulti
     */
    public function setPlaceholder(mixed $placeholder): BaseMulti
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelected(): mixed
    {
        return $this->selected;
    }

    /**
     * @param mixed $selected
     * @return BaseMulti
     */
    public function setSelected(mixed $selected): BaseMulti
    {
        $this->selected = $selected;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param array|null $options
     * @return BaseMulti
     */
    public function setOptions(?array $options): BaseMulti
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     * @return BaseMulti
     */
    public function setRequired(bool $required): BaseMulti
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     * @return BaseMulti
     */
    public function setDisabled(bool $disabled): BaseMulti
    {
        $this->disabled = $disabled;
        return $this;
    }
}
