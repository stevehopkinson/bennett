<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class GamesFixture extends TestFixture
{

    public $import = [
        'table' => 'games'
    ];

    public function init()
    {
        $this->records = [];

        parent::init();
    }
}
