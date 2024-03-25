<?php
require '../models/Games.php';

class GameManager
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $statement = $this->pdo->query('SELECT * FROM games');
        return $statement->fetchAll(PDO::FETCH_CLASS, 'game');
    }

    
    public function findOne(int $id): ?Game
    {
        $statement = $this->pdo->prepare('SELECT * FROM games WHERE id = :id');
        $statement->execute(['id' => $id]);
        $game = $statement->fetchObject('Game');
        
        return ($game !== false) ? $game : null;
    }
}

