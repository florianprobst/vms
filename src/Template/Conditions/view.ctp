<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Condition'), ['action' => 'edit', $condition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Condition'), ['action' => 'delete', $condition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $condition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conditions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Condition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conditions view large-9 medium-8 columns content">
    <h3><?= h($condition->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Bezeichnung') ?></th>
            <td><?= h($condition->bezeichnung) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($condition->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reports') ?></h4>
        <?php if (!empty($condition->reports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Valve Id') ?></th>
                <th><?= __('Operation Id') ?></th>
                <th><?= __('Datum') ?></th>
                <th><?= __('Beschreibung') ?></th>
                <th><?= __('Condition Id') ?></th>
                <th><?= __('Bild') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($condition->reports as $reports): ?>
            <tr>
                <td><?= h($reports->id) ?></td>
                <td><?= h($reports->valve_id) ?></td>
                <td><?= h($reports->operation_id) ?></td>
                <td><?= h($reports->datum) ?></td>
                <td><?= h($reports->beschreibung) ?></td>
                <td><?= h($reports->condition_id) ?></td>
                <td><?= h($reports->bild) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reports', 'action' => 'view', $reports->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reports', 'action' => 'edit', $reports->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reports', 'action' => 'delete', $reports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reports->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
