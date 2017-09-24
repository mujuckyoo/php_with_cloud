<?php
/**
 * @author Ravi Tamada
 * @link http://www.androidhive.info/2012/01/android-login-and-registration-with-php-mysql-and-sqlite/ Complete tutorial
 */

class DB_Connect {
    private $conn;

    // Connecting to database
    public function connect() {
        require_once 'Config.php';
        
        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        // -> 이거는 java에서 . 을 의미한다. this.conn 모클래스의 변수
        // return database handler
        return $this->conn;
    }
}

?>
