<?php

require_once 'MysqlConnection.php';

abstract class MysqlAbstractRepository{

    protected mysqli $connection;

    public function __construct()
    {
        $this->connection = MysqlConnection::getConnection();
    }

}