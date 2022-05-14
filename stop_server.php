<?php
if (php_sapi_name() == 'cli') {
    echo "..........\n";
    exec("ps -ef | grep php", $output);
    foreach ($output as $valor) {
        if(preg_match("/php -S localhost:8080/",$valor)){
            preg_match("/\d+/",$valor,$match);
            if(!empty($match[0])){
                $pid = $match[0];
                exec("kill -9 $pid");
                echo "Process $pid terminated\r\n";
            }
        }
    }
}
