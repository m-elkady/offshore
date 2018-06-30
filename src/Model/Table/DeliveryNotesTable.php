<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeliveryNotes Model
 *
 * @property \App\Model\Table\QuotationsTable|\Cake\ORM\Association\BelongsTo $Quotations
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\DeliveryNoteItemsTable|\Cake\ORM\Association\HasMany $DeliveryNoteItems
 *
 * @method \App\Model\Entity\DeliveryNote get($primaryKey, $options = [])
 * @method \App\Model\Entity\DeliveryNote newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DeliveryNote[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryNote|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DeliveryNote patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryNote[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryNote findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DeliveryNotesTable extends Table
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

        $this->setTable('delivery_notes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Quotations', [
            'foreignKey' => 'quotation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('DeliveryNoteItems', [
            'foreignKey' => 'delivery_note_id'
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
            ->date('dispatch_date')
            ->allowEmpty('dispatch_date');

        $validator
            ->scalar('delivery_method')
            ->allowEmpty('delivery_method');

        $validator
            ->scalar('notes')
            ->allowEmpty('notes');

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
        $rules->add($rules->existsIn(['quotation_id'], 'Quotations'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
