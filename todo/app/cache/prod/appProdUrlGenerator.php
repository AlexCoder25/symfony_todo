<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'show_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::addCategoryAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show_category' => array (  0 =>   array (    0 => 'category_url',  ),  1 =>   array (    '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::indexTaskAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_url',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_category' => array (  0 =>   array (    0 => 'category_url',  ),  1 =>   array (    '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::deleteCategoryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_url',    ),    2 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_task' => array (  0 =>   array (    0 => 'category_url',  ),  1 =>   array (    '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::addTaskAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_url',    ),    1 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_task' => array (  0 =>   array (    0 => 'category_url',    1 => 'task_id',  ),  1 =>   array (    '_controller' => 'TodoApp\\TodoBundle\\Controller\\DefaultController::deleteTaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'task_id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'category_url',    ),    3 =>     array (      0 => 'text',      1 => '/category',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    'name' => 'noname',    '_controller' => 'AppBundle\\Controller\\DefaultController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
