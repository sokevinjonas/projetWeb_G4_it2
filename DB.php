<?php

namespace Database;

use PDO;
use PDOException;

class DB
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $serveur = 'localhost';
        $utilisateur = 'root';
        $mot_de_passe = '';
        $base_de_donnees = 'g_universite';

        try {
            $this->connection = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connection : " . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getconnection()
    {
        return $this->connection;
    }

    public static function query(string $q)
    {
        $db = self::getInstance()->getconnection();
        $result = $db->query($q);
        return $result;
    }

    /*
        $data = ['name' => 'John', 'email' => 'john@example.com', 'age' => 30];
        $db->insert('users', $data);
    */
    public function insert(string $table, array $data)
    {
        $keys = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($keys) VALUES ($values)";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(array_values($data));
    }

    /*
        $db = Database::getInstance();
        $data = ['name' => 'John Doe', 'age' => 35];
        $condition = 'id = ?';
        $params = [1];
    */
    public function update(string $table, array $data, string $condition, array $params = [])
    {
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "$key = ?";
            $values[] = $value;
        }
        $set = implode(', ', $set);
        $params = array_merge($values, $params);
        $sql = "UPDATE $table SET $set WHERE $condition";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
    }

    /*
        $condition = 'id = ?';
        $params = [1];
    */
    public function delete(string $table, string $condition, array $params = [])
    {
        $sql = "DELETE FROM $table WHERE $condition";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
    }

    /*
        $condition = 'age > ?';
        $params = [25];
    */
    public function select(string $table, string $condition = '', array $params = [])
    {
        $sql = "SELECT * FROM $table";
        if ($condition) {
            $sql .= " WHERE $condition";
        }
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
