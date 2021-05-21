<?php

namespace App\Controller;

use App\Entity\HighScore;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HighScoreController extends AbstractController
{
    /**
     * @Route("/high/score", name="high_score")
     */
    public function index(): Response
    {
        return $this->render('high_score/index.html.twig', [
            'controller_name' => 'HighScoreController',
        ]);
    }

    /**
     * @Route("/highscore/create", name="create_score", methods={"POST"})
     */
    public function createHighscore(): Response
    {
        $session = $this->get('session');
        $game21 = $session->get('game');

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $highscore = new HighScore();
        $highscore->setScore($game21->getWonRounds()["human"]);

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($highscore);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return $this->redirectToRoute('highscore');
    }

    /**
     * @Route("/highscore", name="highscore")
     */
    public function findAllHihgscore(
        EntityManagerInterface $entityManager
    ): Response {
        $highscore = $entityManager
            ->getRepository(HighScore::class)
            ->findAll();

        $scores = array();
        foreach ($highscore as $hs) {
            $scores[] = $hs->score;
        }

        array_multisort($scores, SORT_DESC, $highscore);

        return $this->render('high_score/highscore.html.twig', [
            "highscore" => $highscore,
        ]);
    }
}
