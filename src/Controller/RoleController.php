<?php

namespace App\Controller;

use App\Entity\Role;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoleController extends AbstractController
{
	/**
	 * @Route("/role", name="role")
	 */
	public function index(EntityManagerInterface $em)
	{
		// $array = ['admin', 'moderator', 'user'];

		// foreach ($array as $line) {
		// 	$em = $this->getDoctrine()->getManager();
	
		// 	$role = new Role();
		// 	$role->setName($line);
			
		// 	$em->persist($role);
		// 	$em->flush();
		// }

		return $this->render('role/index.html.twig', [
			'controller_name' => 'RoleController',
		]);
	}
}
