<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gaskets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Manufacturers
 * @property \Cake\ORM\Association\BelongsTo $Gaskettypes
 * @property \Cake\ORM\Association\HasMany $Valves
 *
 * @method \App\Model\Entity\Gasket get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gasket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gasket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gasket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gasket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gasket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gasket findOrCreate($search, callable $callback = null)
 */
class GasketsTable extends Table
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

        $this->table('gaskets');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Manufacturers', [
            'foreignKey' => 'manufacturer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Gaskettypes', [
            'foreignKey' => 'gaskettype_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Valves', [
            'foreignKey' => 'gasket_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['manufacturer_id'], 'Manufacturers'));
        $rules->add($rules->existsIn(['gaskettype_id'], 'Gaskettypes'));
        return $rules;
    }
}
