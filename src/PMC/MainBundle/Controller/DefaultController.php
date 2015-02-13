<?php

namespace PMC\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render('PMCMainBundle:Default:index.html.twig');
	}


}
