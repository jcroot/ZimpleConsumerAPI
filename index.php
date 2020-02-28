<?php

namespace Main;

require 'init.php';

use Zimple\Account;
use Zimple\Exception\AuthenticationException;


$resp = Account::getInstance()->login();

print_r($resp);
