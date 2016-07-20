<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Valvetype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="valvetypes index large-9 medium-8 columns content">
    <h3><?= __('Valvetypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('bezeichnung') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($valvetypes as $valvetype): ?>
            <tr>
                <td><?= $this->Number->format($valvetype->id) ?></td>
                <td><?= h($valvetype->bezeichnung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $valvetype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $valvetype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $valvetype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valvetype->id)]) ?>
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
