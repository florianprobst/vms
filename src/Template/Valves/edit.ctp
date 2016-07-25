<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $valf->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $valf->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flangetypes'), ['controller' => 'Flangetypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flangetype'), ['controller' => 'Flangetypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valvetypes'), ['controller' => 'Valvetypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valvetype'), ['controller' => 'Valvetypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Boltings'), ['controller' => 'Boltings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bolting'), ['controller' => 'Boltings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="valves form large-9 medium-8 columns content">
    <?= $this->Form->create($valf) ?>
    <fieldset>
        <legend><?= __('Edit Valf') ?></legend>
        <?php
            echo $this->Form->input('manufacturer_id', ['options' => $manufacturers, 'empty' => true]);
            echo $this->Form->input('stock_id', ['options' => $stocks, 'empty' => true]);
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('etag');
            echo $this->Form->input('flangetype_id', ['options' => $flangetypes, 'empty' => true]);
            echo $this->Form->input('valvetype_id', ['options' => $valvetypes, 'empty' => true]);
            echo $this->Form->input('actuator_id', ['options' => $actuators, 'empty' => true]);
            echo $this->Form->input('actuatorsn');
            echo $this->Form->input('dn');
            echo $this->Form->input('pn');
            echo $this->Form->input('einbaulaenge');
            echo $this->Form->input('besonderheiten');
            echo $this->Form->input('baujahr');
            echo $this->Form->input('material_id', ['options' => $materials, 'empty' => true]);
            echo $this->Form->input('d0');
            echo $this->Form->input('ansprechdruck');
            echo $this->Form->input('kopfdichtungabmessung');
            echo $this->Form->input('gasket_id', ['options' => $gaskets, 'empty' => true]);
            echo $this->Form->input('spindelabmessungen');
            echo $this->Form->input('stopfbuchsenbrilleabmessungen');
            echo $this->Form->input('anzahlpackungsringe');
            echo $this->Form->input('packungsringabmessung');
            echo $this->Form->input('grundringabmessung');
            echo $this->Form->input('bolting_id', ['options' => $boltings, 'empty' => true]);
            echo $this->Form->input('typenklasse_kunde');
            echo $this->Form->input('medium');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
