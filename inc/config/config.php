<?php

define('ROOT', realpath(dirname(__FILE__) . '/../') . '/');
include(ROOT . "/config/ConfBase.php");

class Conf extends ConfBase {

    public static $domain = array('host' => 'vanearts.com', 'expire' => 86400, 'path' => '/');
    public static $logPath = 'vanearts/inc/log/';

}
