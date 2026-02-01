<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CollectionsMoncases Model
 *
 * @property \App\Model\Table\CollectionsTable&\Cake\ORM\Association\BelongsTo $Collections
 * @property \App\Model\Table\MoncasesTable&\Cake\ORM\Association\BelongsTo $Moncases
 *
 * @method \App\Model\Entity\CollectionsMoncase newEmptyEntity()
 * @method \App\Model\Entity\CollectionsMoncase newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CollectionsMoncase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CollectionsMoncase get($primaryKey, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CollectionsMoncase[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CollectionsMoncase|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CollectionsMoncase[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CollectionsMoncasesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('collections_moncases');
        $this->setDisplayField(['collection_id', 'moncase_id']);
        $this->setPrimaryKey(['collection_id', 'moncase_id']);

        $this->belongsTo('Collections', [
            'foreignKey' => 'collection_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Moncases', [
            'foreignKey' => 'moncase_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('collection_id')
            ->notEmptyString('collection_id');

        $validator
            ->integer('moncase_id')
            ->notEmptyString('moncase_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('collection_id', 'Collections'), ['errorField' => 'collection_id']);
        $rules->add($rules->existsIn('moncase_id', 'Moncases'), ['errorField' => 'moncase_id']);

        return $rules;
    }
}
