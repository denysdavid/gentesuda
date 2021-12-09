<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employer $employer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movements'), ['controller' => 'Movements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movement'), ['controller' => 'Movements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employers form large-9 medium-8 columns content">
    <?= $this->Form->create($employer) ?>
    <fieldset>
        <legend><?= __('Edit Employer') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('funcionario_cod');
            echo $this->Form->control('pis_pasep');
            echo $this->Form->control('rg');
            echo $this->Form->control('cpf');
            echo $this->Form->control('ctps');
            echo $this->Form->control('data_inicio');
            echo $this->Form->control('data_admissao');
            echo $this->Form->control('data_demissao', ['empty' => true]);
            echo $this->Form->control('data_nascimento');
            echo $this->Form->control('data_referencia', ['empty' => true]);
            echo $this->Form->control('idade');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
            echo $this->Form->control('adicional_salario');
            echo $this->Form->control('data_experiencia_1');
            echo $this->Form->control('data_experiencia_2');
            echo $this->Form->control('assinatura_home_office');
            echo $this->Form->control('assinatura_admissao');
            echo $this->Form->control('salario_banco');
            echo $this->Form->control('salario_agencia');
            echo $this->Form->control('salario_conta');
            echo $this->Form->control('chave_pix');
            echo $this->Form->control('observacoes');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('deleted_at');
            echo $this->Form->control('movements._ids', ['options' => $movements]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
