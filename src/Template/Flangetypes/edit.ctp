<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flangetype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flangetype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Flangetypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Valves'), ['controller' => 'Valves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Valf'), ['controller' => 'Valves', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="flangetypes form large-9 medium-8 columns content">
    <?= $this->Form->create($flangetype) ?>
    <fieldset>
        <legend><?= __('Edit Flangetype') ?></legend>
        <?php
            echo $this->Form->input('bezeichnung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
