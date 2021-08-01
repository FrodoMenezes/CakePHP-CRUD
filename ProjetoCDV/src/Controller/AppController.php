<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' =>[
                'controller'=>'users',
                'action'=>'index'
            ],
            'logoutRedirect'=>[
                'controller'=>'users',
                'action'=>'login'
            ]
        ]);

    }
    
    public function beforeRender(Event $event)
    {
        if(($this->request->getParam(['action']) !== null ) AND ($this->request->getParam(['action']) == 'login')){
            $this->viewBuilder()->setLayout('login');
        }
    }
}
