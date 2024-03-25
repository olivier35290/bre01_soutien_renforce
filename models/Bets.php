<?php


class Bets
{
    private ? int $id = null;

    public function __construct(private int $GameId, private string $UserName, private int $ResultHomeTeam, private int $ResultGuestTeam)
    {

    }


  // Getters and setters

  public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function setGame(Game $game): void
    {
        $this->game = $game;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function getResultHomeTeam(): int
    {
        return $this->resultHomeTeam;
    }

    public function setResultHomeTeam(int $resultHomeTeam): void
    {
        $this->resultHomeTeam = $resultHomeTeam;
    }

    public function getResultGuestTeam(): int
    {
        return $this->resultGuestTeam;
    }

    public function setResultGuestTeam(int $resultGuestTeam): void
    {
        $this->resultGuestTeam = $resultGuestTeam;
    }
}