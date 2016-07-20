<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gaskettype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gaskettypes index large-9 medium-8 columns content">
    <h3><?= __('Gaskettypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('standard') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gaskettypes as $gaskettype): ?>
            <tr>
                <td><?= $this->Number->format($gaskettype->id) ?></td>
                <td><?= h($gaskettype->name) ?></td>
                <td><?= h($gaskettype->standard) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gaskettype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gaskettype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gaskettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaskettype->id)]) ?>
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
