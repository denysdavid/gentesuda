<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersMovement $employersMovement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employers Movement'), ['action' => 'edit', $employersMovement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employers Movement'), ['action' => 'delete', $employersMovement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employersMovement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employers Movements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employers Movement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movements'), ['controller' => 'Movements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movement'), ['controller' => 'Movements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employersMovements view large-9 medium-8 columns content">
    <h3><?= h($employersMovement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $employersMovement->has('employer') ? $this->Html->link($employersMovement->employer->id, ['controller' => 'Employers', 'action' => 'view', $employersMovement->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movement') ?></th>
            <td><?= $employersMovement->has('movement') ? $this->Html->link($employersMovement->movement->id, ['controller' => 'Movements', 'action' => 'view', $employersMovement->movement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employersMovement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio') ?></th>
            <td><?= h($employersMovement->data_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Fim') ?></th>
            <td><?= h($employersMovement->data_fim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($employersMovement->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($employersMovement->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($employersMovement->deleted_at) ?></td>
        </tr>
    </table>
</div>
