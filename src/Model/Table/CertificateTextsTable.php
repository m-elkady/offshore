<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CertificateTexts Model
 *
 * @method \App\Model\Entity\CertificateText get($primaryKey, $options = [])
 * @method \App\Model\Entity\CertificateText newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CertificateText[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CertificateText|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CertificateText patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CertificateText[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CertificateText findOrCreate($search, callable $callback = null, $options = [])
 */
class CertificateTextsTable extends Table
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

        $this->setTable('certificate_texts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->scalar('title')
            ->allowEmpty('title');

        $validator
            ->scalar('content')
            ->allowEmpty('content');

        $validator
            ->integer('type')
            ->allowEmpty('type');

        return $validator;
    }
}
