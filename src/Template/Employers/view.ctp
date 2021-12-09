<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employer $employer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employer'), ['action' => 'edit', $employer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employer'), ['action' => 'delete', $employer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employers Data'), ['controller' => 'EmployersData', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employers Data'), ['controller' => 'EmployersData', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movements'), ['controller' => 'Movements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movement'), ['controller' => 'Movements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employers view large-9 medium-8 columns content">
    <h3><?= h($employer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($employer->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario Cod') ?></th>
            <td><?= h($employer->funcionario_cod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pis Pasep') ?></th>
            <td><?= h($employer->pis_pasep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($employer->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($employer->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ctps') ?></th>
            <td><?= h($employer->ctps) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($employer->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($employer->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adicional Salario') ?></th>
            <td><?= h($employer->adicional_salario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assinatura Home Office') ?></th>
            <td><?= h($employer->assinatura_home_office) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assinatura Admissao') ?></th>
            <td><?= h($employer->assinatura_admissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salario Banco') ?></th>
            <td><?= h($employer->salario_banco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salario Agencia') ?></th>
            <td><?= h($employer->salario_agencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salario Conta') ?></th>
            <td><?= h($employer->salario_conta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Chave Pix') ?></th>
            <td><?= h($employer->chave_pix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacoes') ?></th>
            <td><?= h($employer->observacoes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idade') ?></th>
            <td><?= $this->Number->format($employer->idade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicio') ?></th>
            <td><?= h($employer->data_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Admissao') ?></th>
            <td><?= h($employer->data_admissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Demissao') ?></th>
            <td><?= h($employer->data_demissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($employer->data_nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Referencia') ?></th>
            <td><?= h($employer->data_referencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Experiencia 1') ?></th>
            <td><?= h($employer->data_experiencia_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Experiencia 2') ?></th>
            <td><?= h($employer->data_experiencia_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($employer->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($employer->updated_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted At') ?></th>
            <td><?= h($employer->deleted_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Movements') ?></h4>
        <?php if (!empty($employer->movements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Movimentacao') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col"><?= __('Deleted At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employer->movements as $movements): ?>
            <tr>
                <td><?= h($movements->id) ?></td>
                <td><?= h($movements->movimentacao) ?></td>
                <td><?= h($movements->created_at) ?></td>
                <td><?= h($movements->updated_at) ?></td>
                <td><?= h($movements->deleted_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Movements', 'action' => 'view', $movements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Movements', 'action' => 'edit', $movements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movements', 'action' => 'delete', $movements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Employers Data') ?></h4>
        <?php if (!empty($employer->employers_data)): ?>
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
            <?php foreach ($employer->employers_data as $employersData): ?>
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
