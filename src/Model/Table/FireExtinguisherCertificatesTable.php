<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FireExtinguisherCertificates Model
 *
 * @method \App\Model\Entity\FireExtinguisherCertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FireExtinguisherCertificatesTable extends Table
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

        $this->setTable('fire_extinguisher_certificates');
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
            ->scalar('vessel_name')
            ->requirePresence('vessel_name', 'create')
            ->notEmpty('vessel_name');

        return $validator;
    }
}
