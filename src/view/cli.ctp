<?php
/**
 * Template PHP
 *
 */

foreach ($logs as $row) {
    //printf("%'02d",  ++ $i);
    echo "\033[02;33m  #[{$row['time']} - {$row['level']} - {$row['ctg']}]";
    echo "\033[00m {$row['msg']}\n";

}
