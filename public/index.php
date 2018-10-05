<?php
/**
 * Created by PhpStorm.
 * User: yunjan
 * Date: 10/4/18
 * Time: 8:10 PM
 */

main::start();

class main {
    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        system::printPage($table);

    }
}
class csv {

    static public function getRecords() {

    }
}

class html{

    static public function generateTable($records) {

        $table = $records;

        return $table;
    }
}

class system{

    static public function printPage($page) {

        echo $page;
    }

}