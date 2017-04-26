<?php

use Migrations\AbstractMigration;

class CreateAchievements extends AbstractMigration
{
    /**
     * @return void
     */
    public function change()
    {
        $table = $this->table('achievements');
        $table->addColumn('game_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addForeignKey(
            'game_id',
            'games',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        );

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('default_value', 'boolean', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('display_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('is_hidden', 'boolean', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('description', 'text', [
            'default' => null,
            'null' => false,
        ]);

        $table->addColumn('icon', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('icon_gray', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);

        $table->create();
    }
}
