<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminarticle' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\AdminController::showarticleadminAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/adminarticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addadminarticle' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\AdminController::addadminarticleAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/adminarticle/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editadminarticle' => array (  0 =>   array (    0 => 'articleid',    1 => '_locale',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\AdminController::editadminarticleAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'articleid',    ),    2 =>     array (      0 => 'text',      1 => '/editadminarticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deleteadminarticle' => array (  0 =>   array (    0 => 'articleid',    1 => '_locale',  ),  1 =>   array (    '_controller' => 'ArticleBundle\\Controller\\AdminController::deladminarticleAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'articleid',    ),    2 =>     array (      0 => 'text',      1 => '/deleteadminarticle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoryblog' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'CategoryBundle\\Controller\\AdminController::showcatadminAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/admincategory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addcategoryblog' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'CategoryBundle\\Controller\\AdminController::addcatadminAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/admincategory/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editcategoryblog' => array (  0 =>   array (    0 => 'catid',    1 => '_locale',  ),  1 =>   array (    '_controller' => 'CategoryBundle\\Controller\\AdminController::editcatadminAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'catid',    ),    2 =>     array (      0 => 'text',      1 => '/editcategoryblog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deletecategoryblog' => array (  0 =>   array (    0 => 'catid',    1 => '_locale',  ),  1 =>   array (    '_controller' => 'CategoryBundle\\Controller\\AdminController::delcatadminAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'catid',    ),    2 =>     array (      0 => 'text',      1 => '/deletecategoryblog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'submitaddcomment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CommentsBundle\\Controller\\ViewController::submitaddcommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/submitaddcomment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'adminuser' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AdminController::showuseradminAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/adminuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'editadminuser' => array (  0 =>   array (    0 => 'userid',    1 => '_locale',  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\AdminController::editadminuserAction',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userid',    ),    2 =>     array (      0 => 'text',      1 => '/editadminuser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\LoginController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'backfront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UserBundle\\Controller\\LoginController::backfrontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/backfront',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mainblog' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MainController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    1 =>     array (      0 => 'text',      1 => '/mainblog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mainblogdescription' => array (  0 =>   array (    0 => '_locale',    1 => 'articleid',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MainController::showdescAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'articleid',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    2 =>     array (      0 => 'text',      1 => '/mainblogdescription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catblog' => array (  0 =>   array (    0 => '_locale',    1 => 'catid',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\MainController::showcatarticleAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|ar',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'catid',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|ar',      3 => '_locale',    ),    2 =>     array (      0 => 'text',      1 => '/catblog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_js_routing_js' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'fos_js_routing.controller:indexAction',    '_format' => 'js',  ),  2 =>   array (    '_format' => 'js|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'js|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/js/routing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
