<?php
interface iDatabase
{
    public static function connect();    
    public static function disconnect();
    public static function read($id);
    public static function add($title, $genre, $esrb, $quantity, $price);
    public static function edit($id, $title, $genre, $esrb, $quantity, $price);
    public static function delete($id);
}
?>