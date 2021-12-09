<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movement $movement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movement'), ['action' => 'edit', $movement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movement'), ['action' => 'delete', $movement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['controller' => 'Employers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['controller' => 'Employers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movements view large-9 medium-8 columns content">
    <h3><?= h($movement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Movimentacao') ?></th>
            <td><?= h($movement->movimentacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($movement->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($movement->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($movement->deleted_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employers') ?></h4>
        <?php if (!empty($movement->employers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Matrícula') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Data Admissão') ?></th>
                <th scope="col"><?= __('Data Movimentação') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($movement->employers as $employers): ?>
            <tr>
               <?php dd($employers); ?>
                <td><?= h($employers->nome) ?></td>
                <td><?= h($employers->funcionario_cod) ?></td>
                <td><?= h($employers->cpf) ?></td>
                <td><?= h($employers->data_admissao) ?></td>
                <td><?= h($employers->data_admissao) ?></td>

                                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employers', 'action' => 'view', $employers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employers', 'action' => 'edit', $employers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employers', 'action' => 'delete', $employers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
