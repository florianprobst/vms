<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Flangetype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flangetypes index large-9 medium-8 columns content">
    <h3><?= __('Flangetypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('bezeichnung') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flangetypes as $flangetype): ?>
            <tr>
                <td><?= $this->Number->format($flangetype->id) ?></td>
                <td><?= h($flangetype->bezeichnung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $flangetype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flangetype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flangetype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flangetype->id)]) ?>
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
