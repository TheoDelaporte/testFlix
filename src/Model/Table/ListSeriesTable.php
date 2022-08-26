<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ListSeries Model
 *
 * @method \App\Model\Entity\ListSeries newEmptyEntity()
 * @method \App\Model\Entity\ListSeries newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ListSeries[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ListSeries get($primaryKey, $options = [])
 * @method \App\Model\Entity\ListSeries findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ListSeries patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ListSeries[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ListSeries|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListSeries saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ListSeries[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListSeries[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListSeries[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ListSeries[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ListSeriesTable extends Table
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

        $this->setTable('list_series');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER',
        ]);

        $this->hasMany('Series', [
            'foreignKey' => 'listSerie_id',
        ]);

        $this->addBehavior('Timestamp');
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
            ->scalar('serie_name')
            ->maxLength('serie_name', 255)
            ->requirePresence('serie_name', 'create')
            ->notEmptyString('serie_name');

        $validator
            ->scalar('serie_image')
            ->maxLength('serie_image', 255)
            ->requirePresence('serie_image', 'create')
            ->notEmptyFile('serie_image');

        return $validator;
    }
}
