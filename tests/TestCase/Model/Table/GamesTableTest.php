<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class GamesTableTest extends TestCase
{

    /**
     * @var \App\Model\Table\GamesTable
     */
    public $Games;

    /**
     * @var array
     */
    public $fixtures = [];

    /**
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->Games = TableRegistry::exists('Games');
    }

    /**
     * @return void
     */
    public function tearDown()
    {
        unset($this->Games);

        parent::tearDown();
    }
}
