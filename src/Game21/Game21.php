<?php

declare(strict_types=1);

namespace App\Game21;

use App\Game21\Player;

/**
 * Class Game21.
 */
class Game21
{
    private $player;
    private $computerPlayer;
    private $roundEnded = false;
    private $bet;
    private $histogram = array();

    public function __construct(int $dices = 1)
    {
        $this->player = new Player($dices);
        $this->player->bitcoins(10);
        $this->computerPlayer = new Player($dices);
        $this->computerPlayer->bitcoins(100);
    }

    public function betBitcoins(int $bitcoin)
    {
        $this->bet = $bitcoin;
        return $this->bet;
    }

    public function getBetBitcoins(): int
    {
        return $this->bet;
    }

    public function graphicDice()
    {
        return $this->player->getGraph();
    }

    public function rollPlayer()
    {
        $this->player->roll();
        return $this->player->getScore();
    }

    public function getScores()
    {
        return [
            "human" => $this->player->getScore(),
            "computer" => $this->computerPlayer->getScore()
        ];
    }

    public function getWonRounds()
    {
        return [
            "human" => $this->player->getWonRounds(),
            "computer" => $this->computerPlayer->getWonRounds()
        ];
    }

    public function getBitcoins()
    {
        return [
            "human" => $this->player->getBitcoins(),
            "computer" => $this->computerPlayer->getBitcoins()
        ];
    }

    public function setScorePlayer(int $testScore)
    {
        $this->player->setScore($testScore);
    }

    public function setScoreComputer(int $testScore)
    {
        $this->computerPlayer->setScore($testScore);
    }

    public function computer()
    {
        $this->computerPlayer->computer($this->player->getScore());
    }

    public function quitRound()
    {
        $scores = $this->getScores();
        if ($scores["human"] > $scores["computer"] && $scores["human"] < 22) {
            $this->player->incrementWonRounds();
            $this->player->addBitcoins($this->bet * 2);
            $this->computerPlayer->removeBitcoins($this->bet);
            array_push($this->histogram, $scores["human"]);
        } elseif ($scores["human"] < 22 && $scores["computer"] > 21) {
            $this->player->incrementWonRounds();
            $this->player->addBitcoins($this->bet * 2);
            $this->computerPlayer->removeBitcoins($this->bet);
            array_push($this->histogram, $scores["human"]);
        } else {
            $this->computerPlayer->incrementWonRounds();
            $this->computerPlayer->addBitcoins($this->bet);
            $this->player->removeBitcoins($this->bet);
        }
        $this->roundEnded = true;
    }

    public function getHistogram(): array
    {
        return $this->histogram;
    }

    public function getWinner(): string
    {
        $scores = $this->getScores();
        if ($scores["human"] > $scores["computer"] && $scores["human"] < 22) {
            return "Du";
        } elseif ($scores["human"] < 22 && $scores["computer"] > 21) {
            return "Du";
        }

        return "Datorn";
    }

    public function resetScores()
    {
        $this->player->resetScore();
        $this->computerPlayer->resetScore();
        $this->roundEnded = false;
    }

    public function roundIsOver()
    {
        return $this->roundEnded;
    }
}
