<?php
/**
 * Log.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */

if (!class_exists('Log', false) ) {
    class DLog extends \Gopcode\Debug\Logger {}
}