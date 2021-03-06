<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/author')) {
                    // blog_admin_author_index
                    if (rtrim($pathinfo, '/') === '/admin/author') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_author_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'blog_admin_author_index');
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::indexAction',  '_route' => 'blog_admin_author_index',);
                    }
                    not_blog_admin_author_index:

                    // blog_admin_author_new
                    if ($pathinfo === '/admin/author/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_blog_admin_author_new;
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::newAction',  '_route' => 'blog_admin_author_new',);
                    }
                    not_blog_admin_author_new:

                    // blog_admin_author_show
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_author_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_show')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::showAction',));
                    }
                    not_blog_admin_author_show:

                    // blog_admin_author_edit
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_blog_admin_author_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_edit')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::editAction',));
                    }
                    not_blog_admin_author_edit:

                    // blog_admin_author_delete
                    if (preg_match('#^/admin/author/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_blog_admin_author_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_author_delete')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\AuthorController::deleteAction',));
                    }
                    not_blog_admin_author_delete:

                }

                // blog_admin_default_index
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'blog_admin_default_index');
                    }

                    return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_admin_default_index',);
                }

                if (0 === strpos($pathinfo, '/admin/post')) {
                    // blog_admin_post_index
                    if (rtrim($pathinfo, '/') === '/admin/post') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_post_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'blog_admin_post_index');
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::indexAction',  '_route' => 'blog_admin_post_index',);
                    }
                    not_blog_admin_post_index:

                    // blog_admin_post_new
                    if ($pathinfo === '/admin/post/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_blog_admin_post_new;
                        }

                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::newAction',  '_route' => 'blog_admin_post_new',);
                    }
                    not_blog_admin_post_new:

                    // blog_admin_post_show
                    if (preg_match('#^/admin/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_blog_admin_post_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_post_show')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::showAction',));
                    }
                    not_blog_admin_post_show:

                    // blog_admin_post_edit
                    if (preg_match('#^/admin/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_blog_admin_post_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_post_edit')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::editAction',));
                    }
                    not_blog_admin_post_edit:

                    // blog_admin_post_delete
                    if (preg_match('#^/admin/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_blog_admin_post_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_admin_post_delete')), array (  '_controller' => 'Blog\\AdminBundle\\Controller\\PostController::deleteAction',));
                    }
                    not_blog_admin_post_delete:

                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    if (0 === strpos($pathinfo, '/admin/login')) {
                        // blog_admin_security_login
                        if ($pathinfo === '/admin/login') {
                            return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'blog_admin_security_login',);
                        }

                        // blog_admin_security_logincheck
                        if ($pathinfo === '/admin/loginCheck') {
                            return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'blog_admin_security_logincheck',);
                        }

                    }

                    // blog_admin_security_logout
                    if ($pathinfo === '/admin/logout') {
                        return array (  '_controller' => 'Blog\\AdminBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'blog_admin_security_logout',);
                    }

                }

            }

            // blog_core_author_show
            if (0 === strpos($pathinfo, '/author') && preg_match('#^/author/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_author_show')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\AuthorController::showAction',));
            }

        }

        // blog_core_post_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_core_post_index');
            }

            return array (  '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::indexAction',  '_route' => 'blog_core_post_index',);
        }

        // blog_core_post_show
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_post_show')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::showAction',));
        }

        // blog_core_post_createcomment
        if (preg_match('#^/(?P<slug>[^/]++)/create_comment$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_blog_core_post_createcomment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_core_post_createcomment')), array (  '_controller' => 'Blog\\CoreBundle\\Controller\\PostController::createCommentAction',));
        }
        not_blog_core_post_createcomment:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
