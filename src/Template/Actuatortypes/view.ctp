<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actuatortype'), ['action' => 'edit', $actuatortype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actuatortype'), ['action' => 'delete', $actuatortype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actuatortype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actuatortypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actuatortype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actuatortypes view large-9 medium-8 columns content">
    <h3><?= h($actuatortype->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Bezeichnung') ?></th>
            <td><?= h($actuatortype->bezeichnung) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($actuatortype->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Actuators') ?></h4>
        <?php if (!empty($actuatortype->actuators)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Actuatortype Id') ?></th>
                <th><?= __('Hersteller') ?></th>
                <th><?= __('Bezeichnung') ?></th>
                <th><?= __('Seriennummer') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actuatortype->actuators as $actuators): ?>
            <tr>
                <td><?= h($actuators->id) ?></td>
                <td><?= h($actuators->actuatortype_id) ?></td>
                <td><?= h($actuators->hersteller) ?></td>
                <td><?= h($actuators->bezeichnung) ?></td>
                <td><?= h($actuators->seriennummer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Actuators', 'action' => 'view', $actuators->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Actuators', 'action' => 'edit', $actuators->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Actuators', 'action' => 'delete', $actuators->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actuators->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
