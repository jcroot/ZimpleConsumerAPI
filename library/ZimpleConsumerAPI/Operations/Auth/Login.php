<?php


namespace Zimple\Operations\Auth;


use Zimple\Core\Environments;
use Zimple\Core\Request;
use Zimple\Exception\InvalidArgumentException;
use Zimple\Operations\OperationInterface;
use Zimple\Operations\Operations;

class Login extends Request implements OperationInterface
{
    public function validateData(array $data)
    {
        // TODO: Implement validateData() method.
        if (count($data) < 3) {
            throw new InvalidArgumentException("Invalid argument count (at least 3 values are expected).");
        }

        if (!array_key_exists('username', $data)) {
            throw new InvalidArgumentException("username argument was not found [username].");
        }

        if (!array_key_exists('password', $data)) {
            throw new InvalidArgumentException("password argument was not found [password].");
        }

        if (!array_key_exists('applicationId', $data)) {
            throw new InvalidArgumentException("applicationId argument was not found [applicationId].");
        }
    }

    public static function init(array $params, $enviroment = Environments::STAGING_URL)
    {
        // TODO: Implement init() method.
        $self = new self();
        $self->validateData($params);

        $self->factory(
            $enviroment,
            Operations::LOGIN_AUTH
        );

        foreach ($params as $key => $value){
            $self->addData($key, $value);
        }

        return $self;
    }
}