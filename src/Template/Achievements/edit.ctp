<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $achievement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $achievement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Achievements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="achievements form large-9 medium-8 columns content">
    <?= $this->Form->create($achievement) ?>
    <fieldset>
        <legend><?= __('Edit Achievement') ?></legend>
        <?php
            echo $this->Form->control('game_id', ['options' => $games]);
            echo $this->Form->control('name');
            echo $this->Form->control('default_value');
            echo $this->Form->control('display_name');
            echo $this->Form->control('is_hidden');
            echo $this->Form->control('description');
            echo $this->Form->control('icon');
            echo $this->Form->control('icon_gray');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
