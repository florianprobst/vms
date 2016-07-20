<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actuators Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Actuatortypes
 * @property \Cake\ORM\Association\BelongsTo $Manufacturers
 * @property \Cake\ORM\Association\HasMany $Valves
 *
 * @method \App\Model\Entity\Actuator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actuator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actuator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actuator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actuator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actuator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actuator findOrCreate($search, callable $callback = null)
 */
class ActuatorsTable extends Table
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

        $this->table('actuators');
        $this->displayField('bezeichnung');
        $this->primaryKey('id');

        $this->belongsTo('Actuatortypes', [
            'foreignKey' => 'actuatortype_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Manufacturers', [
            'foreignKey' => 'manufacturer_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Valves', [
            'foreignKey' => 'actuator_id'
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
            ->requirePresence('bezeichnung', 'create')
            ->notEmpty('bezeichnung');

        $validator
            ->allowEmpty('bemerkungen');

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
        $rules->add($rules->existsIn(['actuatortype_id'], 'Actuatortypes'));
        $rules->add($rules->existsIn(['manufacturer_id'], 'Manufacturers'));
        return $rules;
    }
}
