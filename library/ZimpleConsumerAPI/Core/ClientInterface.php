<?php

namespace Zimple\Core;


interface ClientInterface
{

    public static function request($method, $url, $headers, $params);
}