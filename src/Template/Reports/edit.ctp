<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $report->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Operations'), ['controller' => 'Operations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Operation'), ['controller' => 'Operations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conditions'), ['controller' => 'Conditions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Condition'), ['controller' => 'Conditions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reports form large-9 medium-8 columns content">
    <?= $this->Form->create($report) ?>
    <fieldset>
        <legend><?= __('Edit Report') ?></legend>
        <?php
            echo $this->Form->input('valve_id', ['options' => $valves]);
            echo $this->Form->input('operation_id', ['options' => $operations]);
            echo $this->Form->input('datum');
            echo $this->Form->input('beschreibung');
            echo $this->Form->input('condition_id', ['options' => $conditions]);
            echo $this->Form->input('bild');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
