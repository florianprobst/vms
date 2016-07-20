<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Actuatortypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actuatortypes form large-9 medium-8 columns content">
    <?= $this->Form->create($actuatortype) ?>
    <fieldset>
        <legend><?= __('Add Actuatortype') ?></legend>
        <?php
            echo $this->Form->input('bezeichnung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
