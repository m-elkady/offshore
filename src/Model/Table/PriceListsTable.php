<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PriceLists Model
 *
 * @method \App\Model\Entity\PriceList get($primaryKey, $options = [])
 * @method \App\Model\Entity\PriceList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PriceList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PriceList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PriceList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PriceList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PriceList findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PriceListsTable extends Table
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

        $this->setTable('price_lists');
        $this->setDisplayField('id');
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
            ->scalar('serial_no')
            ->requirePresence('serial_no', 'create')
            ->notEmpty('serial_no');

        $validator
            ->dateTime('date_of_issue')
            ->requirePresence('date_of_issue', 'create')
            ->notEmpty('date_of_issue');

        $validator
            ->scalar('client_name')
            ->requirePresence('client_name', 'create')
            ->notEmpty('client_name');

        $validator
            ->scalar('contact_person')
            ->requirePresence('contact_person', 'create')
            ->notEmpty('contact_person');

        $validator
            ->scalar('phone_number')
            ->requirePresence('phone_number', 'create')
            ->notEmpty('phone_number');

        return $validator;
    }
}
