<?php

namespace CategoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CategoryBundle\Form\Admin\CategoryAdmin;
use CategoryBundle\Entity\category;
use Symfony\Component\HttpFoundation\Session\Session; 
class AdminController extends Controller
{
	public function showcatadminAction(Request $request)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$getcategory=$this->getDoctrine()->getRepository('CategoryBundle:category')->findAll();		
return $this->render('CategoryBundle:Admin:admincategories.html.twig',array('data' => $getcategory));	
	}
	public function addcatadminAction(Request $request)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$session= new Session();		
	$category=new category();
$form=$this->createForm(new CategoryAdmin, $category);		
	
$form->handleRequest($request);
$em=$this->getDoctrine()->getManager();	
	if($form->isValid())
	{
	$em->persist($category);	
	$em->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your category has been added sucessfully',array(),'category'));
	}	
return $this->render('CategoryBundle:Admin:actionadmincategories.html.twig',array('form' => $form->createView(),'action' => 'add'));		
	}
	public function editcatadminAction(Request $request,$catid)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
$session= new Session();		
	$em2=$this->getDoctrine()->getManager();	
    $getcategory=$em2->getRepository('CategoryBundle:category')->find($catid);
$form2=$this->createForm(new CategoryAdmin, $getcategory);
$form2->handleRequest($request);
if($form2->isValid())
	{
	$em2->persist($getcategory);	
	$em2->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your category has been edited sucessfully',array(),'category'));
	}	
return $this->render('CategoryBundle:Admin:actionadmincategories.html.twig',array('form' => $form2->createView(),'action' => 'edit'));		
	}
	public function delcatadminAction(Request $request,$catid)
	{
$this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');		
	$session= new Session();		
	$em3=$this->getDoctrine()->getManager();	
    $delcategory=$em3->getRepository('CategoryBundle:category')->find($catid);
$form3=$this->createForm(new CategoryAdmin, $delcategory);
 $form3->remove('name');
$form3->handleRequest($request);
if($form3->isValid())
	{
$emarticle=$this->getDoctrine()->getManager();	
$articles=$emarticle->getRepository('ArticleBundle:article')->findBy(
    array('category_id' => $catid)
);
foreach($articles as $article)
{
$emarticle->remove($article);
}			
	$em3->remove($delcategory);	
	$em3->flush();
$session->getFlashBag()->add('success',$this->get('translator')->trans('your category has been deleted sucessfully',array(),'category'));
	}	
return $this->render('CategoryBundle:Admin:actionadmincategories.html.twig',array('form' => $form3->createView(),'action' => 'del'));			
	}
//////////////////////////////////////////////	
		
}	
