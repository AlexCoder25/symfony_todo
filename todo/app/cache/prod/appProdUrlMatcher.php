<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // show_all
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_show_all;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'show_all');
            }

            return array (  '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'show_all',);
        }
        not_show_all:

        // add_category
        if ($pathinfo === '/') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_add_category;
            }

            return array (  '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::addCategoryAction',  '_route' => 'add_category',);
        }
        not_add_category:

        if (0 === strpos($pathinfo, '/category')) {
            // show_category
            if (preg_match('#^/category/(?P<category_url>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_show_category;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_category')), array (  '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::indexTaskAction',));
            }
            not_show_category:

            // remove_category
            if (preg_match('#^/category/(?P<category_url>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_category')), array (  '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::deleteCategoryAction',));
            }

            // add_task
            if (preg_match('#^/category/(?P<category_url>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_add_task;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_task')), array (  '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::addTaskAction',));
            }
            not_add_task:

            // remove_task
            if (preg_match('#^/category/(?P<category_url>[^/]++)/delete/(?P<task_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_task')), array (  '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::deleteTaskAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello(?:/(?P<name>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  'name' => 'noname',  '_controller' => 'AppBundle\\Controller\\DefaultController::helloAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
