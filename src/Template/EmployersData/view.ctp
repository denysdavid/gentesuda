<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersData $employersData
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employers Data'), ['action' => 'edit', $employersData->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employers Data'), ['action' => 'delete', $employersData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employersData->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employers Data'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employers Data'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers Roles'), ['controller' => 'EmployersRoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employers Role'), ['controller' => 'EmployersRoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employersData view large-9 medium-8 columns content">
    <h3><?= h($employersData->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employer') ?></th>
            <td><?= $employersData->has('employer') ? $this->Html->link($employersData->employer->id, ['controller' => 'Employers', 'action' => 'view', $employersData->employer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employers Role') ?></th>
            <td><?= $employersData->has('employers_role') ? $this->Html->link($employersData->employers_role->id, ['controller' => 'EmployersRoles', 'action' => 'view', $employersData->employers_role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $employersData->has('department') ? $this->Html->link($employersData->department->id, ['controller' => 'Departments', 'action' => 'view', $employersData->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $employersData->has('situation') ? $this->Html->link($employersData->situation->id, ['controller' => 'Situations', 'action' => 'view', $employersData->situation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $employersData->has('company') ? $this->Html->link($employersData->company->id, ['controller' => 'Companies', 'action' => 'view', $employersData->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $employersData->has('team') ? $this->Html->link($employersData->team->id, ['controller' => 'Teams', 'action' => 'view', $employersData->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= $employersData->has('note') ? $this->Html->link($employersData->note->id, ['controller' => 'Notes', 'action' => 'view', $employersData->note->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employersData->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan Id') ?></th>
            <td><?= $this->Number->format($employersData->plan_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($employersData->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($employersData->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($employersData->deleted_at) ?></td>
        </tr>
    </table>
</div>
