<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vessels Model
 *
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\FireExtinguisherCertificatesTable|\Cake\ORM\Association\HasMany $FireExtinguisherCertificates
 *
 * @method \App\Model\Entity\Vessel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vessel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vessel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vessel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vessel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vessel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vessel findOrCreate($search, callable $callback = null, $options = [])
 */
class VesselsTable extends Table
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

        $this->setTable('vessels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);

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
            ->notEmpty('name');

        $validator
            ->scalar('imo_number')
            ->allowEmpty('imo_number');

        $validator
            ->scalar('call_sign')
            ->allowEmpty('call_sign');

        $validator
            ->scalar('client_id')
            ->notEmpty('client_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
