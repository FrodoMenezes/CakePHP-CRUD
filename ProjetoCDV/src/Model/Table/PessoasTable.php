<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PessoasTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('pessoas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 220)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 220)
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->scalar('etapa')
            ->maxLength('etapa', 220)
            ->requirePresence('etapa', 'create')
            ->notEmpty('etapa');

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
