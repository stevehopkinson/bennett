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
                ['action' => 'delete', $player->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="players form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Edit Player') ?></legend>
        <?php
            echo $this->Form->control('steam_id');
            echo $this->Form->control('persona_name');
            echo $this->Form->control('profile_url');
            echo $this->Form->control('avatar');
            echo $this->Form->control('avatar_medium');
            echo $this->Form->control('avatar_full');
            echo $this->Form->control('persona_state');
            echo $this->Form->control('community_visible_state');
            echo $this->Form->control('profile_state');
            echo $this->Form->control('last_logoff');
            echo $this->Form->control('comment_permission');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
