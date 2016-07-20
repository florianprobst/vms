<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Boltclass'), ['action' => 'edit', $boltclass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Boltclass'), ['action' => 'delete', $boltclass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boltclass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Boltclasses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Boltclass'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="boltclasses view large-9 medium-8 columns content">
    <h3><?= h($boltclass->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Festigkeitsklasse') ?></th>
            <td><?= h($boltclass->festigkeitsklasse) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($boltclass->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nennzugfestigkeit') ?></th>
            <td><?= $this->Number->format($boltclass->nennzugfestigkeit) ?></td>
        </tr>
        <tr>
            <th><?= __('Unterestreckgrenze') ?></th>
            <td><?= $this->Number->format($boltclass->unterestreckgrenze) ?></td>
        </tr>
        <tr>
            <th><?= __('Dehngrenze') ?></th>
            <td><?= $this->Number->format($boltclass->dehngrenze) ?></td>
        </tr>
        <tr>
            <th><?= __('Bruchdehnung') ?></th>
            <td><?= $this->Number->format($boltclass->bruchdehnung) ?></td>
        </tr>
    </table>
</div>
