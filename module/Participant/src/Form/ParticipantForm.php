<?php

namespace Participant\Form;

use Zend\Form\Form;

class ParticipantForm extends Form
{
    public function __construct($name = null)
    {

        parent::__construct('user');

        $this->setAttribute('class', 'form-horizontal');

        $this->add([
            'name' => 'id',
            'type' => 'Text',
            'options' => [
                'label' => 'Dossard n°',
            ],
        ]);

        $this->add([
            'name'    => 'firstname',
            'type'    => 'Text',
            'options' => [
                'label' => 'Prénom',
            ],
        ]);

        $this->add([
            'name'    => 'lastname',
            'type'    => 'Text',
            'options' => [
                'label' => 'Nom',
            ],
        ]);

        $this->add([
            'name'    => 'sex',
            'type'    => 'Radio',
            'options'    => [
                'label'            => 'Sexe',
                'label_attributes' => ['class' => 'checkbox-inline'],
                'value_options'    => [
                    [
                        'value'      => 'male',
                        'label'      => 'Homme',
                    ],
                    [
                        'value'      => 'female',
                        'label'      => 'Femme',
                    ]
                ]
            ],
        ]);

        $this->add([
            'name'    => 'event',
            'type'    => 'Select',
            'options' => array(
                'label' => 'Evènement',
                'value_options' => array(
                        '1' => 'Course de 12 km',
                        '2' => 'Semi Marathon',
                ),
        )
        ]);

        $this->add([
            'name'    => 'time',
            'type'    => 'Text',
            'options' => [
                'label' => 'Temps de passage',
                'maxlength' => 20,
            ],
        ]);

        $this->add([
            'name'       => 'submit',
            'type'       => 'submit',
            'attributes' => [
                'class' => 'btn btn-primary',
                'value' => 'Sauvegarder'
            ],
        ]);
    }
}