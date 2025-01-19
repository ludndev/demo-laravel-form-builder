<?php

namespace App\Builder\Base;

use App\Builder\Type\FieldType;
use App\Builder\Type\GroupType;
use ReflectionClass;

class Base
{
    protected string $class = Base::class;

    /**
     * @param bool $noClass
     * @return array
     */
    final public function toArray(bool $noClass = false): array
    {
        $data = get_object_vars($this);

        foreach ($data as $attribute => $datum) {
            if (is_object($datum) && property_exists($datum, 'value')) {
                $data[$attribute] = $datum->value;
            }
        }

        if ($noClass && array_key_exists('class', $data)) unset($data['class']);

        return $data;
    }

    /**
     * @param $attributes
     * @return Base
     */
    final public static function fromArray($attributes): Base
    {
        $instance = new static();

        $reflection = new ReflectionClass($instance);

        if (array_key_exists('elements', $attributes)) {
            unset($attributes['elements']);
        }

        foreach ($attributes as $key => $value) {
            if ($reflection->hasProperty($key)) {
                $property = $reflection->getProperty($key);

                if (!$property->isPublic()) $property->setAccessible(true);

                if ($key == 'type') {
                    if (in_array($value, GroupType::values())) $value = GroupType::tryFrom($value);
                    if (in_array($value, FieldType::values())) $value = FieldType::tryFrom($value);
                }

                $instance->$key = $value;
            }
        }

        return $instance;
    }
}
