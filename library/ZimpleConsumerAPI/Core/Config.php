<?php

namespace Zimple\Core;

class Config
{
    const USERNAME = "test";

    const PASSWORD = "test";

    /**
     *
     * Get defined configuration constants.
     *
     */
    public static function get($key)
    {
        return constant(strtoupper('self::' . $key));
    }
}

