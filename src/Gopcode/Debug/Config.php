<?php
/**
 * Config class  - Config.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */

namespace Gopcode\Debug;

/**
 * Config class
 *
 * @package		App
 */
class Config
{
    public static function enable($check = null)
    {
        if ($check == true) {
            Logger::enable(true);
            require_once __DIR__. '/DLog.php';
        }
    }

    public static function register()
    {
        register_shutdown_function( function() {
            register_shutdown_function( function(){
                Logger::render();
            });
        });
    }
}