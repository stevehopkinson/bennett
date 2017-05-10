<?php
use Migrations\AbstractMigration;

class CreatePlayersAchivements extends AbstractMigration
{
    /**
     * @return void
     */
    public function change()
    {
        $table = $this->table('players_achivements');
        $table->create();
    }
}
