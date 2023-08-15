<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Moncases Model
 *
 * @method \App\Model\Entity\Moncase newEmptyEntity()
 * @method \App\Model\Entity\Moncase newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Moncase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moncase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Moncase findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Moncase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Moncase[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moncase|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moncase saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moncase[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moncase[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moncase[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moncase[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MoncasesTable extends Table
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

        $this->setTable('moncases');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('accession_no')
            ->allowEmptyString('accession_no');

        $validator
            ->scalar('case_type')
            ->requirePresence('case_type', 'create')
            ->notEmptyString('case_type');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('history')
            ->requirePresence('history', 'create')
            ->notEmptyString('history');

        $validator
            ->notEmptyFile('imaging')
            ->add('imaging', [
                'mimeType' => [
                    'rule' => ['mimeType', ['image/jpg', 'image/png','image/jpeg']],
                    'message' => 'Please upload only JPG,PNG,JPEG images',
                ],
                'fileSize' => [
                    'rule' => ['fileSize','<=','1MB'],
                    'message' => 'Image file size must be less than 1MB.',
                ],
            ]);

        $validator
            ->integer('max_marks')
            ->allowEmptyString('max_marks');

        $validator
            ->scalar('observation')
            ->allowEmptyString('observation');

        $validator
            ->scalar('intepretation')
            ->allowEmptyString('intepretation');

        $validator
            ->scalar('safety')
            ->allowEmptyString('safety');

        $validator
            ->scalar('intrinsic_roles')
            ->allowEmptyString('intrinsic_roles');

        $validator
            ->scalar('management')
            ->allowEmptyString('management');

        $validator
            ->scalar('anatomy')
            ->allowEmptyString('anatomy');

        $validator
            ->scalar('pathology')
            ->allowEmptyString('pathology');

        $validator
            ->scalar('findings')
            ->allowEmptyString('findings');

        $validator
            ->scalar('diagnosis')
            ->allowEmptyString('diagnosis');

        $validator
            ->scalar('differential_diagnosis')
            ->allowEmptyString('differential_diagnosis');

        $validator
            ->scalar('further_investigation')
            ->allowEmptyString('further_investigation');

        $validator
            ->scalar('teaching_points')
            ->allowEmptyString('teaching_points');

        $validator
            ->scalar('seen_by')
            ->allowEmptyString('seen_by');

        $validator
            ->scalar('tags')
            ->allowEmptyString('tags');

        $validator
            ->scalar('contributer')
            ->requirePresence('contributer', 'create')
            ->notEmptyString('contributer');

        $validator
            ->scalar('speciality')
            ->requirePresence('speciality', 'create')
            ->notEmptyString('speciality');

        $validator
            ->integer('rating')
            ->allowEmptyString('rating');

        return $validator;
    }
}
