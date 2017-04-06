<?php

/**
 * CodeMommy ServerPHP
 * @author  Candison November <www.kandisheng.com>
 */

namespace CodeMommy\ServerPHP;

/**
 * Class Server
 * @package CodeMommy\ServerPHP
 */
class Server
{
    public static function information()
    {
        phpinfo();
    }
}