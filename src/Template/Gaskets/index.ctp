<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gasket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gaskettypes'), ['controller' => 'Gaskettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gaskettype'), ['controller' => 'Gaskettypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gaskets index large-9 medium-8 columns content">
    <h3><?= __('Gaskets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('manufacturer_id') ?></th>
                <th><?= $this->Paginator->sort('gaskettype_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gaskets as $gasket): ?>
            <tr>
                <td><?= $this->Number->format($gasket->id) ?></td>
                <td><?= $gasket->has('manufacturer') ? $this->Html->link($gasket->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $gasket->manufacturer->id]) : '' ?></td>
                <td><?= $gasket->has('gaskettype') ? $this->Html->link($gasket->gaskettype->full_name, ['controller' => 'Gaskettypes', 'action' => 'view', $gasket->gaskettype->id]) : '' ?></td>
                <td><?= h($gasket->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gasket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gasket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gasket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gasket->id)]) ?>
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
