<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Listar pessoas</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'pessoas', 'action' => 'add'], ['class' => 'btn btn-outline-success btn-sm']); ?>
    </div>
</div>
<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th class="d-none d-sm-table-cell">CPF</th>
                <th class="d-none d-lg-table-cell">Etapa</th>
                <th class="d-none d-lg-table-cell">Data de Cadastro</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoas as $pessoa): ?>
                <tr>
                    <td><?= $this->Number->format($pessoa->id) ?></td>
                    <td><?= h($pessoa->name) ?></td>
                    <td class="d-none d-sm-table-cell"> <?= h($pessoa->cpf) ?> </td>
                    <td class="d-none d-sm-table-cell"> <?= h($pessoa->etapa) ?> </td>
                    <td class="d-none d-lg-table-cell"> <?= h($pessoa->created) ?> </td>
                    <td>
                        <span class="d-none d-md-block">
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'pessoas', 'action' => 'view', $pessoa->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                            <?= $this->Html->link(__('Editar'), ['controller' => 'pessoas', 'action' => 'edit', $pessoa->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'pessoas', 'action' => 'delete', $pessoa->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Tem certeza que deseja excluir # {0}?', $pessoa->id)]) ?>                      
                        </span>
                        <div class="dropdown d-block d-md-none">
                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'pessoas', 'action' => 'view', $pessoa->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'pessoas', 'action' => 'edit', $pessoa->id], ['class' => 'dropdown-item']) ?>
                                <?= $this->Form->postLink(__('Apagar'), ['controller' => 'pessoas', 'action' => 'delete', $pessoa->id], ['class' =>'dropdown-item', 'confirm' => __('Tem certeza que deseja excluir # {0}?', $pessoa->id)]) ?>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->element('pagination'); ?>
</div>
