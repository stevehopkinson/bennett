<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="players index large-9 medium-8 columns content">
    <h3><?= __('Players') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('steam_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatar_medium') ?></th>
                <th scope="col"><?= $this->Paginator->sort('avatar_full') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('community_visible_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_logoff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment_permission') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $this->Number->format($player->id) ?></td>
                <td><?= $this->Number->format($player->steam_id) ?></td>
                <td><?= h($player->persona_name) ?></td>
                <td><?= h($player->profile_url) ?></td>
                <td><?= h($player->avatar) ?></td>
                <td><?= h($player->avatar_medium) ?></td>
                <td><?= h($player->avatar_full) ?></td>
                <td><?= h($player->persona_state) ?></td>
                <td><?= h($player->community_visible_state) ?></td>
                <td><?= h($player->profile_state) ?></td>
                <td><?= h($player->last_logoff) ?></td>
                <td><?= h($player->comment_permission) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
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
