<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersRole $employersRole
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employersRole->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employersRole->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employers Roles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employersRoles form large-9 medium-8 columns content">
    <?= $this->Form->create($employersRole) ?>
    <fieldset>
        <legend><?= __('Edit Employers Role') ?></legend>
        <?php
            echo $this->Form->control('funcao');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('deleted_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
