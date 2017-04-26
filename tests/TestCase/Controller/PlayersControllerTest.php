<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PlayersController;
use Cake\TestSuite\IntegrationTestCase;

class PlayersControllerTest extends IntegrationTestCase
{
    use ControllerTestTrait;

    /**
     * @var array
     */
    public $fixtures = [
        'app.players'
    ];
}
