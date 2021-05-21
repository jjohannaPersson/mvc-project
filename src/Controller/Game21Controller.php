<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Dice\Dice;
use App\Dice\DiceHand;
use App\Game21\Game21;

class Game21Controller extends AbstractController
{
    public function game21(): Response
    {
        $session = new Session();
        // $session->start();
        $session->invalidate();
        $session = $this->get('session');
        if ($session->has('game') == false) {
            $session->set('game', new Game21());
        }

        return $this->render('game21.html.twig', [
            "header" => "Game 21",
            "message" => "Välj om du vill spela med en eller två tärningar:",
        ]);
    }

    public function game21post(): Response
    {
        $session = $this->get('session');

        if (array_key_exists("dices", $_POST)) {
            $dices = intval($_POST["dices"]);
            $session->set('game', new Game21($dices));
        }

        return $this->redirectToRoute('play21');
    }

    public function play21(): Response
    {
        $session = $this->get('session');
        $game21 = $session->get('game');

        if (array_key_exists("dices", $_POST)) {
            $dices = intval($_POST["dices"]);
            $session->set('game', new Game21($dices));
        }

        return $this->render('play21.html.twig', [
            "header" => "Game 21",
            "scores" => $game21->getScores(),
            "class" => $game21->graphicDice(),
            "wonRounds" => $game21->getWonRounds(),
            "winner" => $game21->getWinner(),
            "roundIsOver" => $game21->roundIsOver()
        ]);
    }

    public function play21post(): Response
    {
        $session = $this->get('session');
        $game21 = $session->get('game');

        if (array_key_exists("roll", $_POST)) {
            $game21->rollPlayer();
            $tot = $game21->getScores()["human"];
            if ($tot === 21) {
                $game21->quitRound();
            } elseif ($tot > 21) {
                $game21->quitRound();
            }
            return $this->redirectToRoute('play21');
        } elseif (array_key_exists("stay", $_POST)) {
            $game21->computer();
            $game21->quitRound();
            return $this->redirectToRoute('play21');
        } elseif (array_key_exists("play-again", $_POST)) {
            $game21->resetScores();
            return $this->redirectToRoute('play21');
        } elseif (array_key_exists("new-game", $_POST)) {
            return $this->redirectToRoute('game21');
        };

        return $this->redirectToRoute('play21');
    }
}
