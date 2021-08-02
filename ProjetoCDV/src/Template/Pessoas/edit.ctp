<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar pessoa</h2>
    </div>
        <div class="p-2">
            <span class="d-none d-md-block">
                <?= $this->Html->link(__('Listar'), ['controller' => 'pessoas', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>

                <?= $this->Html->link(__('Visualizar'), ['controller' => 'pessoas', 'action' => 'view', $pessoa->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'pessoas', 'action' => 'delete', $pessoa->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $pessoa->id)]) ?>
            </span>
            <div class="dropdown d-block d-md-none">
                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ações
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                    <?= $this->Html->link(__('Listar'), ['controller' => 'pessoas', 'action' => 'index'], ['class' => 'dropdown-item']) ?>

                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'pessoas', 'action' => 'view', $pessoa->id], ['class' => 'dropdown-item']) ?>

                    <?= $this->Form->postLink(__('Apagar'), ['controller' => 'pessoas', 'action' => 'delete', $pessoa->id], ['class' => 'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $pessoa->id)]) ?>                                    
                </div>
            </div>
        </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($pessoa) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span>Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span>CPF</label>
        <?= $this->Form->control('CPF', ['class' => 'form-control', 'placeholder' => 'Alterar CPF', 'label' => false]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span>Etapa</label>
        <?=    
            $this->Form->input('etapa',
                array(
                   'type'=>'select',
                   'class' => 'form-control',
                   'options' => array('Aguardando assinatura de documentos' => 'Aguardando assinatura de documentos', 'Aguardando transferência de recursos'=> 'Aguardando transferência de recursos', 'Gestão de patrimônio ativa' => 'Gestão de patrimônio ativa'),
                   'label' => false
                ));
        ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span>ID do usuário vinculado</label>
        <?= $this->Form->control('user_id', ['class' => 'form-control', 'placeholder' => 'ID do usuário', 'label' => false]) ?>
    </div>
</div>

<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>