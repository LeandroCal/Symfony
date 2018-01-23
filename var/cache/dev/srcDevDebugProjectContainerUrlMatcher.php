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

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/blog')) {
            // blog_list
            if (preg_match('#^/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_list')), array (  'page' => 1,  '_controller' => 'App\\Controller\\BlogController::list',));
            }

            // blog_show
            if (preg_match('#^/blog/(?P<entryName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'App\\Controller\\BlogController::show',));
            }

            // blog_show_by_id
            if (preg_match('#^/blog/(?P<entryName>[^/]++)/(?P<entryId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show_by_id')), array (  '_controller' => 'App\\Controller\\BlogController::showById',));
            }

            if (0 === strpos($pathinfo, '/blogtwig')) {
                // blog_list_twig
                if ('/blogtwig' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\BlogControllerTwig::list',  '_route' => 'blog_list_twig',);
                }

                // blog_show_twig
                if (preg_match('#^/blogtwig/(?P<entryId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show_twig')), array (  '_controller' => 'App\\Controller\\BlogControllerTwig::show',));
                }

            }

        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }

        // lucky_number
        if ('/lucky/number' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\LuckyController::numberAction',  '_route' => 'lucky_number',);
        }

        // acme_privacy
        if ('/privacy' === $pathinfo) {
            return array (  'template' => 'static/privacy.html.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'acme_privacy',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
