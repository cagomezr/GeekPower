<?php
include_once('iDatabase.php');

class Database implements iDatabase
{
    private static $dbName = 'geek_power';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = ''; //empty due to my db setup
    
    private static $cont = null;
    public static function connect()
    {
        if (null == self::$cont) {
            try {
                self::$cont = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword);
            }
            catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
    public static function disconnect()
    {
        self::$cont = null;
    }
    public static function read($id)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM games where id = ?";
        $q   = $pdo->prepare($sql);
        $q->execute(array(
            $id
        ));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $data;
    }
    
    public static function add($title, $genre, $esrb, $quantity, $price)
    {
        $pdo = self::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO games( title, genre, esrb, quantity, price) VALUES (?, ?, ?, ?, ?)";
        $q   = $pdo->prepare($sql);
        $q->execute(array(
            $title,
            $genre,
            $esrb,
            $quantity,
            $price
        ));
        self::disconnect();
        
    }
    
    public static function edit($id, $title, $genre, $esrb, $quantity, $price)
    {
        $pdo = self::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE  games  SET  title =?, genre =?, esrb =?, quantity =?, price =? WHERE id=?";
        
        $q = $pdo->prepare($sql);
        $q->execute(array(
            $title,
            $genre,
            $esrb,
            $quantity,
            $price,
            $id
        ));
        self::disconnect();
    }
    
    public static function delete($id)
    {
        $pdo = self::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM games  WHERE id = ?";
        $q   = $pdo->prepare($sql);
        $q->execute(array(
            $id
        ));
        self::disconnect();
    }
    public static function getAll()
    {
        $pdo = self::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM games";
        $q   = $pdo->prepare($sql);
        $q->execute();
        $data = $q->fetchAll(PDO::FETCH_ASSOC);
        self::disconnect();
        return $data;
    }
}
?>