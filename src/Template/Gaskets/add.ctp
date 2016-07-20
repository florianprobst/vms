<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gaskets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gaskettypes'), ['controller' => 'Gaskettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gaskettype'), ['controller' => 'Gaskettypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gaskets form large-9 medium-8 columns content">
    <?= $this->Form->create($gasket) ?>
    <fieldset>
        <legend><?= __('Add Gasket') ?></legend>
        <?php
            echo $this->Form->input('manufacturer_id', ['options' => $manufacturers]);
            echo $this->Form->input('gaskettype_id', ['options' => $gaskettypes]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
