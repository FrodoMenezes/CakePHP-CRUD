<?= $this->Form->create('post', ['class' => 'form-signin']) ?>

<?= $this->Html->image('logo-cdv.png', ['class' => 'mb-4', 'alt' => 'Clube do Valor', 'width' => '72', 'height'=>'72']) ?>

<h1 class="h3 mb-3 font-weight-normal">Área restrita</h1>

<div class="form-group">
    <label>Usuário</label>
    <?= $this->Form->control('username', ['class'=> 'form-control', 'placeholder' => 'Digite o usuário', 'label' => false]) ?>
</div>

<div class="form-group">
    <label>Senha</label>
    <?= $this->Form->control('password', ['class'=> 'form-control', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
</div>

<?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>

<?= $this->Form->end() ?>
