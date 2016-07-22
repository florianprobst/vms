<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Operations'), ['controller' => 'Operations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Operation'), ['controller' => 'Operations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conditions'), ['controller' => 'Conditions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Condition'), ['controller' => 'Conditions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reports view large-9 medium-8 columns content">
    <h3><?= h($report->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Valf') ?></th>
            <td><?= $report->has('valf') ? $this->Html->link($report->valf->etag, ['controller' => 'Valves', 'action' => 'view', $report->valf->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Operation') ?></th>
            <td><?= $report->has('operation') ? $this->Html->link($report->operation->bezeichnung, ['controller' => 'Operations', 'action' => 'view', $report->operation->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Beschreibung') ?></th>
            <td><?= h($report->beschreibung) ?></td>
        </tr>
        <tr>
            <th><?= __('Condition') ?></th>
            <td><?= $report->has('condition') ? $this->Html->link($report->condition->bezeichnung, ['controller' => 'Conditions', 'action' => 'view', $report->condition->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Bild') ?></th>
            <td><?= h($report->bild) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($report->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Datum') ?></th>
            <td><?= h($report->datum) ?></td>
        </tr>
    </table>
</div>
