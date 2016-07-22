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
    <h3><?= __('Bestandsliste Armaturen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        			<tr>
        				<th colspan=9>&nbsp;</th>
        				<th colspan=3>Letzter Bericht</th>
        				<th>&nbsp;</th>
        			</tr>
        			<tr>
                <th><?= $this->Paginator->sort('etag') ?></th>
                <th><?= $this->Paginator->sort('stock_id') ?></th>
                <th><?= $this->Paginator->sort('manufacturer_id') ?></th>
                <th><?= $this->Paginator->sort('customer_id') ?></th>
                <th><?= $this->Paginator->sort('valvetype_id') ?></th>
                <th><?= $this->Paginator->sort('actuator_id') ?></th>
                <th><?= $this->Paginator->sort('dn') ?></th>
                <th><?= $this->Paginator->sort('pn') ?></th>
                <th><?= $this->Paginator->sort('einbaulaenge') ?></th>
                <th><?= $this->Paginator->sort('datum') ?></th>
                <th><?= $this->Paginator->sort('condition') ?></th>
                <th><?= $this->Paginator->sort('beschreibung') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($valves as $valf): ?>
            <tr>
                <td><?= h($valf->etag) ?></td>
                <td><?= $valf->has('stock') ? $this->Html->link($valf->stock->lagerort, ['controller' => 'Stocks', 'action' => 'view', $valf->stock->id]) : '' ?></td>
                <td><?= $valf->has('manufacturer') ? $this->Html->link($valf->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $valf->manufacturer->id]) : '' ?></td>
                <td><?= $valf->has('customer') ? $this->Html->link($valf->customer->name, ['controller' => 'Customers', 'action' => 'view', $valf->customer->id]) : '' ?></td>
                <td><?= $valf->has('valvetype') ? $this->Html->link($valf->valvetype->bezeichnung, ['controller' => 'Valvetypes', 'action' => 'view', $valf->valvetype->id]) : '' ?></td>
                <td><?= $valf->has('actuator') ? $this->Html->link($valf->actuator->bezeichnung, ['controller' => 'Actuators', 'action' => 'view', $valf->actuator->id]) : '' ?></td>
                <td><?= $this->Number->format($valf->dn) ?></td>
                <td><?= $this->Number->format($valf->pn) ?></td>
                <td><?= $this->Number->format($valf->einbaulaenge) ?></td>
                <? if(count($valf->reports) > 0){
                	$report = $valf->reports[0];
                ?>
                <td><?= h($report->datum) ?></td>
                <td><? foreach ($conditions as $condition){ if($condition->id == $report->condition_id) {echo $condition->bezeichnung;} } ?></td>
                <td><?= h($report->beschreibung) ?></td>
                <? }else{ ?>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <? } ?>
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
