<?php

namespace App\Test\TestCase\Controller;

use Cake\ORM\TableRegistry;

trait ControllerTestTrait
{

    public $fixtures = [
        'Users'
    ];

    /**
     * Sets session up for Auth component
     *
     * @param $id The id of the login
     * @return void
     */
    private function _setAuthSession($id)
    {
        $user = $this->_table('Users')->get($id);

        $this->session([
            'Auth' => [
                'User' => $user->toArray()
            ]
        ]);
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

    /**
     * @return \Cake\ORM\Table
     */
    private function _table($table)
    {
        return TableRegistry::get($table);
    }
}
