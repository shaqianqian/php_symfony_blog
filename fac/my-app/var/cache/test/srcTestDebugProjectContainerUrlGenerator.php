<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcTestDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin' => array(array(), array('_controller' => 'App\\Controller\\AdminController::index'), array(), array(array('text', '/admin')), array(), array()),
        'sign' => array(array(), array('_controller' => 'App\\Controller\\AdminController::sign'), array(), array(array('text', '/admin/sign')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\AdminController::login'), array(), array(array('text', '/admin/login')), array(), array()),
        'author_login' => array(array(), array('_controller' => 'App\\Controller\\AdminController::loginAuthor'), array(), array(array('text', '/blog')), array(), array()),
        'author_create' => array(array(), array('_controller' => 'App\\Controller\\AdminController::createAuthorAction'), array(), array(array('text', '/admin/author/create')), array(), array()),
        'post' => array(array(), array('_controller' => 'App\\Controller\\AdminController::post'), array(), array(array('text', '/admin/author/post')), array(), array()),
        'modifie' => array(array(), array('_controller' => 'App\\Controller\\AdminController::modifie'), array(), array(array('text', '/admin/author/modifie')), array(), array()),
        'delete' => array(array(), array('_controller' => 'App\\Controller\\AdminController::delete'), array(), array(array('text', '/admin/author/delete')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\BlogController::indexAction'), array(), array(array('text', '/')), array(), array()),
        'app_exception_exception' => array(array(), array('_controller' => 'App\\Controller\\ExceptionController::exceptionAction'), array(), array(array('text', '/exception')), array(), array()),
        'app_logsdemo_demo' => array(array(), array('_controller' => 'App\\Controller\\LogsDemoController::demoAction'), array(), array(array('text', '/logs')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name && null !== $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
