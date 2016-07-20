<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Boltclass'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boltclasses index large-9 medium-8 columns content">
    <h3><?= __('Boltclasses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('festigkeitsklasse') ?></th>
                <th><?= $this->Paginator->sort('nennzugfestigkeit') ?></th>
                <th><?= $this->Paginator->sort('unterestreckgrenze') ?></th>
                <th><?= $this->Paginator->sort('dehngrenze') ?></th>
                <th><?= $this->Paginator->sort('bruchdehnung') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boltclasses as $boltclass): ?>
            <tr>
                <td><?= $this->Number->format($boltclass->id) ?></td>
                <td><?= h($boltclass->festigkeitsklasse) ?></td>
                <td><?= $this->Number->format($boltclass->nennzugfestigkeit) ?></td>
                <td><?= $this->Number->format($boltclass->unterestreckgrenze) ?></td>
                <td><?= $this->Number->format($boltclass->dehngrenze) ?></td>
                <td><?= $this->Number->format($boltclass->bruchdehnung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $boltclass->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $boltclass->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $boltclass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boltclass->id)]) ?>
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
