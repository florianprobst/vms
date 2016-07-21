<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bolting'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Boltclasses'), ['controller' => 'Boltclasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Boltclass'), ['controller' => 'Boltclasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boltings index large-9 medium-8 columns content">
    <h3><?= __('Boltings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('boltclasse_id') ?></th>
                <th><?= $this->Paginator->sort('schraubenanzahl') ?></th>
                <th><?= $this->Paginator->sort('muttern') ?></th>
                <th><?= $this->Paginator->sort('schraubenlaenge') ?></th>
                <th><?= $this->Paginator->sort('schraubenart') ?></th>
                <th><?= $this->Paginator->sort('material_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boltings as $bolting): ?>
            <tr>
                <td><?= $this->Number->format($bolting->id) ?></td>
                <td><?= $bolting->has('boltclass') ? $this->Html->link($bolting->boltclass->festigkeitsklasse, ['controller' => 'Boltclasses', 'action' => 'view', $bolting->boltclass->id]) : '' ?></td>
                <td><?= $this->Number->format($bolting->schraubenanzahl) ?></td>
                <td><?= h($bolting->muttern) ?></td>
                <td><?= $this->Number->format($bolting->schraubenlaenge) ?></td>
                <td><?= h($bolting->schraubenart) ?></td>
                <td><?= $bolting->has('material') ? $this->Html->link($bolting->material->full_name, ['controller' => 'Materials', 'action' => 'view', $bolting->material->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bolting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bolting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bolting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bolting->id)]) ?>
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
