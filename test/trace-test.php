<?php
/**
 * trace-test.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */

require_once __DIR__.'/bootstrap.php';
use \Gopcode\Debug\Logger as Log;

\Gopcode\Debug\Config::enable(true);
\Gopcode\Debug\Config::register();


Log::trace("This is firs trace.");
DLog::error("Error message");
//Log::dump($_SERVER);



//DLog::render();