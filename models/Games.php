<?php


class Games
{
    private ? int $id = null;

    public function __construct(private string $FlagHomeTeam, private string $NameHomeTeam, private int $ResultHomeTeam, private string  $FlagGuestTeam, private string $NameGuestTeam, private int $ResultGuestTeam, private string $Description)
    {

    }


  // Getters and setters

  public function getId(): ?int
  {
    return $this->id;
  }

  public function setId(int $id): void
  {
    $this->id = $id;
  }

  public function getFlagHomeTeam(): string
  {
    return $this->flagHomeTeam;
  }

  public function setFlagHomeTeam(string $flagHomeTeam): void
  {
    $this->flagHomeTeam = $flagHomeTeam;
  }

  public function getNameHomeTeam(): string
  {
    return $this->nameHomeTeam;
  }

  public function setNameHomeTeam(string $nameHomeTeam): void
  {
    $this->nameHomeTeam = $nameHomeTeam;
  }

  public function getResultHomeTeam(): int
  {
    return $this->resultHomeTeam;
  }

  public function setResultHomeTeam(int $resultHomeTeam): void
  {
    $this->resultHomeTeam = $resultHomeTeam;
  }

  public function getFlagGuestTeam(): string
  {
    return $this->flagGuestTeam;
  }

  public function setFlagGuestTeam(string $flagGuestTeam): void
  {  
    $this->flagGuestTeam = $flagGuestTeam;
  }

  public function getNameGuestTeam(): string
  {
    return $this->nameGuestTeam;
  }

  public function setNameGuestTeam(string $nameGuestTeam): void
  {
    $this->nameGuestTeam = $nameGuestTeam;
  }

  public function getResultGuestTeam(): int
  {
    return $this->resultGuestTeam;
  }

  public function setResultGuestTeam(int $resultGuestTeam): void
  {
    $this->resultGuestTeam = $resultGuestTeam;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }
}