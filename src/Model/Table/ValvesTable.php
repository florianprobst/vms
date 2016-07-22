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
 * @property \Cake\ORM\Association\BelongsTo $Flangetypes
 * @property \Cake\ORM\Association\BelongsTo $Valvetypes
 * @property \Cake\ORM\Association\BelongsTo $Actuators
 * @property \Cake\ORM\Association\BelongsTo $Materials
 * @property \Cake\ORM\Association\BelongsTo $Gaskets
 * @property \Cake\ORM\Association\BelongsTo $Boltings
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
        $this->displayField('etag');
        $this->primaryKey('id');

        $this->belongsTo('Manufacturers', [
            'foreignKey' => 'manufacturer_id'
        ]);
        $this->belongsTo('Stocks', [
            'foreignKey' => 'stock_id'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Flangetypes', [
            'foreignKey' => 'flangetype_id'
        ]);
        $this->belongsTo('Valvetypes', [
            'foreignKey' => 'valvetype_id'
        ]);
        $this->belongsTo('Actuators', [
            'foreignKey' => 'actuator_id'
        ]);
        $this->belongsTo('Materials', [
            'foreignKey' => 'material_id'
        ]);
        $this->belongsTo('Gaskets', [
            'foreignKey' => 'gasket_id'
        ]);
        $this->belongsTo('Boltings', [
            'foreignKey' => 'bolting_id'
        ]);
        $this->hasMany('Reports', [
            'foreignKey' => 'valve_id',
            'dependent' => true,
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
            ->requirePresence('etag', 'create')
            ->notEmpty('etag')
            ->add('etag', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('actuatorsn');

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
            ->allowEmpty('einbaulaenge');

        $validator
            ->allowEmpty('besonderheiten');

        $validator
            ->integer('baujahr')
            ->allowEmpty('baujahr');

        $validator
            ->integer('d0')
            ->allowEmpty('d0');

        $validator
            ->integer('ansprechdruck')
            ->allowEmpty('ansprechdruck');

        $validator
            ->allowEmpty('kopfdichtungabmessung');

        $validator
            ->allowEmpty('spindelabmessungen');

        $validator
            ->allowEmpty('stopfbuchsenbrilleabmessungen');

        $validator
            ->integer('anzahlpackungsringe')
            ->allowEmpty('anzahlpackungsringe');

        $validator
            ->allowEmpty('packungsringabmessung');

        $validator
            ->allowEmpty('grundringabmessung');

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
        $rules->add($rules->isUnique(['etag']));
        $rules->add($rules->existsIn(['manufacturer_id'], 'Manufacturers'));
        $rules->add($rules->existsIn(['stock_id'], 'Stocks'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['flangetype_id'], 'Flangetypes'));
        $rules->add($rules->existsIn(['valvetype_id'], 'Valvetypes'));
        $rules->add($rules->existsIn(['actuator_id'], 'Actuators'));
        $rules->add($rules->existsIn(['material_id'], 'Materials'));
        $rules->add($rules->existsIn(['gasket_id'], 'Gaskets'));
        $rules->add($rules->existsIn(['bolting_id'], 'Boltings'));
        return $rules;
    }
}
