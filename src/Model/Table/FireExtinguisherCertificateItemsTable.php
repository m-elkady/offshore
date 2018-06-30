<?php

namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FireExtinguisherCertificateItems Model
 *
 * @property \App\Model\Table\FireExtinguisherCertificatesTable|\Cake\ORM\Association\BelongsTo
 *           $FireExtinguisherCertificates
 * @property \App\Model\Table\FireExtinguisherCertificatesTable|\Cake\ORM\Association\BelongsTo
 *           $FireExtinguisherItemTypes
 *
 * @method \App\Model\Entity\FireExtinguisherCertificateItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificateItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificateItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificateItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificateItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificateItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificateItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FireExtinguisherCertificateItemsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     *
     * @return void
     */
    public $capacityUnits = [1 => 'Kg', 2 => 'LTR', 3 => 'LB'];
    public $statuses      = [1 => 'Inspected', 2 => 'Refilled', 3 => 'Hydrostatic Test', 4 => 'Serviced', 5 => 'New Supply'];

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('fire_extinguisher_certificate_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('FireExtinguisherCertificates', [
            'foreignKey' => 'fire_extinguisher_certificate_id',
        ]);
        $this->belongsTo('FireExtinguisherItemTypes', [
            'foreignKey' => 'fire_extinguisher_item_type_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     *
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('quantity')
            ->allowEmpty('quantity');

        $validator
            ->scalar('serial_no')
            ->allowEmpty('serial_no');

        $validator
            ->scalar('fire_extinguisher_item_type_id')
            ->requirePresence('fire_extinguisher_item_type_id', 'create')
            ->notEmpty('fire_extinguisher_item_type_id');

        $validator
            ->decimal('capacity')
            ->notEmpty('capacity');

        $validator
            ->integer('capacity_unit')
            ->notEmpty('capacity_unit');

        $validator
            ->date('last_hydro_test')
            ->allowEmpty('last_hydro_test');

        $validator
            ->scalar('remarks')
            ->allowEmpty('remarks');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     *
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fire_extinguisher_certificate_id'], 'FireExtinguisherCertificates'));
        $rules->add($rules->existsIn(['fire_extinguisher_item_type_id'], 'FireExtinguisherItemTypes'));

        return $rules;
    }
}
