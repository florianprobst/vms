<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="valves index large-9 medium-8 columns content">
    <h3><?= __('Valves') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('manufacturer_id') ?></th>
                <th><?= $this->Paginator->sort('stock_id') ?></th>
                <th><?= $this->Paginator->sort('customer_id') ?></th>
                <th><?= $this->Paginator->sort('typ') ?></th>
                <th><?= $this->Paginator->sort('dn') ?></th>
                <th><?= $this->Paginator->sort('pn') ?></th>
                <th><?= $this->Paginator->sort('einbaulaenge') ?></th>
                <th><?= $this->Paginator->sort('besonderheiten') ?></th>
                <th><?= $this->Paginator->sort('report_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($valves as $valf): ?>
            <tr>
                <td><?= $this->Number->format($valf->id) ?></td>
                <td><?= $valf->has('manufacturer') ? $this->Html->link($valf->manufacturer->id, ['controller' => 'Manufacturers', 'action' => 'view', $valf->manufacturer->id]) : '' ?></td>
                <td><?= $valf->has('stock') ? $this->Html->link($valf->stock->id, ['controller' => 'Stocks', 'action' => 'view', $valf->stock->id]) : '' ?></td>
                <td><?= $valf->has('customer') ? $this->Html->link($valf->customer->Name, ['controller' => 'Customers', 'action' => 'view', $valf->customer->id]) : '' ?></td>
                <td><?= h($valf->typ) ?></td>
                <td><?= $this->Number->format($valf->dn) ?></td>
                <td><?= $this->Number->format($valf->pn) ?></td>
                <td><?= $this->Number->format($valf->einbaulaenge) ?></td>
                <td><?= h($valf->besonderheiten) ?></td>
                <td><?= $valf->has('report') ? $this->Html->link($valf->report->id, ['controller' => 'Reports', 'action' => 'view', $valf->report->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $valf->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $valf->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $valf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valf->id)]) ?>
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
