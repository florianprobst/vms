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
    </ul>
</nav>
<div class="boltings view large-9 medium-8 columns content">
    <h3><?= h($bolting->id) ?></h3>
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
    </table>
</div>
