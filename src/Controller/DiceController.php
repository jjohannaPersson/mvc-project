<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Dice\Dice;
use App\Dice\DiceHand;

class DiceController extends AbstractController
{
    public function diceGame(): Response
    {
        $die = new Dice(6);
        $die->roll();

        $diceHand = new DiceHand(2);
        $diceHand->roll();

        $dieLastRoll = $die->getLastRoll();
        $diceHandRoll = $diceHand->getLastRoll();

        $graphicDices = $diceHand->graphicDices();

        return $this->render('dice.html.twig', [
            "header" => "Tärningar",
            "message" => "Rulla tärningarna!",
            "dieLastRoll" => $dieLastRoll,
            "diceHandRoll" => $diceHandRoll,
            "graphicDices" => $graphicDices,
        ]);
    }
}
