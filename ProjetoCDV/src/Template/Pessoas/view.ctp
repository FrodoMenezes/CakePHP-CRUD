<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pessoa'), ['action' => 'edit', $pessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pessoa'), ['action' => 'delete', $pessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pessoas view large-9 medium-8 columns content">
    <h3><?= h($pessoa->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pessoa->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($pessoa->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etapa') ?></th>
            <td><?= h($pessoa->etapa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $pessoa->has('user') ? $this->Html->link($pessoa->user->name, ['controller' => 'Users', 'action' => 'view', $pessoa->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pessoa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pessoa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pessoa->modified) ?></td>
        </tr>
    </table>
</div>
