<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Valf'), ['action' => 'edit', $valf->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Valf'), ['action' => 'delete', $valf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valf->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Valves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valf'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="valves view large-9 medium-8 columns content">
    <h3><?= h($valf->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Manufacturer') ?></th>
            <td><?= $valf->has('manufacturer') ? $this->Html->link($valf->manufacturer->id, ['controller' => 'Manufacturers', 'action' => 'view', $valf->manufacturer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Stock') ?></th>
            <td><?= $valf->has('stock') ? $this->Html->link($valf->stock->id, ['controller' => 'Stocks', 'action' => 'view', $valf->stock->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Customer') ?></th>
            <td><?= $valf->has('customer') ? $this->Html->link($valf->customer->Name, ['controller' => 'Customers', 'action' => 'view', $valf->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Typ') ?></th>
            <td><?= h($valf->typ) ?></td>
        </tr>
        <tr>
            <th><?= __('Besonderheiten') ?></th>
            <td><?= h($valf->besonderheiten) ?></td>
        </tr>
        <tr>
            <th><?= __('Report') ?></th>
            <td><?= $valf->has('report') ? $this->Html->link($valf->report->id, ['controller' => 'Reports', 'action' => 'view', $valf->report->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($valf->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Dn') ?></th>
            <td><?= $this->Number->format($valf->dn) ?></td>
        </tr>
        <tr>
            <th><?= __('Pn') ?></th>
            <td><?= $this->Number->format($valf->pn) ?></td>
        </tr>
        <tr>
            <th><?= __('Einbaulaenge') ?></th>
            <td><?= $this->Number->format($valf->einbaulaenge) ?></td>
        </tr>
    </table>
</div>
