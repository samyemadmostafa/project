<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
