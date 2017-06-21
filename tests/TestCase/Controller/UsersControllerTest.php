<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{
    use ControllerTestTrait;

    /**
     * Test delete method
     *
     * @return void
     * @group testing
     */
    public function testIndex()
    {
        $this->configRequest([
            'headers' => ['Accept' => 'application/json']
        ]);
        $this->get('/users');
        $this->assertResponseCode(200);
        $this->assertHeader('Content-Type', 'application/json');
    }
}
