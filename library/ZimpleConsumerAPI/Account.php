<?php

declare(strict_types=1);

namespace Zimple;

use Zimple\Core\Config;
use Zimple\Core\Environments;
use Zimple\Operations\Auth\Login;

class Account
{
    protected static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function login()
    {
        $response = Login::init([
            'username' => Config::USERNAME,
            'password' => Config::PASSWORD,
            'applicationId' => Environments::APPLICATION_ID
        ])->launch('post');

        return $response->getResponse();
    }
}