<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Achievement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="achievements index large-9 medium-8 columns content">
    <h3><?= __('Achievements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('default_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('display_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_hidden') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('icon_gray') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($achievements as $achievement): ?>
            <tr>
                <td><?= $this->Number->format($achievement->id) ?></td>
                <td><?= $achievement->has('game') ? $this->Html->link($achievement->game->name, ['controller' => 'Games', 'action' => 'view', $achievement->game->id]) : '' ?></td>
                <td><?= h($achievement->name) ?></td>
                <td><?= h($achievement->default_value) ?></td>
                <td><?= h($achievement->display_name) ?></td>
                <td><?= h($achievement->is_hidden) ?></td>
                <td><?= h($achievement->icon) ?></td>
                <td><?= h($achievement->icon_gray) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $achievement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $achievement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $achievement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $achievement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
