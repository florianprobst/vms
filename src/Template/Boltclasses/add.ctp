<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Boltclasses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="boltclasses form large-9 medium-8 columns content">
    <?= $this->Form->create($boltclass) ?>
    <fieldset>
        <legend><?= __('Add Boltclass') ?></legend>
        <?php
            echo $this->Form->input('festigkeitsklasse');
            echo $this->Form->input('nennzugfestigkeit');
            echo $this->Form->input('unterestreckgrenze');
            echo $this->Form->input('dehngrenze');
            echo $this->Form->input('bruchdehnung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
