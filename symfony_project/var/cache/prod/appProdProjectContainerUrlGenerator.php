<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'blog_admin_author_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/author/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_author_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/author/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_author_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/author',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_author_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/author',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_author_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/author',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_post_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/post/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_post_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/post/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_post_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_post_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_post_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_security_logincheck' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/loginCheck',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_admin_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_core_author_show' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Blog\\CoreBundle\\Controller\\AuthorController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/author',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_core_post_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_core_post_show' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_core_post_createcomment' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::createCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/create_comment',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
