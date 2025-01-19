<?php

namespace App\Models;

use App\Builder\Field\Address;
use App\Builder\FormBuilder;
use App\Builder\Group\Card;
use App\Builder\Field\Select;
use App\Builder\Field\Textarea;
use App\Shared\ServiceModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceDemo extends ServiceModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level',
        'address',
        'details',
        'metadata',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'metadata',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'metadata' => 'array',
    ];

    /**
     * @return array
     */
    public static function builder(): array
    {
        $form = new FormBuilder();

        # -----

        $card = new Card(label: 'Information');

        $element = new Select();
        $element->setLabel('Level');
        $element->setOptions([
            'low' => 'Faible',
            'medium' => 'Moyen',
            'high' => 'Elevée',
        ]);
        $card->addElement('level', $element);

        $element = new Address();
        $element->setLabel('Address');
        $card->addElement('address', $element);

        $form->addGroup($card);

        # -----

        $card = new Card(label: 'Optional');

        $element = new Textarea();
        $element->setLabel('Detail');
        $element->setRow(5);
        $card->addElement('details', $element);

        $form->addGroup($card);

        # -----

        return $form->toArray();
    }
}
