<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persona Name') ?></th>
            <td><?= h($player->persona_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile Url') ?></th>
            <td><?= h($player->profile_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatar') ?></th>
            <td><?= h($player->avatar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatar Medium') ?></th>
            <td><?= h($player->avatar_medium) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Avatar Full') ?></th>
            <td><?= h($player->avatar_full) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona State') ?></th>
            <td><?= h($player->persona_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Community Visible State') ?></th>
            <td><?= h($player->community_visible_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile State') ?></th>
            <td><?= h($player->profile_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment Permission') ?></th>
            <td><?= h($player->comment_permission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Steam Id') ?></th>
            <td><?= $this->Number->format($player->steam_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Logoff') ?></th>
            <td><?= h($player->last_logoff) ?></td>
        </tr>
    </table>
</div>
