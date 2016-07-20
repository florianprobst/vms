<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Boltclasses Model
 *
 * @method \App\Model\Entity\Boltclass get($primaryKey, $options = [])
 * @method \App\Model\Entity\Boltclass newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Boltclass[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Boltclass|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Boltclass patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Boltclass[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Boltclass findOrCreate($search, callable $callback = null)
 */
class BoltclassesTable extends Table
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

        $this->table('boltclasses');
        $this->displayField('festigkeitsklasse');
        $this->primaryKey('id');
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
            ->requirePresence('festigkeitsklasse', 'create')
            ->notEmpty('festigkeitsklasse')
            ->add('festigkeitsklasse', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('nennzugfestigkeit')
            ->allowEmpty('nennzugfestigkeit');

        $validator
            ->integer('unterestreckgrenze')
            ->allowEmpty('unterestreckgrenze');

        $validator
            ->integer('dehngrenze')
            ->allowEmpty('dehngrenze');

        $validator
            ->integer('bruchdehnung')
            ->allowEmpty('bruchdehnung');

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
        $rules->add($rules->isUnique(['festigkeitsklasse']));
        return $rules;
    }
}
