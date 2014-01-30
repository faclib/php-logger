<?php
/**
 * trace-test.php file
 *
 * @author     Dmitryi Tyurin <fobia3d@gmail.com>
 * @copyright  Copyright (c) 2014 Dmitryi Tyurin
 */

require_once __DIR__.'/bootstrap.php';

Log::enable(true);

Log::trace("This is firs trace.");
Log::error("Error message");
Log::dump($_SERVER);

Log::render();