<?php

namespace CommentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CommentsBundle\Entity\comments;
class ViewController extends Controller
{
    public function showAction($articlecat)
	{
    $getcomments=$this->getDoctrine()->getRepository('CommentsBundle:comments')->findBy(
    array('article_id' => $articlecat)
);	
	return  $this->render('CommentsBundle:View:maincomments.html.twig',array('data' => $getcomments));	
	}
	public function addAction($articlecat)
	{
	
	return $this->render('CommentsBundle:View:addcomments.html.twig',array('articleid' => $articlecat));	
	}
	public function submitaddcommentAction(Request $request)
	{
	$comments=new comments();
	$em=$this->getDoctrine()->getManager();
    $authorname= $request->request->get('authorname');
    $authoremail= $request->request->get('authoremail');
    $authorurl= $request->request->get('authorurl');
    $description= $request->request->get('description');
    $article_id=$request->request->get('article_id');
    $comments->setAuthorName($authorname);
    $comments->setAuthorEmail($authoremail);
    $comments->setAuthorUrl($authorurl);
    $comments->setDescription($description);
    $comments->setArticleId($article_id);
    $em->persist($comments);	
	$em->flush();	
	return $this->redirectToRoute('mainblogdescription',array('articleid' => $article_id));		
	}
}
