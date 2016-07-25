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
        <li><?= $this->Html->link(__('List Flangetypes'), ['controller' => 'Flangetypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flangetype'), ['controller' => 'Flangetypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Valvetypes'), ['controller' => 'Valvetypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valvetype'), ['controller' => 'Valvetypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boltings'), ['controller' => 'Boltings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bolting'), ['controller' => 'Boltings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="valves view large-9 medium-8 columns content">
    <h3><?= h($valf->etag) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Manufacturer') ?></th>
            <td><?= $valf->has('manufacturer') ? $this->Html->link($valf->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $valf->manufacturer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Stock') ?></th>
            <td><?= $valf->has('stock') ? $this->Html->link($valf->stock->lagerort, ['controller' => 'Stocks', 'action' => 'view', $valf->stock->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Customer') ?></th>
            <td><?= $valf->has('customer') ? $this->Html->link($valf->customer->name, ['controller' => 'Customers', 'action' => 'view', $valf->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Etag') ?></th>
            <td><?= h($valf->etag) ?></td>
        </tr>
        <tr>
            <th><?= __('Flangetype') ?></th>
            <td><?= $valf->has('flangetype') ? $this->Html->link($valf->flangetype->bezeichnung, ['controller' => 'Flangetypes', 'action' => 'view', $valf->flangetype->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Valvetype') ?></th>
            <td><?= $valf->has('valvetype') ? $this->Html->link($valf->valvetype->bezeichnung, ['controller' => 'Valvetypes', 'action' => 'view', $valf->valvetype->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Actuator') ?></th>
            <td><?= $valf->has('actuator') ? $this->Html->link($valf->actuator->bezeichnung, ['controller' => 'Actuators', 'action' => 'view', $valf->actuator->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Actuatorsn') ?></th>
            <td><?= h($valf->actuatorsn) ?></td>
        </tr>
        <tr>
            <th><?= __('Besonderheiten') ?></th>
            <td><?= h($valf->besonderheiten) ?></td>
        </tr>
        <tr>
            <th><?= __('Material') ?></th>
            <td><?= $valf->has('material') ? $this->Html->link($valf->material->full_name, ['controller' => 'Materials', 'action' => 'view', $valf->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Kopfdichtungabmessung') ?></th>
            <td><?= h($valf->kopfdichtungabmessung) ?></td>
        </tr>
        <tr>
            <th><?= __('Gasket') ?></th>
            <td><?= $valf->has('gasket') ? $this->Html->link($valf->gasket->name, ['controller' => 'Gaskets', 'action' => 'view', $valf->gasket->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Spindelabmessungen') ?></th>
            <td><?= h($valf->spindelabmessungen) ?></td>
        </tr>
        <tr>
            <th><?= __('Stopfbuchsenbrilleabmessungen') ?></th>
            <td><?= h($valf->stopfbuchsenbrilleabmessungen) ?></td>
        </tr>
        <tr>
            <th><?= __('Packungsringabmessung') ?></th>
            <td><?= h($valf->packungsringabmessung) ?></td>
        </tr>
        <tr>
            <th><?= __('Grundringabmessung') ?></th>
            <td><?= h($valf->grundringabmessung) ?></td>
        </tr>
        <tr>
            <th><?= __('Bolting') ?></th>
            <td><?= $valf->has('bolting') ? $this->Html->link($valf->bolting->full_name, ['controller' => 'Boltings', 'action' => 'view', $valf->bolting->id]) : '' ?></td>
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
        <tr>
            <th><?= __('Baujahr') ?></th>
            <td><?= $this->Number->format($valf->baujahr) ?></td>
        </tr>
        <tr>
            <th><?= __('D0') ?></th>
            <td><?= $this->Number->format($valf->d0) ?></td>
        </tr>
        <tr>
            <th><?= __('Ansprechdruck') ?></th>
            <td><?= $this->Number->format($valf->ansprechdruck) ?></td>
        </tr>
        <tr>
            <th><?= __('Anzahlpackungsringe') ?></th>
            <td><?= $this->Number->format($valf->anzahlpackungsringe) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Reports') ?></h4>
        <?php if (!empty($valf->reports)): ?>
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
            <?php foreach ($valf->reports as $reports): ?>
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
