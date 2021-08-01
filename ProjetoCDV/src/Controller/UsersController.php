<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{

    public function index()
    {
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
            $this->Flash->error(__('O usuário não pode ser cadastrado. Por favor, tentar novamente.'));
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
            $this->Flash->error(__('O usuário não pode ser editado. Por favor, tentar novamente.'));
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
            $this->Flash->error(__('O usuário não pode ser excluído. Por favor, tentar novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
