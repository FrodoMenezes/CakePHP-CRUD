<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar pessoa</h2>
    </div>
        <div class="p-2">
            <?= $this->Html->link(__('Listar'), ['controller' => 'pessoas', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
        </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($pessoa) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> CPF </label>
        <?= $this->Form->control('cpf', ['class' => 'form-control', 'placeholder' => 'Infrome o CPF', 'label' => false]) ?>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span> Usuário</label>
        <?= $this->Form->control('etapa', ['class' => 'form-control', 'placeholder' => 'Informe a etapa', 'label' => false]) ?>
    </div>
</div>

<?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?>
