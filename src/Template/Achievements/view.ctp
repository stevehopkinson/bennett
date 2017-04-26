<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Achievement'), ['action' => 'edit', $achievement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Achievement'), ['action' => 'delete', $achievement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achievement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Achievements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Achievement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="achievements view large-9 medium-8 columns content">
    <h3><?= h($achievement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $achievement->has('game') ? $this->Html->link($achievement->game->name, ['controller' => 'Games', 'action' => 'view', $achievement->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($achievement->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Display Name') ?></th>
            <td><?= h($achievement->display_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($achievement->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon Gray') ?></th>
            <td><?= h($achievement->icon_gray) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($achievement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Default Value') ?></th>
            <td><?= $achievement->default_value ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Hidden') ?></th>
            <td><?= $achievement->is_hidden ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($achievement->description)); ?>
    </div>
</div>
