<?php

namespace App\Model\Table;

use App\Model\Entity\Page;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use Cake\ORM\Entity;
use ArrayObject;
use Cake\Routing\Router;

/**
 * Pages Model
 *
 */
class PagesTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public $folder;
    public $imageSettings;

    public function initialize(array $config) {
        parent::initialize($config);


        $this->imageSettings = [
            'image' => [// The name of your upload field
                'folder' => 'img/uploads', // Customise the root upload folder here, or omit to use the default
                'width' => 300,
                'required' => true,
                'versions' => [
                    'thumb1' => [// Define the prefix of your thumbnail
                        'width' => 200, // Width
                    ],
                    'thumb2' => [// Define a second thumbnail
                        'width' => 100,
                        'height' => 300,
                        'crop' => true
                    ]],
            ]
        ];

        $this->addBehavior('Image', $this->imageSettings);
        $this->addBehavior('Tree');

        $this->belongsTo('Menus', ['forgienKey' => 'menu_id']);
        $this->table('pages');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create')
                ->notEmpty('image', __('Required', true), 'create')
                ->notEmpty('title', __('Required', true))
                ->notEmpty('content', __('Required', true))
                ->notEmpty('menu_id', __('Required', true));



        return $validator;
    }

}
