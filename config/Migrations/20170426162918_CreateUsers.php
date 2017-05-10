<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');

        $table->addColumn('players_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->create();
    }
}
