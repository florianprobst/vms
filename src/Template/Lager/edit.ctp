<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lager->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lager->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lager'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lager form large-9 medium-8 columns content">
    <?= $this->Form->create($lager) ?>
    <fieldset>
        <legend><?= __('Edit Lager') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('Lagerort');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
