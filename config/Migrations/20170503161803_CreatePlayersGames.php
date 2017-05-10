<?php
use Migrations\AbstractMigration;

class CreatePlayersGames extends AbstractMigration
{
    /**
     * @return void
     */
    public function change()
    {
        $table = $this->table('players_games');

        $table->addColumn('players_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addForeignKey(
            'players_id',
            'players',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        );

        $table->addColumn('games_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addForeignKey(
            'games_id',
            'games',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        );

        $table->addColumn('playtime_forever', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->create();
    }
}
