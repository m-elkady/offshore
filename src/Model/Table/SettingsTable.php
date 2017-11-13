<?php

namespace App\Model\Table;

use App\Model\Entity\Setting;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Settings Model
 *
 */
class SettingsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public $vars = [
        'social_networks' => [
            'title' => 'Social network links',
            'fields' => [
                'facebook' => ['input' => ['type' => 'text', 'title' => 'Facebook']],
                'twitter' => ['input' => ['type' => 'text', 'title' => 'Twitter']],
                'linkedin' => ['input' => ['type' => 'text', 'title' => 'LinkedIn']],
                'youtube' => ['input' => ['type' => 'text', 'title' => 'Youtube']],
                'google_plus' => ['input' => ['type' => 'text', 'title' => 'Google Plus']],
            ],
            'validator' => 'social',
        ],
        'contact' => [
            'title' => 'Contact information',
            'fields' => [
                'email' => ['input' => ['type' => 'email', 'title' => 'Email']],
                'mobile' => ['input' => ['type' => 'textarea', 'title' => 'Mobile']],
                'telephone' => ['input' => ['type' => 'textarea', 'title' => 'Telephone']],
            ],
            'validator' => 'contacts',
        ],
        'general' => [
            'title' => 'General configuration',
            'fields' => [
//                'site_name_ar' => ['input' => ['type' => 'text', 'title' => 'Arabic Site name']],
                'site_name_en' => ['input' => ['type' => 'text', 'title' => 'English Site name']],
            ],
            'validator' => 'general',
        ]
    ];

    function initialize(array $config) {
        parent::initialize($config);

        $this->table('settings');
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
                ->allowEmpty('setting_value');

        $validator
                ->notEmpty('setting_key');

        return $validator;
    }

    public function validationSocial(Validator $validator) {
        $validator = $this->validationDefault($validator);
        $validator->notEmpty('setting_value', __('Required'));
        $validator->add('setting_value', 'url', [
            'message' => __('Please enter valid url'),
            'rule' => ['url', true]
        ]);
//        $validator->url('setting_value', __('Please enter valid url'));
        return $validator;
    }

    public function validationGeneral(Validator $validator) {
        $validator = $this->validationDefault($validator);
        $validator->notEmpty('setting_value', __('Required'));
        return $validator;
    }

    public function validationContacts(Validator $validator) {
        $validator = $this->validationDefault($validator);
        $validator->notEmpty('setting_value', __('Required'));
        $validator->add('setting_value', 'custom', [
            'rule' => function ($value, $context) use ($validator) {
                if ($context['data']['setting_key'] == 'email') {
                    return (boolean) filter_var($value, FILTER_VALIDATE_EMAIL);
                } else {
                    return true;
                }
//                debug([$value, $context]);
                exit;
            },
            'message' => __('Please enter a valid email')
        ]);
//        exit;
        return $validator;
    }

}
