<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Manufacturers Model
 *
 * @property \Cake\ORM\Association\HasMany $Valves
 *
 * @method \App\Model\Entity\Manufacturer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Manufacturer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Manufacturer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Manufacturer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Manufacturer findOrCreate($search, callable $callback = null)
 */
class ManufacturersTable extends Table
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

        $this->table('manufacturers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Valves', [
            'foreignKey' => 'manufacturer_id'
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
            ->allowEmpty('strasse');

        $validator
            ->allowEmpty('plz');

        $validator
            ->allowEmpty('ort');

        return $validator;
    }
}
