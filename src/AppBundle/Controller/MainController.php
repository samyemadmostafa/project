<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class MainController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
		$url = $this->generateUrl('mainblog',array('_locale' => 'en'));   
		$urlarabic = $this->generateUrl('mainblog', array('_locale' => 'ar'));   
        return $this->render('homeblog.html.twig',array('url' => $url,'urlarabic' => $urlarabic));   
    }
	public function showcatarticleAction(Request $request,$catid)
    {
				$url = $this->generateUrl('catblog', array('_locale' => 'en','catid' => $catid));
                $urlarabic = $this->generateUrl('catblog',array('_locale' => 'ar','catid' => $catid));
        return $this->render('catblog.html.twig',array('catid' => $catid,'url' => $url,'urlarabic' => $urlarabic));
        
    }
	public function showdescAction($articleid)
	{
	$url = $this->generateUrl('mainblogdescription', array('_locale' => 'en','articleid' => $articleid));
    $urlarabic = $this->generateUrl('mainblogdescription',array('_locale' => 'ar','articleid' => $articleid));	
	return $this->render('singleblog.html.twig',array('articleid' => $articleid,'url' => $url,'urlarabic' => $urlarabic));	
		
	}
}
