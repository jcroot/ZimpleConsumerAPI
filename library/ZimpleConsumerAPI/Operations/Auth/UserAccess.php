<?php


namespace Zimple\Operations\Auth;


use Zimple\Core\Environments;
use Zimple\Core\Request;
use Zimple\Operations\OperationInterface;

class UserAccess extends Request implements OperationInterface
{

    public function validateData(array $data)
    {
        // TODO: Implement validateData() method.
    }

    public static function init(array $data, $enviroment = Environments::STAGING_URL)
    {
        // TODO: Implement init() method.
    }
}