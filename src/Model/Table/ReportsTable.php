<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reports Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Valves
 * @property \Cake\ORM\Association\BelongsTo $Operations
 * @property \Cake\ORM\Association\BelongsTo $Conditions
 * @property \Cake\ORM\Association\HasMany $Valves
 *
 * @method \App\Model\Entity\Report get($primaryKey, $options = [])
 * @method \App\Model\Entity\Report newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Report[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Report|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Report patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Report[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Report findOrCreate($search, callable $callback = null)
 */
class ReportsTable extends Table
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

        $this->table('reports');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Valves', [
            'foreignKey' => 'valve_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Operations', [
            'foreignKey' => 'operation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Conditions', [
            'foreignKey' => 'condition_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Valves', [
            'foreignKey' => 'report_id'
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
            ->dateTime('datum')
            ->requirePresence('datum', 'create')
            ->notEmpty('datum');

        $validator
            ->requirePresence('beschreibung', 'create')
            ->notEmpty('beschreibung');

        $validator
            ->allowEmpty('bild');

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
        $rules->add($rules->existsIn(['valve_id'], 'Valves'));
        $rules->add($rules->existsIn(['operation_id'], 'Operations'));
        $rules->add($rules->existsIn(['condition_id'], 'Conditions'));
        return $rules;
    }
}
