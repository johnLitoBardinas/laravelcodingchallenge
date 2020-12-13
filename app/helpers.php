<?php

use \Faker\Factory as FakerFactory;

/*
|--------------------------------------------------------------------------
| Helpers functions
|--------------------------------------------------------------------------
|
| This file is where you may define all of your common functions. No need to import
| this file because the file already imported via composer autoload.
| NOTE. If your defined function not working run the `composer dump-autoload` command to refresh the auto load.
|
*/

if (! function_exists('generate_employee_id')) {
    function generate_employee_id(string $prefix = 'fsct')
    {
        $faker = FakerFactory::create();
       return strtolower(sprintf('%s-%s', $prefix, substr($faker->sha256, 0, 6)));
    }
}