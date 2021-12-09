<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersMovement[]|\Cake\Collection\CollectionInterface $employersMovements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employers Movement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movements'), ['controller' => 'Movements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movement'), ['controller' => 'Movements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employersMovements index large-9 medium-8 columns content">
    <h3><?= __('Employers Movements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employersMovements as $employersMovement): ?>
            <tr>
                <td><?= $this->Number->format($employersMovement->id) ?></td>
                <td><?= $employersMovement->has('employer') ? $this->Html->link($employersMovement->employer->nome, ['controller' => 'Employers', 'action' => 'view', $employersMovement->employer->id]) : '' ?></td>
                <td><?= $employersMovement->has('movement') ? $this->Html->link($employersMovement->movement->movimentacao, ['controller' => 'Movements', 'action' => 'view', $employersMovement->movement->id]) : '' ?></td>
                <td><?= h($employersMovement->data_inicio) ?></td>
                <td><?= h($employersMovement->data_fim) ?></td>
                <td><?= h($employersMovement->created_at) ?></td>
                <td><?= h($employersMovement->updated_at) ?></td>
                <td><?= h($employersMovement->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employersMovement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employersMovement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employersMovement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employersMovement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
