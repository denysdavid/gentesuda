<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employer[]|\Cake\Collection\CollectionInterface $employers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movements'), ['controller' => 'Movements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movement'), ['controller' => 'Movements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employers index large-9 medium-8 columns content">
    <h3><?= __('Employers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionario_cod') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adicional_salario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_experiencia_1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_experiencia_2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assinatura_home_office') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assinatura_admissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salario_banco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salario_agencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salario_conta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chave_pix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacoes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employers as $employer): ?>
            <tr>
                <td><?= $this->Number->format($employer->id) ?></td>
                <td><?= h($employer->nome) ?></td>
                <td><?= h($employer->funcionario_cod) ?></td>
                
                <td><?= h($employer->telefone) ?></td>
                <td><?= h($employer->email) ?></td>
                <td><?= h($employer->adicional_salario) ?></td>
                <td><?= h($employer->data_experiencia_1) ?></td>
                <td><?= h($employer->data_experiencia_2) ?></td>
                <td><?= h($employer->assinatura_home_office) ?></td>
                <td><?= h($employer->assinatura_admissao) ?></td>
                <td><?= h($employer->salario_banco) ?></td>
                <td><?= h($employer->salario_agencia) ?></td>
                <td><?= h($employer->salario_conta) ?></td>
                <td><?= h($employer->chave_pix) ?></td>
                <td><?= h($employer->observacoes) ?></td>
                <td><?= h($employer->created_at) ?></td>
                <td><?= h($employer->updated_at) ?></td>
                <td><?= h($employer->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
