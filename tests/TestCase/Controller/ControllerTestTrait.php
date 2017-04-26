<?php

namespace App\Test\TestCase\Controller;

use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

trait ControllerTestTrait
{

    public $fixtures = [
        'app.games'
    ];

    /**
     * Sets session up for Auth component
     *
     * @param int $id The id of the user
     * @param string $role The role of the user
     * @return void
     */
    private function _setAuthSession($id, $role)
    {
    }

    /**
     * @return void
     */
    private function _setAjaxRequest()
    {
        $_ENV['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';

        $this->configRequest([
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);
    }
}
