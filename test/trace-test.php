<?php
/**
 * trace-test.php file
 *
 * @author     Dmitriy Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitriy Tyurin
 */

require_once __DIR__.'/bootstrap.php';



Fac\Dbg\Log::enable(true);

Fac\Dbg\Log::trace("This is firs trace");
Fac\Dbg\Log::error("Error message");
Fac\Dbg\Log::dump("Error message");
//Log::dump($_SERVER);

Fac\Dbg\Log::render();