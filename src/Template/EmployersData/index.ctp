<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersData[]|\Cake\Collection\CollectionInterface $employersData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employers Data'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers Roles'), ['controller' => 'EmployersRoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employers Role'), ['controller' => 'EmployersRoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employersData index large-9 medium-8 columns content">
    <h3><?= __('Employers Data') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employers_role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employersData as $employersData): ?>
            <tr>
                <td><?= $this->Number->format($employersData->id) ?></td>
                <td><?= $employersData->has('employer') ? $this->Html->link($employersData->employer->id, ['controller' => 'Employers', 'action' => 'view', $employersData->employer->id]) : '' ?></td>
                <td><?= $employersData->has('employers_role') ? $this->Html->link($employersData->employers_role->id, ['controller' => 'EmployersRoles', 'action' => 'view', $employersData->employers_role->id]) : '' ?></td>
                <td><?= $employersData->has('department') ? $this->Html->link($employersData->department->id, ['controller' => 'Departments', 'action' => 'view', $employersData->department->id]) : '' ?></td>
                <td><?= $employersData->has('situation') ? $this->Html->link($employersData->situation->id, ['controller' => 'Situations', 'action' => 'view', $employersData->situation->id]) : '' ?></td>
                <td><?= $employersData->has('company') ? $this->Html->link($employersData->company->id, ['controller' => 'Companies', 'action' => 'view', $employersData->company->id]) : '' ?></td>
                <td><?= $this->Number->format($employersData->plan_id) ?></td>
                <td><?= $employersData->has('team') ? $this->Html->link($employersData->team->id, ['controller' => 'Teams', 'action' => 'view', $employersData->team->id]) : '' ?></td>
                <td><?= $employersData->has('note') ? $this->Html->link($employersData->note->id, ['controller' => 'Notes', 'action' => 'view', $employersData->note->id]) : '' ?></td>
                <td><?= h($employersData->created_at) ?></td>
                <td><?= h($employersData->updated_at) ?></td>
                <td><?= h($employersData->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employersData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employersData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employersData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employersData->id)]) ?>
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
