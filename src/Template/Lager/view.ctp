<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lager'), ['action' => 'edit', $lager->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lager'), ['action' => 'delete', $lager->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $lager->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Lager'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lager'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lager view large-9 medium-8 columns content">
    <h3><?= h($lager->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Lagerort') ?></th>
            <td><?= h($lager->Lagerort) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($lager->id) ?></td>
        </tr>
    </table>
</div>
