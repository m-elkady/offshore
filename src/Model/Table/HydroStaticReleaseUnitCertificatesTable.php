<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HydroStaticReleaseUnitCertificates Model
 *
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HydroStaticReleaseUnitCertificate findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HydroStaticReleaseUnitCertificatesTable extends Table
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

        $this->setTable('hydro_static_release_unit_certificates');
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
