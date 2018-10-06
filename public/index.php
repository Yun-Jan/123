<?php
/**
 * Created by PhpStorm.
 * User: yunjan
 * Date: 10/6/18
 * Time: 9:05 AM
 */
main::start();

class main {
    static public function start(){
        $file = fopen("example.csv", "r");
        while(! feof($file)){

            $record = fgetcsv($file);
            $records[]= $record;
        }

        fclose($file);
        print_r($records);
    }
}
