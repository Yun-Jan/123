<?php
/**
 * Created by PhpStorm.
 * User: yunjan
 * Date: 10/4/18
 * Time: 8:10 PM
 */

main::start("example.cvs");

class main {
    static public function start($filename) {
        $records = csv::getRecords($filename);
        $table = html::generateTable($records);

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