<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Situation $situation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $situation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $situation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="situations form large-9 medium-8 columns content">
    <?= $this->Form->create($situation) ?>
    <fieldset>
        <legend><?= __('Edit Situation') ?></legend>
        <?php
            echo $this->Form->control('situacao');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('deleted_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
