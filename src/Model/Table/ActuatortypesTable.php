<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actuatortypes Model
 *
 * @property \Cake\ORM\Association\HasMany $Actuators
 *
 * @method \App\Model\Entity\Actuatortype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actuatortype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actuatortype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actuatortype|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actuatortype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actuatortype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actuatortype findOrCreate($search, callable $callback = null)
 */
class ActuatortypesTable extends Table
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

        $this->table('actuatortypes');
        $this->displayField('bezeichnung');
        $this->primaryKey('id');

        $this->hasMany('Actuators', [
            'foreignKey' => 'actuatortype_id'
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
