<?php
namespace App\Controller;

use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class homeController extends  AbstractController
{

    // home function
    public function index()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();
        $articles = $entityManager->getRepository(Article::class)->findAll();

        return $this->render('Private/Article.twig', array(
            'articles' => $articles,
        ));
    }
}