<?php
//  Exception details example
class ServerLoadException extends Exception{};
class NetworkException extends Exception{};
class DiskFullException extends Exception{};

interface NetworkStorage{
    function connect();
    function getName();
}

class MySQLServer implements NetworkStorage{
    function connect(){
        throw new DiskFullException;
    }
    function getName(){
        return "MYSQl";
    }
}
class PostgreSQLServer implements NetworkStorage{
    function connect(){
        return true;
    }
    function getName()
    {
        return "POSTGRESQL";
    }
}
class MSSQLServer implements NetworkStorage{
    function connect(){
        return $this;
    }
    function getName()
    {
        return "MSSQl";
    }
}

class ConnectionPool{
    private $connection;
    private $storage;
    function __construct()
    {
        $this->storage = array();
    }

    function addStorage(NetworkStorage $storage) {
        array_push($this->storage, $storage); 
    }

    function getConnetion(){
        foreach($this-> storage as $storage) {
            try{
                $this->connection = $storage->connect();
            } catch(ServerLoadException $e){
                echo $storage->getName()." is facing huge load";
            }catch(NetworkException $e){
                echo $storage->getName()." is having some problem with it's network";
            }catch(DiskFullException $e){
                echo $storage->getName()." has it's display full";
            }

            if($this->connection){
                break;
            }
        }

        if($this->connection){
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($pgsql);
$cp->addStorage($mssql);

$connection = $cp->getConnetion();