<?php
use Migrations\AbstractMigration;

class CreateFriends extends AbstractMigration
{
    /**
     * @return void
     */
    public function change()
    {
        $table = $this->table('friends', [
            'id' => false,
            'primary_key' => [
                'user_a_id',
                'user_b_id'
            ]
        ]);

        $table->addColumn('user_a_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addForeignKey(
            'user_a_id',
            'users',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        );

        $table->addColumn('user_b_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);

        $table->addForeignKey(
            'user_b_id',
            'users',
            'id',
            [
                'update' => 'RESTRICT',
                'delete' => 'RESTRICT'
            ]
        );

        $table->addColumn('friend_since', 'datetime', [
            'default' => null,
            'null' => false,
        ]);

        $table->create();
    }
}
