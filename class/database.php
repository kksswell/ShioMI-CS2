<?php

class DataBase {

    private $PDO;

    public function __construct() {
        try {
            $this->PDO = new PDO("mysql:host=95.213.255.10;port=3306;dbname=u4969_sdadsad", "u4969_vjwR1MsFuX", "m4UGeLCh19dfPJs2_M27K", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $ex) {
            echo '<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;"><h2>Problem with database</h2>';
            die("<pre style='padding: 10px; text-wrap: balance; border: 1px solid #ed888d; background: #252525; color: #ed888d; width: 50%;'>" . $ex . "</pre>");
        }
    }

    public function select($query, $bindings = []) {
        $STH = $this->PDO->prepare($query);
        $STH->execute($bindings);
        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
        $result = $result ?: false;
        return $result;
    }

    public function query($query, $bindings = []) {
        $STH = $this->PDO->prepare($query);
        return $STH->execute($bindings);
    }

}