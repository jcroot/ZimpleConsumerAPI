<?php

declare(strict_types=1);

namespace Zimple\Operations;


use Zimple\Core\Environments;

interface OperationInterface
{
    public function validateData(array $data);

    public static function init(array $data, $enviroment = Environments::STAGING_URL);
}