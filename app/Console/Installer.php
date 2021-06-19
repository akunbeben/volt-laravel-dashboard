<?php

$env = trim(exec('php artisan env'));

// Clean up response to get the value we actually want
$env = substr($env, strrpos($env, ' ') + 1);

$envFlag = ($env === 'production')
    ? '--production'
    : '';

// Install npm
passthru("npm install {$envFlag} && npm run {$envFlag}");
