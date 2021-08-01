<?php
namespace App\Controller;

use App\Controller\AppController;

class PessoasController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'limit' => 5
        ];
        
        $pessoas = $this->paginate($this->Pessoas);

        $this->set(compact('pessoas'));
    }

    public function view($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('pessoa', $pessoa);
    }

    public function add()
    {
        $pessoa = $this->Pessoas->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('A pessoa foi cadastrada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pessoa não pode ser cadastrada. Por favor, tentar novamente.'));
        }
        $users = $this->Pessoas->Users->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'users'));
    }

    public function edit($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->getData());
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('A pessoa foi editada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pessoa não pode ser editada. Por favor, tentar novamente.'));
        }
        $users = $this->Pessoas->Users->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'users'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoas->get($id);
        if ($this->Pessoas->delete($pessoa)) {
            $this->Flash->success(__('A pessoa foi excluída'));
        } else {
            $this->Flash->error(__('A pesssoa não pode ser excluída. Por favor, tentar novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
