<?php

namespace App\Model\Table;

use App\Helper\CertificateHelper;
use Cake\Event\Event;
use Cake\I18n\Date;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FireExtinguisherCertificates Model
 *
 * @property \Cake\ORM\Association\HasMany   $FireExtinguisherCertificateItems
 * @property \Cake\ORM\Association\BelongsTo $CertificateTexts
 * @property \Cake\ORM\Association\BelongsTo $Vessels
 *
 * @method \App\Model\Entity\FireExtinguisherCertificate get($primaryKey, $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate patchEntity(\Cake\Datasource\EntityInterface $entity, array
 *         $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FireExtinguisherCertificate findOrCreate($search, callable $callback = null, $options =
 *         [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FireExtinguisherCertificatesTable extends Table
{
    public $certificateTypes = [1 => 'With Serial Number', 2 => 'With Quantity'];

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     *
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('fire_extinguisher_certificates');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('FireExtinguisherCertificateItems', [
            'foreignKey' => 'fire_extinguisher_certificate_id',
        ]);

        $this->belongsTo('CertificateTexts', [
            'foreignKey' => 'certificate_text_id',
            'conditions' => 'type = 1',
        ]);

        $this->belongsTo('Vessels', [
            'foreignKey' => 'vessel_id',
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
            ->scalar('certificate_number')
            ->notEmpty('certificate_number');

        $validator
            ->scalar('vessel_id')
            ->requirePresence('vessel_id', 'create')
            ->notEmpty('vessel_id');

        $validator
            ->scalar('certificate_type')
            ->requirePresence('certificate_type', 'create')
            ->notEmpty('certificate_type');

        $validator
            ->integer('certificate_text_id')
            ->notEmpty('certificate_text_id');

        $validator
            ->integer('status')
            ->notEmpty('status');

        $validator
            ->integer('phase')
            ->notEmpty('phase');

        $validator
            ->date('inspection_date')
            ->allowEmpty('inspection_date');

        $validator
            ->date('next_inspection_date')
            ->allowEmpty('next_inspection_date');

        return $validator;
    }

    public function beforeMarshal(Event $event, \ArrayObject $data, \ArrayObject $options)
    {
        if (!empty($data['fire_extinguisher_certificate_items'])) {
            foreach ($data['fire_extinguisher_certificate_items'] as $i => &$item) {
                if (!empty($item['status']) && is_array($item['status'])) {
                    $item['status'] = implode(',', $item['status']);
                }
            }
        }
        if (!empty($data['id'])) {
            $all_items = $this->FireExtinguisherCertificateItems->find('list',
                [
                    'conditions' =>
                        ['FireExtinguisherCertificateItems.fire_extinguisher_certificate_id' => $data['id']],
                ]
            )->toArray();
            if (!empty($data['fire_extinguisher_certificate_items'])) {
                $items_ids  = array_keys($all_items);
                $posted_ids = [];
                foreach ($data['fire_extinguisher_certificate_items'] as $i => $fireItem) {
                    if (!empty($fireItem['id'])) {
                        $posted_ids[] = $fireItem['id'];
                    }
                }

                $delete_items_array = array_diff($items_ids, $posted_ids);

                if ($delete_items_array) {
                    foreach ($delete_items_array as $delete_id) {
                        $im = $this->FireExtinguisherCertificateItems->get($delete_id);
                        $this->FireExtinguisherCertificateItems->delete($im);
                    }
                }
            } else {
                foreach ($all_items as $delete_id) {
                    $im = $this->FireExtinguisherCertificateItems->get($delete_id);
                    $this->FireExtinguisherCertificateItems->delete($im);
                }
            }
        }

        if (empty($data['inspection_date'])) {
            $data['inspection_date'] = Date::now();
        }
        if (empty($data['next_inspection_date']) && !empty($data['inspection_date'])) {
            $data['next_inspection_date'] = (new Date($data['inspection_date']))->addYear(1);
        }

        return $data;
    }

    public function getMaxSerialNumber()
    {
        $query = $this->find();
        $max   = $query->select(['max' => $query->func()->max('id')])->first()->max;

        $maxId = (int)$max + CertificateHelper::FE_START_SERIAL;

        return $maxId;
    }
}
