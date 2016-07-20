<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bolting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bolting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Boltings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Boltclasses'), ['controller' => 'Boltclasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Boltclass'), ['controller' => 'Boltclasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boltings form large-9 medium-8 columns content">
    <?= $this->Form->create($bolting) ?>
    <fieldset>
        <legend><?= __('Edit Bolting') ?></legend>
        <?php
            echo $this->Form->input('boltclasse_id', ['options' => $boltclasses]);
            echo $this->Form->input('schraubenanzahl');
            echo $this->Form->input('muttern');
            echo $this->Form->input('material_id', ['options' => $materials, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
