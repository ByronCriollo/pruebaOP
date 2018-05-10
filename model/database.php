<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=bddprueba.mysql.database.azure.com;dbname=bdd;charset=utf8', 'byron@bddprueba', '2092Acer');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
