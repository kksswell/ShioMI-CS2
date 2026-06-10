<?php
class DataBase {
	
    private $PDO;

    public function __construct() {
        try {
            $this->PDO = new PDO("mysql:host=".DB_HOST."; port=".DB_PORT."; dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        $this->PDO = new PDO("mysql:host=95.213.255.10;port=3306;dbname=u4969_sdadsad", "u4969_vjwR1MsFuX", "eNUDolcO!N70JY.JoZ.r873K", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        {
            echo "<div style='display: flex; flex-direction: column;align-items: center;justify-content: center;text-align: center;'><h2>Problem with database!</h2>";
            die("<pre style='padding: 10px;text-wrap: balance; border: 2px solid #ed6bd3;background: #252525; color: #ed6bd3; width: 50%;'>" . $ex . "</pre>");
        }
    }
    public function select($query, $bindings = []) {
        $STH = $this->PDO->prepare($query);
        $STH->execute($bindings);
        $result = $STH->fetchAll(PDO::FETCH_ASSOC);
		$result ??= false;
		return $result;
    }

    public function query($query, $bindings = []){
        $STH = $this->PDO->prepare($query);
        return $STH->execute($bindings);
    }

}
