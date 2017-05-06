<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // user_register_form
            if ($pathinfo === '/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_register_form;
                }

                return array (  '_controller' => 'XelSeleniusBundle\\Controller\\AccountController::register',  '_route' => 'user_register_form',);
            }
            not_user_register_form:

            // register_process
            if ($pathinfo === '/register') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_register_process;
                }

                return array (  '_controller' => 'XelSeleniusBundle\\Controller\\AccountController::registerProcess',  '_route' => 'register_process',);
            }
            not_register_process:

        }

        // profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\AccountController::profileOverview',  '_route' => 'profile',);
        }

        // buildings
        if ($pathinfo === '/buildings') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\BuildingsController::buildingsOverview',  '_route' => 'buildings',);
        }

        // campaign
        if ($pathinfo === '/universe') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\CampaignController::indexAction',  '_route' => 'campaign',);
        }

        if (0 === strpos($pathinfo, '/support')) {
            // support_form
            if ($pathinfo === '/support') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_support_form;
                }

                return array (  '_controller' => 'XelSeleniusBundle\\Controller\\EmailController::support',  '_route' => 'support_form',);
            }
            not_support_form:

            // supportTicket
            if ($pathinfo === '/support') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_supportTicket;
                }

                return array (  '_controller' => 'XelSeleniusBundle\\Controller\\EmailController::supportTicket',  '_route' => 'supportTicket',);
            }
            not_supportTicket:

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\HomeController::homepageOverview',  '_route' => 'home',);
        }

        // rules
        if ($pathinfo === '/rules') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\HomeController::staticRules',  '_route' => 'rules',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\HomeController::staticAbout',  '_route' => 'about',);
        }

        // map_view
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\MapController::mapView',  '_route' => 'map_view',);
        }

        // overview
        if ($pathinfo === '/overview') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\PlanetController::planetUpdate',  '_route' => 'overview',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'XelSeleniusBundle\\Controller\\SecurityController::login',  '_route' => 'login',);
            }

            if (0 === strpos($pathinfo, '/logout')) {
                // logout
                if ($pathinfo === '/logout') {
                    return array (  '_controller' => 'XelSeleniusBundle\\Controller\\SecurityController::logout',  '_route' => 'logout',);
                }

                // logoutNotify
                if ($pathinfo === '/logoutNotify') {
                    return array (  '_controller' => 'XelSeleniusBundle\\Controller\\SecurityController::logoutNotify',  '_route' => 'logoutNotify',);
                }

            }

        }

        // shipyard
        if ($pathinfo === '/shipyard') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\ShipsController::shipyardOverview',  '_route' => 'shipyard',);
        }

        // fleet
        if ($pathinfo === '/fleet') {
            return array (  '_controller' => 'XelSeleniusBundle\\Controller\\ShipsController::fleetOverview',  '_route' => 'fleet',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
