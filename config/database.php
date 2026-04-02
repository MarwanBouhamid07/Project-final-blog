<?php 

class Database{
    private $host='localhost';
    private $dbname = 'devspace';
    private $username = 'root';
    private $password  = '';

    public $conn;

    
    public function getconnection(){
        $this->conn = null;
        $dsn="mysql:host={$this->host};dbname={$this->dbname};" ;

        try{
            $this->conn = new PDO($dsn,$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("error:". $e->getMessage());
        }
        return $this->conn;
    }
}