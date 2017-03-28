<?php

namespace rklandesverband\oci8date;

use sfedosimov\oci8pdo\Oci8PDO_Connection;

/**
 * This is just an example.
 */
class Oci8date_Connection extends Oci8PDO_Connection {

    public function initConnection() {
        parent::initConnection();
        $this->pdo->exec("alter session set NLS_DATE_FORMAT='YYYY-MM-DD HH24:MI:SS'");
    }

}
