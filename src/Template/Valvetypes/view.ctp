<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Valvetype'), ['action' => 'edit', $valvetype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Valvetype'), ['action' => 'delete', $valvetype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valvetype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Valvetypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valvetype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="valvetypes view large-9 medium-8 columns content">
    <h3><?= h($valvetype->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Bezeichnung') ?></th>
            <td><?= h($valvetype->bezeichnung) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($valvetype->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Valves') ?></h4>
        <?php if (!empty($valvetype->valves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Manufacturer Id') ?></th>
                <th><?= __('Stock Id') ?></th>
                <th><?= __('Customer Id') ?></th>
                <th><?= __('Equino') ?></th>
                <th><?= __('Valvetype Id') ?></th>
                <th><?= __('Dn') ?></th>
                <th><?= __('Pn') ?></th>
                <th><?= __('Einbaulaenge') ?></th>
                <th><?= __('Besonderheiten') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($valvetype->valves as $valves): ?>
            <tr>
                <td><?= h($valves->id) ?></td>
                <td><?= h($valves->manufacturer_id) ?></td>
                <td><?= h($valves->stock_id) ?></td>
                <td><?= h($valves->customer_id) ?></td>
                <td><?= h($valves->equino) ?></td>
                <td><?= h($valves->valvetype_id) ?></td>
                <td><?= h($valves->dn) ?></td>
                <td><?= h($valves->pn) ?></td>
                <td><?= h($valves->einbaulaenge) ?></td>
                <td><?= h($valves->besonderheiten) ?></td>
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
