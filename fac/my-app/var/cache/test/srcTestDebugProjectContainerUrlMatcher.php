<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                    '/blog' => array(array('_route' => 'author_login', '_controller' => 'App\\Controller\\AdminController::loginAuthor'), null, null, null, false),
                    '/admin/author/create' => array(array('_route' => 'author_create', '_controller' => 'App\\Controller\\AdminController::createAuthorAction'), null, null, null, false),
                    '/admin/author/post' => array(array('_route' => 'post', '_controller' => 'App\\Controller\\AdminController::post'), null, null, null, false),
                    '/admin/author/modifie' => array(array('_route' => 'modifie', '_controller' => 'App\\Controller\\AdminController::modifie'), null, null, null, false),
                    '/admin/author/delete' => array(array('_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::delete'), null, null, null, false),
                    '/exception' => array(array('_route' => 'app_exception_exception', '_controller' => 'App\\Controller\\ExceptionController::exceptionAction'), null, null, null, false),
                    '/logs' => array(array('_route' => 'app_logsdemo_demo', '_controller' => 'App\\Controller\\LogsDemoController::demoAction'), null, null, null, false),
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

        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
