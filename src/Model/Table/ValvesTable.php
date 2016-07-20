<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Valves Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Manufacturers
 * @property \Cake\ORM\Association\BelongsTo $Stocks
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Reports
 *
 * @method \App\Model\Entity\Valf get($primaryKey, $options = [])
 * @method \App\Model\Entity\Valf newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Valf[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Valf|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Valf patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Valf[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Valf findOrCreate($search, callable $callback = null)
 */
class ValvesTable extends Table
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

        $this->table('valves');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Manufacturers', [
            'foreignKey' => 'manufacturer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Stocks', [
            'foreignKey' => 'stock_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Reports', [
            'foreignKey' => 'report_id',
            'joinType' => 'INNER'
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
            ->requirePresence('typ', 'create')
            ->notEmpty('typ');

        $validator
            ->integer('dn')
            ->requirePresence('dn', 'create')
            ->notEmpty('dn');

        $validator
            ->integer('pn')
            ->requirePresence('pn', 'create')
            ->notEmpty('pn');

        $validator
            ->integer('einbaulaenge')
            ->requirePresence('einbaulaenge', 'create')
            ->notEmpty('einbaulaenge');

        $validator
            ->requirePresence('besonderheiten', 'create')
            ->notEmpty('besonderheiten');

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
        $rules->add($rules->existsIn(['stock_id'], 'Stocks'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['report_id'], 'Reports'));
        return $rules;
    }
}
