<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Valvetypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Valves
 *
 * @method \App\Model\Entity\Valvetype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Valvetype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Valvetype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Valvetype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Valvetype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Valvetype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Valvetype findOrCreate($search, callable $callback = null)
 */
class ValvetypesTable extends Table
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

        $this->table('valvetypes');
        $this->displayField('bezeichnung');
        $this->primaryKey('id');

        $this->hasMany('Valves', [
            'foreignKey' => 'valvetype_id'
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

        return $validator;
    }
}
