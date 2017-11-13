<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AnnualLeaves Model
 *
 * @method \App\Model\Entity\AnnualLeave get($primaryKey, $options = [])
 * @method \App\Model\Entity\AnnualLeave newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AnnualLeave[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AnnualLeave|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnnualLeave patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AnnualLeave[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AnnualLeave findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AnnualLeavesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('annual_leaves');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('id_number')
            ->requirePresence('id_number', 'create')
            ->notEmpty('id_number');

        $validator
            ->dateTime('id_expiry_date')
            ->requirePresence('id_expiry_date', 'create')
            ->notEmpty('id_expiry_date');

        $validator
            ->scalar('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number');

        $validator
            ->dateTime('leaving_date')
            ->requirePresence('leaving_date', 'create')
            ->notEmpty('leaving_date');

        return $validator;
    }
}
