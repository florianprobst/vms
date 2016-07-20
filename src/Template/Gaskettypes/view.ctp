<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gaskettype'), ['action' => 'edit', $gaskettype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gaskettype'), ['action' => 'delete', $gaskettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaskettype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gaskettypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gaskettype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gaskettypes view large-9 medium-8 columns content">
    <h3><?= h($gaskettype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($gaskettype->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Standard') ?></th>
            <td><?= h($gaskettype->standard) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($gaskettype->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Gaskets') ?></h4>
        <?php if (!empty($gaskettype->gaskets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Manufacturer Id') ?></th>
                <th><?= __('Gaskettype Id') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($gaskettype->gaskets as $gaskets): ?>
            <tr>
                <td><?= h($gaskets->id) ?></td>
                <td><?= h($gaskets->manufacturer_id) ?></td>
                <td><?= h($gaskets->gaskettype_id) ?></td>
                <td><?= h($gaskets->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Gaskets', 'action' => 'view', $gaskets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Gaskets', 'action' => 'edit', $gaskets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gaskets', 'action' => 'delete', $gaskets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaskets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
