<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
	public function index(EntityManagerInterface $em)
	{
		// $array = ["Cinema","Serie","Musique","Litterature","Histoire","Geographie","Jeux-video"];

		// foreach ($array as $line) {
		// 	$em = $this->getDoctrine()->getManager();
	
		// 	$cat = new Category();
		// 	$cat->setName($line);
			
		// 	$em->persist($cat);
		// 	$em->flush();
		// }
        
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
