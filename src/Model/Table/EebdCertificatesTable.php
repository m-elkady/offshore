<?php
namespace App\Model\Table;

use Cake\Event\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EebdCertificates Model
 *
 * @property \App\Model\Table\EebdCertificateItemsTable|\Cake\ORM\Association\HasMany $EebdCertificateItems
 *
 * @method \App\Model\Entity\EebdCertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\EebdCertificate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EebdCertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EebdCertificate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EebdCertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EebdCertificate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EebdCertificate findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EebdCertificatesTable extends Table
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

        $this->setTable('eebd_certificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('EebdCertificateItems', [
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
            ->scalar('certificate_number')
            ->allowEmpty('certificate_number');

        $validator
            ->scalar('vessel_name')
            ->requirePresence('vessel_name', 'create')
            ->notEmpty('vessel_name');

        $validator
            ->scalar('certificate_text')
            ->allowEmpty('certificate_text');

        $validator
            ->date('inspection_date')
            ->allowEmpty('inspection_date');

        $validator
            ->date('next_inspection_date')
            ->allowEmpty('next_inspection_date');

        $validator
            ->date('next_hydro_test')
            ->allowEmpty('next_hydro_test');

        return $validator;
    }
    
    public function beforeMarshal(Event $event, \ArrayObject $data, \ArrayObject $options)
    {
        if (!empty($data['eebd_certificate_items'])) {
            foreach ($data['eebd_certificate_items'] as &$item) {
                if (!empty($item['status']) && is_array($item['status'])) {
                    $item['status'] = implode(',', $item['status']);
                }
            }
        }
        return $data;
    }
}
