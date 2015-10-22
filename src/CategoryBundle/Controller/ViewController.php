<?php

namespace CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CategoryBundle\Entity\category;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class ViewController extends Controller
{
    public function showAction()
	{
$getcategory=$this->getDoctrine()->getRepository('CategoryBundle:category')->findAll();		
	return $this->render('CategoryBundle:View:categories.html.twig',array('data' => $getcategory));		
	}
}
