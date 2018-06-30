<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeliveryNoteItems Model
 *
 * @property \App\Model\Table\DeliveryNotesTable|\Cake\ORM\Association\BelongsTo $DeliveryNotes
 *
 * @method \App\Model\Entity\DeliveryNoteItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\DeliveryNoteItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DeliveryNoteItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryNoteItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DeliveryNoteItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryNoteItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryNoteItem findOrCreate($search, callable $callback = null, $options = [])
 */
class DeliveryNoteItemsTable extends Table
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

        $this->setTable('delivery_note_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('DeliveryNotes', [
            'foreignKey' => 'delivery_note_id',
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
            ->integer('item_no')
            ->allowEmpty('item_no');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->integer('ordered')
            ->allowEmpty('ordered');

        $validator
            ->integer('delivered')
            ->allowEmpty('delivered');

        $validator
            ->integer('outstanding')
            ->allowEmpty('outstanding');

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
        $rules->add($rules->existsIn(['delivery_note_id'], 'DeliveryNotes'));

        return $rules;
    }
}
