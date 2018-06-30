<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EebdCertificateItems Model
 *
 * @property \App\Model\Table\EebdCertificatesTable|\Cake\ORM\Association\BelongsTo $EebdCertificates
 *
 * @method \App\Model\Entity\EebdCertificateItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\EebdCertificateItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EebdCertificateItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EebdCertificateItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EebdCertificateItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EebdCertificateItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EebdCertificateItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EebdCertificateItemsTable extends Table
{
    public $statuses       = [1 => 'Inspected', 2 => 'Refilling', 3 => 'Hydrostatic Test', 4 => 'Serviced'];
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('eebd_certificate_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('EebdCertificates', [
            'foreignKey' => 'eebd_certificate_id'
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
            ->scalar('type')
            ->allowEmpty('type');

        $validator
            ->scalar('serial_no')
            ->allowEmpty('serial_no');

        $validator
            ->scalar('set_serial_no')
            ->allowEmpty('set_serial_no');

        $validator
            ->scalar('capacity')
            ->allowEmpty('capacity');

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
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['eebd_certificate_id'], 'EebdCertificates'));

        return $rules;
    }
}
