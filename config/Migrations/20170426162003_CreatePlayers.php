<?php

use Migrations\AbstractMigration;

class CreatePlayers extends AbstractMigration
{
    /**
     * @return void
     */
    public function change()
    {
        $table = $this->table('players');

        $table->addColumn('steam_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);


        $table->addColumn('persona_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('profile_url', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('avatar', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);

        $table->addColumn('avatar_medium', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);

        $table->addColumn('avatar_full', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);

        $table->addColumn('persona_state', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('community_visible_state', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('profile_state', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('last_logoff', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('comment_permission', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->create();
    }
}
