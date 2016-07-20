<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gaskettypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gaskettypes form large-9 medium-8 columns content">
    <?= $this->Form->create($gaskettype) ?>
    <fieldset>
        <legend><?= __('Add Gaskettype') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('standard');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
