<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operations Model
 *
 * @property \Cake\ORM\Association\HasMany $Reports
 *
 * @method \App\Model\Entity\Operation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Operation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Operation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Operation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Operation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Operation findOrCreate($search, callable $callback = null)
 */
class OperationsTable extends Table
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

        $this->table('operations');
        $this->displayField('bezeichnung');
        $this->primaryKey('id');

        $this->hasMany('Reports', [
            'foreignKey' => 'operation_id'
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
