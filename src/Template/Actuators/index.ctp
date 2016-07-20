<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actuator'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actuatortypes'), ['controller' => 'Actuatortypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actuatortype'), ['controller' => 'Actuatortypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actuators index large-9 medium-8 columns content">
    <h3><?= __('Actuators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('actuatortype_id') ?></th>
                <th><?= $this->Paginator->sort('manufacturer_id') ?></th>
                <th><?= $this->Paginator->sort('bezeichnung') ?></th>
                <th><?= $this->Paginator->sort('bemerkungen') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actuators as $actuator): ?>
            <tr>
                <td><?= $this->Number->format($actuator->id) ?></td>
                <td><?= $actuator->has('actuatortype') ? $this->Html->link($actuator->actuatortype->bezeichnung, ['controller' => 'Actuatortypes', 'action' => 'view', $actuator->actuatortype->id]) : '' ?></td>
                <td><?= $actuator->has('manufacturer') ? $this->Html->link($actuator->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $actuator->manufacturer->id]) : '' ?></td>
                <td><?= h($actuator->bezeichnung) ?></td>
                <td><?= h($actuator->bemerkungen) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actuator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actuator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actuator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actuator->id)]) ?>
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
