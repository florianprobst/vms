<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="valves form large-9 medium-8 columns content">
    <?= $this->Form->create($valf) ?>
    <fieldset>
        <legend><?= __('Add Valf') ?></legend>
        <?php
            echo $this->Form->input('manufacturer_id', ['options' => $manufacturers]);
            echo $this->Form->input('stock_id', ['options' => $stocks]);
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('typ');
            echo $this->Form->input('dn');
            echo $this->Form->input('pn');
            echo $this->Form->input('einbaulaenge');
            echo $this->Form->input('besonderheiten');
            echo $this->Form->input('report_id', ['options' => $reports]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
