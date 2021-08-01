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
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pessoa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pessoa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Tem certeza que quer excluir? # {0}?', $pessoa->id)]) ?>                           
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->element('pagination'); ?>
</div>
