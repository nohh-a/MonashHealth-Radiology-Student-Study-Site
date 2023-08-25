<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
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
            ->notEmptyFile('image_url')
            ->add('image_url', [
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
            ->scalar('accession_no')
            ->allowEmptyString('accession_no')
            ->add('accession_no', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'This accession number is already taken.'
            ]);

        $validator
            ->scalar('case_type')
            ->allowEmptyString('case_type');

        $validator
            ->date('date')
            ->allowEmptyDate('date');

        $validator
            ->scalar('imaging')
            ->allowEmptyString('imaging');

        $validator
            ->scalar('diagnosis')
            ->allowEmptyString('diagnosis');

        $validator
            ->scalar('differential_diagnosis')
            ->allowEmptyString('differential_diagnosis');

        $validator
            ->scalar('findings')
            ->allowEmptyString('findings');

        $validator
            ->scalar('teaching_points')
            ->allowEmptyString('teaching_points');

        $validator
            ->scalar('speciality')
            ->allowEmptyString('speciality');

        $validator
            ->scalar('history')
            ->allowEmptyString('history');

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
            ->scalar('further_investigation')
            ->allowEmptyString('further_investigation');

        $validator
            ->scalar('seen_by')
            ->allowEmptyString('seen_by');

        $validator
            ->scalar('tags')
            ->allowEmptyString('tags');

        $validator
            ->scalar('contributor')
            ->allowEmptyString('contributor');

        $validator
            ->integer('rating')
            ->allowEmptyString('rating');

        $validator
            ->scalar('author')
            ->allowEmptyString('author');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['accession_no']));

        return $rules;
    }

    public function validateUnique($value, array $options, ?array $context = null): bool
    {
        // If a new record is being created, do a uniqueness check
        if (!empty($context['data']['id']) && $context['data']['id'] === 'new') {
            $query = $this->find()->where(['accession_no' => $value]);
            return $query->isEmpty();
        }

        return true; // No uniqueness checks when editing
    }
}
