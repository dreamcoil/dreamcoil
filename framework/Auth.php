<?php

namespace Dreamcoil;

class Auth
{

    public function set()
    {

        $hash = hash('ripemd160', microtime(true));

        if(!isset($_COOKIE['auth-key'])) setcookie('auth-key', $hash, time() * 1.5);

    }

}
