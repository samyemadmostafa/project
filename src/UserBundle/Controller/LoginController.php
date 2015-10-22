<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\user;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
class LoginController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
	public function loginAction(Request $request)
{	
 $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render(
        'UserBundle:Admin:login.html.twig',
        array(
            // last username entered by the user
            'last_username' => $lastUsername,
            'error'         => $error,
        )
    );	
}
public function loginCheckAction()
{
}
public function logoutAction()
{	
}
public function backfrontAction()
{
$this->get("request")->getSession()->invalidate();
$this->get("security.context")->setToken(null);
$response=$this->forward('AppBundle:Main:index');
return $response;
}
}
