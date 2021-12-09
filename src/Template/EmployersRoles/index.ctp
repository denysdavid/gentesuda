<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersRole[]|\Cake\Collection\CollectionInterface $employersRoles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employers Role'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employersRoles index large-9 medium-8 columns content">
    <h3><?= __('Employers Roles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employersRoles as $employersRole): ?>
            <tr>
                <td><?= $this->Number->format($employersRole->id) ?></td>
                <td><?= h($employersRole->funcao) ?></td>
                <td><?= h($employersRole->created_at) ?></td>
                <td><?= h($employersRole->updated_at) ?></td>
                <td><?= h($employersRole->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employersRole->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employersRole->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employersRole->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employersRole->id)]) ?>
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
