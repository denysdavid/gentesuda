<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersMovement $employersMovement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employers Movements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movements'), ['controller' => 'Movements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movement'), ['controller' => 'Movements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employersMovements form large-9 medium-8 columns content">
    <?= $this->Form->create($employersMovement) ?>
    <fieldset>
        <legend><?= __('Add Employers Movement') ?></legend>
        <?php
            echo $this->Form->control('employer_id', ['options' => $employers]);
            echo $this->Form->control('movement_id', ['options' => $movements]);
            echo $this->Form->control('data_inicio');
            echo $this->Form->control('data_fim', ['empty' => true]);
            
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
