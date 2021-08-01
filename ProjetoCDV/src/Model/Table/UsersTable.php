<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pessoas', [
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('username')
            ->maxLength('username', 220)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 220)
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->add('password', [
                    'length' => [
                        'rule' => ['minLength', 6],
                        'message' => 'A senha deve ter no mínimo 6 caracteres',
                    ]
            ]);

        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email'], 'Este email já está cadastrado'));
        $rules->add($rules->isUnique(['username'], 'Este usuário já está sendo utilizado'));

        return $rules;
    }
}
