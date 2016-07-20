<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gaskettypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Gaskets
 *
 * @method \App\Model\Entity\Gaskettype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gaskettype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gaskettype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gaskettype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gaskettype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gaskettype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gaskettype findOrCreate($search, callable $callback = null)
 */
class GaskettypesTable extends Table
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

        $this->table('gaskettypes');
        $this->displayField('full_name');
        $this->primaryKey('id');

        $this->hasMany('Gaskets', [
            'foreignKey' => 'gaskettype_id'
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

        $validator
            ->requirePresence('standard', 'create')
            ->notEmpty('standard');

        return $validator;
    }
}
