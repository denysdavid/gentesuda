<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployersMovement $employersMovement
 */

use PhpParser\Node\Stmt\Foreach_;

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Movimentações de Funcionários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Employers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Funcionário'), ['controller' => 'Employers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Movimentações'), ['controller' => 'Movements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Movimentação'), ['controller' => 'Movements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employersMovements form large-9 medium-8 columns content">
    

<?= $this->Form->create($employersMovement) ?>
    <fieldset>
        <!-- dd($employernome) -->
        <legend><?= __('Adicione uma movimentação') ?></legend>
        <?php
          /// modelo para campo de uma forma diferente...
            echo $this->Form->control('employer_id', array('type' => 'select',
                'options' => $employers,
                'empty' => 'Selecione...',
                'label'=>'Funcionário'
            ));
       
            echo $this->Form->control('movement_id', ['options' => $movements, 'empty'=>'Selecione...','label'=>'Movimentação']);
            
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
