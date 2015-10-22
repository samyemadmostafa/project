<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Form\Admin\UserType;
use UserBundle\Entity\user;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class AdminController extends Controller
{
   public function showuseradminAction(Request $request)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$getuser=$this->getDoctrine()->getRepository('UserBundle:user')->findAll();		
return $this->render('UserBundle:Admin:adminusers.html.twig',array('data' => $getuser));	
	}
	public function editadminuserAction(Request $request,$userid)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$session= new Session();		
	$em2=$this->getDoctrine()->getManager();	
    $getuser=$em2->getRepository('UserBundle:user')->find($userid);
$form2=$this->createForm(new UserType(), $getuser);
$form2->handleRequest($request);
if($form2->isValid())
	{
	$em2->persist($getuser);	
	$em2->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your user has been edited sucessfully',array(),'user'));
	}	
return $this->render('UserBundle:Admin:actionadminusers.html.twig',array('form' => $form2->createView(),'action' => 'edit'));		
	}
}
