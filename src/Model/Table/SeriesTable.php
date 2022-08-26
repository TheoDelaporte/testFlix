<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Series Model
 *
 * @property \App\Model\Table\ListSeriesTable&\Cake\ORM\Association\BelongsTo $ListSeries
 *
 * @method \App\Model\Entity\Series newEmptyEntity()
 * @method \App\Model\Entity\Series newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Series[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Series get($primaryKey, $options = [])
 * @method \App\Model\Entity\Series findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Series patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Series[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Series|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Series saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Series[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Series[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Series[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Series[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SeriesTable extends Table
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

        $this->setTable('series');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ListSeries', [
            'foreignKey' => 'listSerie_id',
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
            ->scalar('episode_name')
            ->maxLength('episode_name', 255)
            ->requirePresence('episode_name', 'create')
            ->notEmptyString('episode_name');

        $validator
            ->integer('episode_rank')
            ->requirePresence('episode_rank', 'create')
            ->notEmptyString('episode_rank');

        $validator
            ->integer('listSerie_id')
            ->requirePresence('listSerie_id', 'create')
            ->notEmptyString('listSerie_id');

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
        $rules->add($rules->existsIn('listSerie_id', 'ListSeries'), ['errorField' => 'listSerie_id']);

        return $rules;
    }
}
