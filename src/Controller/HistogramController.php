<?php

namespace App\Controller;

use App\Entity\Histogram;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HistogramController extends AbstractController
{
    /**
     * @Route("/histograms", name="histograms")
     */
    public function index(): Response
    {
        return $this->render('histogram/index.html.twig', [
            'controller_name' => 'HistogramController',
        ]);
    }

    /**
     * @Route("/histogram/create", name="create_histogram")
     */
    public function createHistogram(Request $request)
    {
        $session = $this->get('session');
        $game21 = $session->get('game');

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $histogram = new Histogram();
        $histogram->setPoints($game21->getHistogram());

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($histogram);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        // return new Response('Saved new book with id ' . $book->getId());
        return $this->redirect('../histogram');
    }

    /**
     * @Route("/histogram", name="histogram")
     */
    public function findHistogram(
        EntityManagerInterface $entityManager
    ): Response {
        $histogram = $entityManager
            ->getRepository(Histogram::class)
            ->findAll();

        return $this->render('histogram/histogram.html.twig', [
            "histogram" => $histogram,
        ]);
    }
}
