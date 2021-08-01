<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        'name' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'pessoas' => true
    ];

    protected $_hidden = [
        'password'
    ];
}
