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
        <li><?= $this->Html->link(__('List Flangetypes'), ['controller' => 'Flangetypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flangetype'), ['controller' => 'Flangetypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valvetypes'), ['controller' => 'Valvetypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valvetype'), ['controller' => 'Valvetypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Boltings'), ['controller' => 'Boltings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bolting'), ['controller' => 'Boltings', 'action' => 'add']) ?></li>
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
                <th><?= $this->Paginator->sort('etag') ?></th>
                <th><?= $this->Paginator->sort('flangetype_id') ?></th>
                <th><?= $this->Paginator->sort('valvetype_id') ?></th>
                <th><?= $this->Paginator->sort('actuator_id') ?></th>
                <th><?= $this->Paginator->sort('actuatorsn') ?></th>
                <th><?= $this->Paginator->sort('dn') ?></th>
                <th><?= $this->Paginator->sort('pn') ?></th>
                <th><?= $this->Paginator->sort('einbaulaenge') ?></th>
                <th><?= $this->Paginator->sort('besonderheiten') ?></th>
                <th><?= $this->Paginator->sort('baujahr') ?></th>
                <th><?= $this->Paginator->sort('material_id') ?></th>
                <th><?= $this->Paginator->sort('d0') ?></th>
                <th><?= $this->Paginator->sort('ansprechdruck') ?></th>
                <th><?= $this->Paginator->sort('kopfdichtungabmessung') ?></th>
                <th><?= $this->Paginator->sort('gasket_id') ?></th>
                <th><?= $this->Paginator->sort('spindelabmessungen') ?></th>
                <th><?= $this->Paginator->sort('stopfbuchsenbrilleabmessungen') ?></th>
                <th><?= $this->Paginator->sort('anzahlpackungsringe') ?></th>
                <th><?= $this->Paginator->sort('packungsringabmessung') ?></th>
                <th><?= $this->Paginator->sort('grundringabmessung') ?></th>
                <th><?= $this->Paginator->sort('bolting_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($valves as $valf): ?>
            <tr>
                <td><?= $this->Number->format($valf->id) ?></td>
                <td><?= $valf->has('manufacturer') ? $this->Html->link($valf->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $valf->manufacturer->id]) : '' ?></td>
                <td><?= $valf->has('stock') ? $this->Html->link($valf->stock->lagerort, ['controller' => 'Stocks', 'action' => 'view', $valf->stock->id]) : '' ?></td>
                <td><?= $valf->has('customer') ? $this->Html->link($valf->customer->name, ['controller' => 'Customers', 'action' => 'view', $valf->customer->id]) : '' ?></td>
                <td><?= h($valf->etag) ?></td>
                <td><?= $valf->has('flangetype') ? $this->Html->link($valf->flangetype->bezeichnung, ['controller' => 'Flangetypes', 'action' => 'view', $valf->flangetype->id]) : '' ?></td>
                <td><?= $valf->has('valvetype') ? $this->Html->link($valf->valvetype->bezeichnung, ['controller' => 'Valvetypes', 'action' => 'view', $valf->valvetype->id]) : '' ?></td>
                <td><?= $valf->has('actuator') ? $this->Html->link($valf->actuator->bezeichnung, ['controller' => 'Actuators', 'action' => 'view', $valf->actuator->id]) : '' ?></td>
                <td><?= h($valf->actuatorsn) ?></td>
                <td><?= $this->Number->format($valf->dn) ?></td>
                <td><?= $this->Number->format($valf->pn) ?></td>
                <td><?= $this->Number->format($valf->einbaulaenge) ?></td>
                <td><?= h($valf->besonderheiten) ?></td>
                <td><?= $this->Number->format($valf->baujahr) ?></td>
                <td><?= $valf->has('material') ? $this->Html->link($valf->material->full_name, ['controller' => 'Materials', 'action' => 'view', $valf->material->id]) : '' ?></td>
                <td><?= $this->Number->format($valf->d0) ?></td>
                <td><?= $this->Number->format($valf->ansprechdruck) ?></td>
                <td><?= h($valf->kopfdichtungabmessung) ?></td>
                <td><?= $valf->has('gasket') ? $this->Html->link($valf->gasket->name, ['controller' => 'Gaskets', 'action' => 'view', $valf->gasket->id]) : '' ?></td>
                <td><?= h($valf->spindelabmessungen) ?></td>
                <td><?= h($valf->stopfbuchsenbrilleabmessungen) ?></td>
                <td><?= $this->Number->format($valf->anzahlpackungsringe) ?></td>
                <td><?= h($valf->packungsringabmessung) ?></td>
                <td><?= h($valf->grundringabmessung) ?></td>
                <td><?= $valf->has('bolting') ? $this->Html->link($valf->bolting->full_name, ['controller' => 'Boltings', 'action' => 'view', $valf->bolting->id]) : '' ?></td>
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
