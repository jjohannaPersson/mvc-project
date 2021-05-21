<?php

namespace App\Controller;

use App\Entity\Book;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    /**
     * @Route("/book/create", name="create_book")
     */
    public function createBook(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $book = new Book();
        $book->setName('Baka med choklad');
        $book->setIsbn('9789155268435');
        $book->setAuthor('Fredrik Nylén');
        $book->setPic('https://s2.adlibris.com/images/57372981/baka-med-choklad.jpg');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($book);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new book with id ' . $book->getId());
    }

    /**
     * @Route("/allbooks", name="find_all_books")
     */
    public function findAllBook(
        EntityManagerInterface $entityManager
    ): Response {
        $books = $entityManager
            ->getRepository(Book::class)
            ->findAll();

        return $this->render('book/show.html.twig', [
            "books" => $books,
        ]);
    }
}
