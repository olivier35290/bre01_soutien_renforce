<?php
require '../models/Bets.php';

class BetManager
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $statement = $this->pdo->query('SELECT * FROM bets');
        return $statement->fetchAll(PDO::FETCH_CLASS, 'Bet');
    }
    
    public function findOne(int $id): ?Bet
    {
    $statement = $this->pdo->prepare('SELECT * FROM bets WHERE id = :id');
    $statement->execute(['id' => $id]);
    $bet = $statement->fetchObject('Bet');
    
    return ($bet !== false) ? $bet : null;
    }
}    