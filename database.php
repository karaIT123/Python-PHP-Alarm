<?php
class Database
{
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "root";
    private $dbName = "alarm";

    private $statement;
    private $dbHandler;
    private $error;

    public function __construct()
    {
        $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    //Allows us to write queries
    public function query($sql)
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null)
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    //Execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    //Return an array
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Return a specific row as an object
    public function getInformations()
    {
        $row = $this->dbHandler->query("SELECT * FROM alarm_one");
        #var_dump($row->fetchALL(PDO::FETCH_OBJ));
        return $row->fetch(PDO::FETCH_OBJ);
        #return $row->fetchALL(PDO::FETCH_CLASS,'Alarm');
    }

    //Get's the row count
    public function rowCount()
    {
        return $this->statement->rowCount();
    }

    public function setStatus($parameter)
    {
        if($parameter == 1){
            $this->dbHandler->exec("UPDATE alarm_one SET status = 1 WHERE id = 1");
        }
        elseif ($parameter == 0)
        {
            $this->dbHandler->exec("UPDATE alarm_one SET status = 0 WHERE id = 1");
        }
    }

    public function setZ1($parameter)
    {
        if($parameter == 1){
            $this->dbHandler->exec("UPDATE alarm_one SET z1 = 1 WHERE id = 1");
        }
        elseif ($parameter == 0)
        {
            $this->dbHandler->exec("UPDATE alarm_one SET z1 = 0 WHERE id = 1");
        }
    }

    public function setZ2($parameter)
    {
        if($parameter == 1){
            $this->dbHandler->exec("UPDATE alarm_one SET z2 = 1 WHERE id = 1");
        }
        elseif ($parameter == 0)
        {
            $this->dbHandler->exec("UPDATE alarm_one SET z2 = 0 WHERE id = 1");
        }
    }

    public function setZ3($parameter)
    {
        if($parameter == 1){
            $this->dbHandler->exec("UPDATE alarm_one SET z3 = 1 WHERE id = 1");
        }
        elseif ($parameter == 0)
        {
            $this->dbHandler->exec("UPDATE alarm_one SET z3 = 0 WHERE id = 1");
        }
    }

    public function setZ4($parameter)
    {
        if($parameter == 1){
            $this->dbHandler->exec("UPDATE alarm_one SET z4 = 1 WHERE id = 1");
        }
        elseif ($parameter == 0)
        {
            $this->dbHandler->exec("UPDATE alarm_one SET z4 = 0 WHERE id = 1");
        }
    }

}