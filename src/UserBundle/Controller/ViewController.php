<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Form\Admin\UserLogin;
use UserBundle\Entity\user;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class ViewController extends Controller
{
public function showAction()
{
$getuser=$this->getDoctrine()->getRepository('UserBundle:user')->find(1);
	
return $this->render('UserBundle:View:users.html.twig',array('data' => $getuser ));	
}
}
