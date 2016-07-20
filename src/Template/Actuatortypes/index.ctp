<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actuatortype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actuatortypes index large-9 medium-8 columns content">
    <h3><?= __('Actuatortypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('bezeichnung') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actuatortypes as $actuatortype): ?>
            <tr>
                <td><?= $this->Number->format($actuatortype->id) ?></td>
                <td><?= h($actuatortype->bezeichnung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actuatortype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actuatortype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actuatortype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actuatortype->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
