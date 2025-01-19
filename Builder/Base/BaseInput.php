<?php

namespace App\Builder\Base;

use App\Builder\Type\FieldType;

class BaseInput extends Base
{
    protected string $class = BaseInput::class;
    protected FieldType $type;
    protected string $label;
    protected mixed $value;
    protected mixed $placeholder;
    protected mixed $selected; // can be used for default value
    protected ?int $decimal;
    protected ?int $row;
    protected ?int $min;
    protected ?int $max;
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
     * @return BaseInput
     */
    public function setType(FieldType $type): BaseInput
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
     * @return BaseInput
     */
    public function setLabel(string $label): BaseInput
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
     * @return BaseInput
     */
    public function setValue(mixed $value): BaseInput
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
     * @return BaseInput
     */
    public function setPlaceholder(mixed $placeholder): BaseInput
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
     * @return BaseInput
     */
    public function setSelected(mixed $selected): BaseInput
    {
        $this->selected = $selected;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRow(): mixed
    {
        return $this->row;
    }

    /**
     * @param mixed $row
     * @return BaseInput
     */
    public function setRow(mixed $row): BaseInput
    {
        $this->row = $row;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMin(): mixed
    {
        return $this->min;
    }

    /**
     * @param mixed $min
     * @return BaseInput
     */
    public function setMin(mixed $min): BaseInput
    {
        $this->min = $min;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMax(): mixed
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     * @return BaseInput
     */
    public function setMax(mixed $max): BaseInput
    {
        $this->max = $max;
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
     * @return BaseInput
     */
    public function setRequired(bool $required): BaseInput
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
     * @return BaseInput
     */
    public function setDisabled(bool $disabled): BaseInput
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDecimal(): ?int
    {
        return $this->decimal;
    }

    /**
     * @param int|null $decimal
     * @return BaseInput
     */
    public function setDecimal(?int $decimal): BaseInput
    {
        $this->decimal = $decimal;
        return $this;
    }
}
