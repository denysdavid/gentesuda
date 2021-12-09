<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movement $movement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movements form large-9 medium-8 columns content">
    <?= $this->Form->create($movement) ?>
    <fieldset>
        <legend><?= __('Edit Movement') ?></legend>
        <?php
            echo $this->Form->control('movimentacao');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('deleted_at');
            echo $this->Form->control('employers._ids', ['options' => $employers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
