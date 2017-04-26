<?php
namespace App\Test\TestCase\Controller;

use App\Controller\GamesController;
use Cake\TestSuite\IntegrationTestCase;

class GamesControllerTest extends IntegrationTestCase
{
    use ControllerTestTrait;

    /**
     * @var array
     */
    public $fixtures = [
        'app.games'
    ];
}
