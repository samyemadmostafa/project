<?php

namespace CommentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CommentsBundle\Form\CommentsType;
use CommentsBundle\Entity\comments;
class ViewController extends Controller
{
    public function showAction()
	{
	return  $this->render('CommentsBundle:View:maincomments.html.twig');	
	}
	public function addAction()
	{
	$comments=new comments();
	$form=$this->createForm(new CommentsType, $comments);	
	return $this->render('CommentsBundle:View:addcomments.html.twig',array('form' => $form->createView()));	
	}
}
