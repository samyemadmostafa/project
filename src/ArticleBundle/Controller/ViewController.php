<?php

namespace ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ArticleBundle\Entity\article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class ViewController extends Controller
{
	public function showpostsAction()
    {
	$getarticle=$this->getDoctrine()->getRepository('ArticleBundle:article')->findAll();	
        return $this->render('ArticleBundle:View:homearticle.html.twig',array('data' => $getarticle));
    }
	public function showcatpostsAction($catid)
    {
	$getarticle=$this->getDoctrine()->getRepository('ArticleBundle:article')->findBy(
    array('category_id' => $catid)
);	
        return $this->render('ArticleBundle:View:homearticle.html.twig',array('data' => $getarticle));
    }
	public function showpostdescAction($articlecat)
    {
	$getarticle=$this->getDoctrine()->getRepository('ArticleBundle:article')->find($articlecat);	
        return $this->render('ArticleBundle:View:singlearticle.html.twig',array('data' => $getarticle));
    }
}
