<?php

namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('username');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function beforeMarshal(\Cake\Event\Event $event, \ArrayObject $data, \ArrayObject $options) {
        if (!empty($data['password'])) {
            $this->validator()->add('passwd', [
                'compare' => [
                    'rule' => ['compareWith', 'password'],
                    'message' => __('Passwords do not match')
            ]]);
        } elseif (empty($data['password']) && !empty($data['id'])) {
            unset($data['password'], $data['passwd']);
            $this->validator()->allowEmpty('password')->allowEmpty('passwd');
        } elseif (empty($data['id'])) {
            $this->validator()->notEmpty('password', __('Required'))->notEmpty('passwd', __('Required'));
        }
//        debug()
    }

    public function validationDefault(Validator $validator) {
        $validator->integer('id')->allowEmpty('id', 'create');

        $validator->notBlank('username', __('Required', true));

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }

}
