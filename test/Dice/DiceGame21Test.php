<?php

declare(strict_types=1);

namespace App\Game21;

use PHPUnit\Framework\TestCase;
use App\Game21\Player;

/**
 * Test cases for the class Game21.
 */
class DiceGame21Test extends TestCase
{
    /**
    * Try to create the controller class.
    */
    public function testCreateTheControllerClass()
    {
        $controller = new Game21();
        $this->assertInstanceOf("\App\Game21\Game21", $controller);
    }

    /**
    * Try to create the controller class.
    */
    public function testgetWinner()
    {
        $controller = new Game21();
        $controller->setScorePlayer(21);
        $controller->setScoreComputer(20);

        $exp = "Du";
        $res = $controller->getWinner();
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testgetWinner2()
    {
        $controller = new Game21();
        $controller->setScorePlayer(20);
        $controller->setScoreComputer(23);

        $exp = "Du";
        $res = $controller->getWinner();
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testgetWinner3()
    {
        $controller = new Game21();
        $controller->setScorePlayer(20);
        $controller->setScoreComputer(21);

        $exp = "Datorn";
        $res = $controller->getWinner();
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testresetScores()
    {
        $controller = new Game21();
        $controller->setScorePlayer(20);
        $controller->setScoreComputer(21);

        $res = $controller->resetScores();
        $this->assertNull($res);
        // $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testroundIsOver()
    {
        $controller = new Game21();

        $exp = false;
        $res = $controller->roundIsOver();
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testgetHistogram()
    {
        $controller = new Game21();

        $res = $controller->getHistogram();
        $this->assertIsArray($res);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testbetBitcoins()
    {
        $controller = new Game21();

        $exp = 4;
        $controller->betBitcoins(4);
        $res = $controller->getBetBitcoins();
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testgetBitcoinsHuman()
    {
        $controller = new Game21();

        $exp = 10;
        $res = $controller->getBitcoins()["human"];
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testgetWonRounds()
    {
        $controller = new Game21();

        $exp = 0;
        $res = $controller->getWonRounds()["human"];
        $this->assertEquals($res, $exp);
        $res = $controller->quitRound();
    }

    /**
    * Try to create the controller class.
    */
    public function testComputer()
    {
        $controller = new Player(1);
        $res = $controller->computer(22);

        $this->assertNull($res);
    }
}
