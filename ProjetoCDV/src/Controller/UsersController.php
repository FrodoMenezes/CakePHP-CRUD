<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'limit' => 5
        ];
                
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Pessoas']
        ]);

        $this->set('user', $user);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O usuário foi cadastado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('O usuário não pode ser cadastrado. Por favor, tentar novamente.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O usuário foi editado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('O usuário não pode ser editado. Por favor, tentar novamente.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O usuário foi excluído.'));
        } else {
            $this->Flash->danger(__('O usuário não pode ser excluído. Por favor, tentar novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function login()
    {
       if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->danger(__('Erro: login ou senha incorreto'));
            }
       }
    }

    public function logout()
    {
        $this->Flash->success(__('Deslogado com sucesso!'));
        return $this->redirect($this->Auth->logout());
    }
}
