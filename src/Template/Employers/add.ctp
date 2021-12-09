<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employer $employer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Funcionários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Funcionários dados'), ['controller' => 'EmployersData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Movimentações'), ['controller' => 'Movements', 'action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="employers form large-9 medium-8 columns content">

    <?= $this->Form->create($employer) ?>
    <?= $this->Form->create($employer) ?>

    
   
    
    <fieldset> 
            <div class="row">
                <div class="large-10 columns">
                    <?= $this->Form->control('nome') ?>
                </div>
                <div class="large-2 columns">
                    <?= $this->Form->control('funcionario_cod',['label'=>'Nº folha']) ?>
                </div>
            </div>

            <div class="row" >
                <div class="large-3  columns">
                    <?= $this->Form->control('pis_pasep',['label'=>'PIS/PASEP']);?>
                </div>
                <div class="large-3  columns">
                    <?= $this->Form->control('rg',['label'=>'RG']); ?>
                </div>
                <div class="large-3  columns">
                    <?= $this->Form->control('cpf',['label'=>'CPF','placeholder'=>'00000000000']);?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('ctps',['label'=>'CTPS']);?>
                </div>
            </div>

            <div class="row">
                <div class="large-3 columns">
                    <?= $this->Form->control('data_nascimento', ['empty' => true,'label'=>'Data de Nascimento']);?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('data_admissao', ['empty' => true,'label'=>'Data de Admissão']);?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('data_inicio', ['empty' => true,'label'=>'Data de Inicio']); ?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('data_referencia', ['empty' => true]);?>
                </div>
            </div>
        
            <div class="row">
                <div class="large-4 columns">
                    <?= $this->Form->control('telefone');?>
                </div>
                <div class="large-4 columns">
                    <?= $this->Form->control('email');?>
                </div>
                <div class="large-4 columns">
                    <?= $this->Form->control('adicional_salario',['']);?>
                </div>
            </div>
        
            <div class="row">
                <div class="large-4 columns">
                    <?=$this->Form->control('data_experiencia_1');?>
                </div>
                <div class="large-4 columns">
                    <?=$this->Form->control('data_experiencia_2');?>
                </div>
                <div class="large-2 columns">
                    <?= $this->Form->control('assinatura_home_office', ['options' => ['Sim','Não'], 'empty'=>'Selecione...','label'=>'Ass. Home Office']);?>
                </div>
                <div class="large-2 columns">
                    <?= $this->Form->control('assinatura_admissao', ['options' => ['Sim','Não'], 'empty'=>'Selecione...','label'=>'Ass. Admissão']);?>
                </div>
            
            </div>

            <div class="row">
                <div class="large-3 columns">
                    <?= $this->Form->control('salario_banco');?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('salario_agencia');?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('salario_conta');?>
                </div>
                <div class="large-3 columns">
                    <?= $this->Form->control('chave_pix');?>
                </div>
            </div>
        
            

            <div class="row">
                <div class="large-12 columns">
                    <?= $this->Form->textarea('observacoes',['name'=>'Observações']);?>
                </div>
            </div>
        

        </fieldset>
        <div class="row">
            
            <div class="large-8 columns">
                
                    
            </div>
        
        <div class="large-4 columns">
                <?= $this->Form->button(__('Salvar')) ?>
                    
            </div>



 
    <?= $this->Form->end() ?>
</div>
