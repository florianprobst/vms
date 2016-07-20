<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Actuators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actuatortypes'), ['controller' => 'Actuatortypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actuatortype'), ['controller' => 'Actuatortypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actuators form large-9 medium-8 columns content">
    <?= $this->Form->create($actuator) ?>
    <fieldset>
        <legend><?= __('Add Actuator') ?></legend>
        <?php
            echo $this->Form->input('actuatortype_id', ['options' => $actuatortypes]);
            echo $this->Form->input('manufacturer_id', ['options' => $manufacturers]);
            echo $this->Form->input('bezeichnung');
            echo $this->Form->input('bemerkungen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
