<?php

namespace App\Controller;

use App\Entity\Difficulty;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DifficultyController extends AbstractController
{
    /**
     * @Route("/difficulty", name="difficulty")
     */
	public function index(EntityManagerInterface $em)
	{
		$array = ['chicken', 'medium', 'hard'];

		foreach ($array as $line) {
			$em = $this->getDoctrine()->getManager();
	
			$dif = new Difficulty();
			$dif->setName($line);
			
			$em->persist($dif);
			$em->flush();
		}
        
        return $this->render('difficulty/index.html.twig', [
            'controller_name' => 'DifficultyController',
        ]);
    }
}
