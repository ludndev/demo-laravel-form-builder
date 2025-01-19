<?php

namespace App\Builder;

use App\Builder\Base\BaseGroup;
use App\Builder\Type\GroupType;
use Exception;

class FormBuilder
{
    protected array $groups = [];
    protected array $fields = [];

    /**
     * @return static
     */
    public function __construct()
    {
        return $this;
    }

    /**
     * @param BaseGroup $group
     * @return $this
     */
    public function addGroup(BaseGroup $group): static
    {
        $this->groups[] = $group;
        return $this;
    }

    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @return $this
     * @throws \Exception
     */
    public static function fromArray(array $data): static
    {
        $form = new static();

        foreach ($data as $item) {
            if (!array_key_exists('type', $item) || $item['type'] !== GroupType::CARD->value) {
                throw new Exception("Elements should be grouped in card or any equivalent group type.");
            }

            if (!array_key_exists('elements', $item)) {
                throw new Exception("This group doesn't have elements.");
            }

            $group = BaseGroup::fromArray($item);

            foreach ($item['elements'] as $index => $element) {
                $group->addElement($index, app($element['class'])::fromArray($element));
            }

            $form->groups[] = $group;
            $form->fields = array_merge($form->fields, $item['elements']);
        }

        return $form;
    }

    /**
     * @param bool $noClass
     * @return array
     */
    public function toArray(bool $noClass = false): array
    {
        $data = [];

        foreach ($this->groups as $item) {
            $group = $item->toArray($noClass);
            $elements = $item->getElements();

            foreach ($elements as $index => $element) {
                $group['elements'][$index] = $element->toArray($noClass);
            }

            $data[] = $group;
        }

        return $data;
    }
}
