<?php
if ( php_sapi_name() == 'cli'){
    echo "..........\n";
    // start php server on port 8080
    exec("php -S localhost:8080");
}
