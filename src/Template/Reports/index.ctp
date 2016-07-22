<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Operations'), ['controller' => 'Operations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Operation'), ['controller' => 'Operations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conditions'), ['controller' => 'Conditions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Condition'), ['controller' => 'Conditions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reports index large-9 medium-8 columns content">
    <h3><?= __('Reports') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('valve_id') ?></th>
                <th><?= $this->Paginator->sort('operation_id') ?></th>
                <th><?= $this->Paginator->sort('datum') ?></th>
                <th><?= $this->Paginator->sort('beschreibung') ?></th>
                <th><?= $this->Paginator->sort('condition_id') ?></th>
                <th><?= $this->Paginator->sort('bild') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report): ?>
            <tr>
                <td><?= $this->Number->format($report->id) ?></td>
                <td><?= $report->has('valf') ? $this->Html->link($report->valf->etag, ['controller' => 'Valves', 'action' => 'view', $report->valf->id]) : '' ?></td>
                <td><?= $report->has('operation') ? $this->Html->link($report->operation->bezeichnung, ['controller' => 'Operations', 'action' => 'view', $report->operation->id]) : '' ?></td>
                <td><?= h($report->datum) ?></td>
                <td><?= h($report->beschreibung) ?></td>
                <td><?= $report->has('condition') ? $this->Html->link($report->condition->bezeichnung, ['controller' => 'Conditions', 'action' => 'view', $report->condition->id]) : '' ?></td>
                <td><?= h($report->bild) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $report->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
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
