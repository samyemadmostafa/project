<?php

namespace ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ArticleBundle\Form\Admin\ArticleType;
use ArticleBundle\Entity\article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class AdminController extends Controller
{
    public function showarticleadminAction(Request $request)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$getarticle=$this->getDoctrine()->getRepository('ArticleBundle:article')->findAll();		
return $this->render('ArticleBundle:Admin:adminarticle.html.twig',array('data' => $getarticle));	
	}
	public function addadminarticleAction(Request $request)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$session= new Session();		
	$article=new article();
$form=$this->createForm(new ArticleType(), $article);			
$form->handleRequest($request);
$em=$this->getDoctrine()->getManager();
$getcategory=$form->get('category_id')->getData();	
	if($form->isValid())
	{	
	$article->setCategoryId($getcategory);
	$em->persist($article);	
	$em->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your article has been added sucessfully',array(),'article'));

	}	
return $this->render('ArticleBundle:Admin:actionadminarticle.html.twig',array('form' => $form->createView(),'action' => 'add'));		
	}
	public function editadminarticleAction(Request $request,$articleid)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$session= new Session();		
	$em2=$this->getDoctrine()->getManager();	
    $getarticle=$em2->getRepository('ArticleBundle:article')->find($articleid);	
$form2=$this->createForm(new ArticleType(), $getarticle);
$form2->handleRequest($request);
$getcategory=$form2->get('category_id')->getData();
if($form2->isValid())
	{	
$getarticle->setCategoryId($getcategory);
$em2->persist($getarticle);	
	$em2->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your article has been edited sucessfully',array(),'article'));	
	}	
return $this->render('ArticleBundle:Admin:actionadminarticle.html.twig',array('form' => $form2->createView(),'action' => 'edit'));		
	}
	public function deladminarticleAction(Request $request,$articleid)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
	$session= new Session();		
	$em3=$this->getDoctrine()->getManager();	
    $delarticle=$em3->getRepository('ArticleBundle:article')->find($articleid);
	$getimage=$delarticle->getImage();
$form3=$this->createForm(new ArticleType(), $delarticle);
$form3->remove('name')
->remove('description')->remove('image')->remove('date')->remove('category_id');
$form3->handleRequest($request);
if($form3->isValid())
	{
$emcomment=$this->getDoctrine()->getManager();	
$comments=$emcomment->getRepository('CommentsBundle:comments')->findBy(
    array('article_id' => $articleid)
);
foreach($comments as $comment)
{
$emcomment->remove($comment);
}	
$getroot=$delarticle->getUploadRootDir();
unlink($getroot."/".$getimage);	
	$em3->remove($delarticle);
	
	$em3->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your article has been deleted sucessfully',array(),'article'));
	}	
return $this->render('ArticleBundle:Admin:actionadminarticle.html.twig',array('form' => $form3->createView(),'action' => 'del'));			
	}
}
