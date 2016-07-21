<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bolting'), ['action' => 'edit', $bolting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bolting'), ['action' => 'delete', $bolting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bolting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Boltings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bolting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boltclasses'), ['controller' => 'Boltclasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boltclass'), ['controller' => 'Boltclasses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="boltings view large-9 medium-8 columns content">
    <h3><?= h($bolting->full_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Boltclass') ?></th>
            <td><?= $bolting->has('boltclass') ? $this->Html->link($bolting->boltclass->festigkeitsklasse, ['controller' => 'Boltclasses', 'action' => 'view', $bolting->boltclass->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Muttern') ?></th>
            <td><?= h($bolting->muttern) ?></td>
        </tr>
        <tr>
            <th><?= __('Schraubenart') ?></th>
            <td><?= h($bolting->schraubenart) ?></td>
        </tr>
        <tr>
            <th><?= __('Material') ?></th>
            <td><?= $bolting->has('material') ? $this->Html->link($bolting->material->full_name, ['controller' => 'Materials', 'action' => 'view', $bolting->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bolting->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Schraubenanzahl') ?></th>
            <td><?= $this->Number->format($bolting->schraubenanzahl) ?></td>
        </tr>
        <tr>
            <th><?= __('Schraubenlaenge') ?></th>
            <td><?= $this->Number->format($bolting->schraubenlaenge) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Valves') ?></h4>
        <?php if (!empty($bolting->valves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Manufacturer Id') ?></th>
                <th><?= __('Stock Id') ?></th>
                <th><?= __('Customer Id') ?></th>
                <th><?= __('Equino') ?></th>
                <th><?= __('Flangetype Id') ?></th>
                <th><?= __('Valvetype Id') ?></th>
                <th><?= __('Actuator Id') ?></th>
                <th><?= __('Actuatorsn') ?></th>
                <th><?= __('Dn') ?></th>
                <th><?= __('Pn') ?></th>
                <th><?= __('Einbaulaenge') ?></th>
                <th><?= __('Besonderheiten') ?></th>
                <th><?= __('Baujahr') ?></th>
                <th><?= __('Material Id') ?></th>
                <th><?= __('D0') ?></th>
                <th><?= __('Ansprechdruck') ?></th>
                <th><?= __('Kopfdichtungabmessung') ?></th>
                <th><?= __('Gasket Id') ?></th>
                <th><?= __('Spindelabmessungen') ?></th>
                <th><?= __('Stopfbuchsenbrilleabmessungen') ?></th>
                <th><?= __('Anzahlpackungsringe') ?></th>
                <th><?= __('Packungsringabmessung') ?></th>
                <th><?= __('Grundringabmessung') ?></th>
                <th><?= __('Bolting Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bolting->valves as $valves): ?>
            <tr>
                <td><?= h($valves->id) ?></td>
                <td><?= h($valves->manufacturer_id) ?></td>
                <td><?= h($valves->stock_id) ?></td>
                <td><?= h($valves->customer_id) ?></td>
                <td><?= h($valves->equino) ?></td>
                <td><?= h($valves->flangetype_id) ?></td>
                <td><?= h($valves->valvetype_id) ?></td>
                <td><?= h($valves->actuator_id) ?></td>
                <td><?= h($valves->actuatorsn) ?></td>
                <td><?= h($valves->dn) ?></td>
                <td><?= h($valves->pn) ?></td>
                <td><?= h($valves->einbaulaenge) ?></td>
                <td><?= h($valves->besonderheiten) ?></td>
                <td><?= h($valves->baujahr) ?></td>
                <td><?= h($valves->material_id) ?></td>
                <td><?= h($valves->d0) ?></td>
                <td><?= h($valves->ansprechdruck) ?></td>
                <td><?= h($valves->kopfdichtungabmessung) ?></td>
                <td><?= h($valves->gasket_id) ?></td>
                <td><?= h($valves->spindelabmessungen) ?></td>
                <td><?= h($valves->stopfbuchsenbrilleabmessungen) ?></td>
                <td><?= h($valves->anzahlpackungsringe) ?></td>
                <td><?= h($valves->packungsringabmessung) ?></td>
                <td><?= h($valves->grundringabmessung) ?></td>
                <td><?= h($valves->bolting_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Valves', 'action' => 'view', $valves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Valves', 'action' => 'edit', $valves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Valves', 'action' => 'delete', $valves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
