<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Material'), ['action' => 'edit', $material->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Material'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materials view large-9 medium-8 columns content">
    <h3><?= h($material->full_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Werkstoffnummer') ?></th>
            <td><?= h($material->werkstoffnummer) ?></td>
        </tr>
        <tr>
            <th><?= __('Bezeichnung') ?></th>
            <td><?= h($material->bezeichnung) ?></td>
        </tr>
        <tr>
            <th><?= __('Bezeichnungalt') ?></th>
            <td><?= h($material->bezeichnungalt) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($material->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Valves') ?></h4>
        <?php if (!empty($material->valves)): ?>
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
                <th><?= __('Kopfdichtung') ?></th>
                <th><?= __('Gasket Id') ?></th>
                <th><?= __('Spindelabmessungen') ?></th>
                <th><?= __('Stopfbuchsenbrilleabmessungen') ?></th>
                <th><?= __('Anzahlpackungsringe') ?></th>
                <th><?= __('Packungsringabmessung') ?></th>
                <th><?= __('Grundringabmessung') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->valves as $valves): ?>
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
                <td><?= h($valves->kopfdichtung) ?></td>
                <td><?= h($valves->gasket_id) ?></td>
                <td><?= h($valves->spindelabmessungen) ?></td>
                <td><?= h($valves->stopfbuchsenbrilleabmessungen) ?></td>
                <td><?= h($valves->anzahlpackungsringe) ?></td>
                <td><?= h($valves->packungsringabmessung) ?></td>
                <td><?= h($valves->grundringabmessung) ?></td>
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
