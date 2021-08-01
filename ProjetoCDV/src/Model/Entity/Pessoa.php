<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Pessoa extends Entity
{
    
    protected $_accessible = [
        'name' => true,
        'cpf' => true,
        'etapa' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}
