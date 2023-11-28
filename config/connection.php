<?php
namespace App\Database;
use PDO;
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_DATABASE','php_mvc');
define('DB_PASSWORD','');

class Connection
{
    private $host;
    private $database;
    private $username;
    private $password;

    protected $connection;

    public function __construct()
    {
        $this->host = DB_HOST;
        $this->database = DB_DATABASE;
        $this->username = DB_USER;
        $this->password = DB_PASSWORD;

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
