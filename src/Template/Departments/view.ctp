<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Departamento') ?></th>
            <td><?= h($department->departamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($department->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($department->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($department->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($department->deleted_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employers Data') ?></h4>
        <?php if (!empty($department->employers_data)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employer Id') ?></th>
                <th scope="col"><?= __('Employers Role Id') ?></th>
                <th scope="col"><?= __('Department Id') ?></th>
                <th scope="col"><?= __('Situation Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Plan Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Note Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Deleted At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($department->employers_data as $employersData): ?>
            <tr>
                <td><?= h($employersData->id) ?></td>
                <td><?= h($employersData->employer_id) ?></td>
                <td><?= h($employersData->employers_role_id) ?></td>
                <td><?= h($employersData->department_id) ?></td>
                <td><?= h($employersData->situation_id) ?></td>
                <td><?= h($employersData->company_id) ?></td>
                <td><?= h($employersData->plan_id) ?></td>
                <td><?= h($employersData->team_id) ?></td>
                <td><?= h($employersData->note_id) ?></td>
                <td><?= h($employersData->created_at) ?></td>
                <td><?= h($employersData->updated_at) ?></td>
                <td><?= h($employersData->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EmployersData', 'action' => 'view', $employersData->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EmployersData', 'action' => 'edit', $employersData->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EmployersData', 'action' => 'delete', $employersData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employersData->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
