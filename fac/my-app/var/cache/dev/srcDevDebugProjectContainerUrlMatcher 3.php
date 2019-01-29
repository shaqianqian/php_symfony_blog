<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo) ?: '/';
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($trimmedPathinfo = '/' !== $pathinfo && '/' === $pathinfo[-1] ? substr($pathinfo, 0, -1) : $pathinfo) {
            case '/':
                // homepage
                return array('_route' => 'homepage', '_controller' => 'App\\Controller\\BlogController::indexAction');
                // index
                return array('_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index');
                break;
            default:
                $routes = array(
                    '/admin' => array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'), null, null, null, false),
                    '/admin/sign' => array(array('_route' => 'sign', '_controller' => 'App\\Controller\\AdminController::sign'), null, null, null, false),
                    '/admin/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\AdminController::login'), null, null, null, false),
                    '/admin/author/login' => array(array('_route' => 'author_login', '_controller' => 'App\\Controller\\AdminController::loginAuthor'), null, null, null, false),
                    '/admin/author/create' => array(array('_route' => 'author_create', '_controller' => 'App\\Controller\\AdminController::createAuthorAction'), null, null, null, false),
                    '/default' => array(array('_route' => 'app_default_setflash', '_controller' => 'App\\Controller\\DefaultController::setFlashAction'), null, null, null, false),
                    '/exception' => array(array('_route' => 'app_exception_exception', '_controller' => 'App\\Controller\\ExceptionController::exceptionAction'), null, null, null, false),
                    '/logs' => array(array('_route' => 'app_logsdemo_demo', '_controller' => 'App\\Controller\\LogsDemoController::demoAction'), null, null, null, false),
                    '/_profiler' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false),
                );

                if (!isset($routes[$trimmedPathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$trimmedPathinfo];

                if ('/' !== $pathinfo && $hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                    return null;
                }

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/books(?:/(\\d+))?(*:24)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:62)'
                        .'|wdt/([^/]++)(*:81)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:126)'
                                .'|router(*:140)'
                                .'|exception(?'
                                    .'|(*:160)'
                                    .'|\\.css(*:173)'
                                .')'
                            .')'
                            .'|(*:183)'
                        .')'
                    .')'
                .')(?:/?)$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            24 => array(array('_route' => 'books_get', 'id' => 1, '_controller' => 'App\\Controller\\BookController::item'), array('id'), array('GET' => 0, 'HEAD' => 1), null, false),
                            62 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false),
                            81 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false),
                            126 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false),
                            140 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false),
                            160 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false),
                            173 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false),
                            183 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes, $hasTrailingSlash) = $routes[$m];

                        if ('/' !== $pathinfo && $hasTrailingSlash !== ('/' === $pathinfo[-1])) {
                            return null;
                        }

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (183 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
