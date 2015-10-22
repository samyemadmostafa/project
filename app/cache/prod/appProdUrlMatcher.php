<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/adminarticle')) {
            // adminarticle
            if (preg_match('#^/adminarticle/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminarticle')), array (  '_controller' => 'ArticleBundle\\Controller\\AdminController::showarticleadminAction',));
            }

            // addadminarticle
            if (0 === strpos($pathinfo, '/adminarticle/add') && preg_match('#^/adminarticle/add/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addadminarticle')), array (  '_controller' => 'ArticleBundle\\Controller\\AdminController::addadminarticleAction',));
            }

        }

        // editadminarticle
        if (0 === strpos($pathinfo, '/editadminarticle') && preg_match('#^/editadminarticle/(?P<articleid>[^/]++)/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editadminarticle')), array (  '_controller' => 'ArticleBundle\\Controller\\AdminController::editadminarticleAction',));
        }

        // deleteadminarticle
        if (0 === strpos($pathinfo, '/deleteadminarticle') && preg_match('#^/deleteadminarticle/(?P<articleid>[^/]++)/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteadminarticle')), array (  '_controller' => 'ArticleBundle\\Controller\\AdminController::deladminarticleAction',));
        }

        if (0 === strpos($pathinfo, '/admincategory')) {
            // categoryblog
            if (preg_match('#^/admincategory/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoryblog')), array (  '_controller' => 'CategoryBundle\\Controller\\AdminController::showcatadminAction',));
            }

            // addcategoryblog
            if (0 === strpos($pathinfo, '/admincategory/add') && preg_match('#^/admincategory/add/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addcategoryblog')), array (  '_controller' => 'CategoryBundle\\Controller\\AdminController::addcatadminAction',));
            }

        }

        // editcategoryblog
        if (0 === strpos($pathinfo, '/editcategoryblog') && preg_match('#^/editcategoryblog/(?P<catid>[^/]++)/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editcategoryblog')), array (  '_controller' => 'CategoryBundle\\Controller\\AdminController::editcatadminAction',));
        }

        // deletecategoryblog
        if (0 === strpos($pathinfo, '/deletecategoryblog') && preg_match('#^/deletecategoryblog/(?P<catid>[^/]++)/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletecategoryblog')), array (  '_controller' => 'CategoryBundle\\Controller\\AdminController::delcatadminAction',));
        }

        // submitaddcomment
        if ($pathinfo === '/submitaddcomment') {
            return array (  '_controller' => 'CommentsBundle\\Controller\\ViewController::submitaddcommentAction',  '_route' => 'submitaddcomment',);
        }

        // adminuser
        if (0 === strpos($pathinfo, '/adminuser') && preg_match('#^/adminuser/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminuser')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::showuseradminAction',));
        }

        // editadminuser
        if (0 === strpos($pathinfo, '/editadminuser') && preg_match('#^/editadminuser/(?P<userid>[^/]++)/(?P<_locale>en|ar)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editadminuser')), array (  '_controller' => 'UserBundle\\Controller\\AdminController::editadminuserAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'UserBundle\\Controller\\LoginController::logoutAction',  '_route' => 'logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'UserBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

        }

        // backfront
        if ($pathinfo === '/backfront') {
            return array (  '_controller' => 'UserBundle\\Controller\\LoginController::backfrontAction',  '_route' => 'backfront',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/mainblog')) {
            // mainblog
            if (preg_match('#^/mainblog(?:/(?P<_locale>en|ar))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mainblog')), array (  '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  '_locale' => 'en',));
            }

            // mainblogdescription
            if (0 === strpos($pathinfo, '/mainblogdescription') && preg_match('#^/mainblogdescription/(?P<_locale>en|ar)/(?P<articleid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mainblogdescription')), array (  '_controller' => 'AppBundle\\Controller\\MainController::showdescAction',  '_locale' => 'en',));
            }

        }

        // catblog
        if (0 === strpos($pathinfo, '/catblog') && preg_match('#^/catblog/(?P<_locale>en|ar)/(?P<catid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'catblog')), array (  '_controller' => 'AppBundle\\Controller\\MainController::showcatarticleAction',  '_locale' => 'en',));
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
