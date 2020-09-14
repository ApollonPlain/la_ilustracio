<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // redirect_to_default_locale
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'redirect_to_default_locale');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::UrlRedirectAction',  'path' => '/en',  '_route' => 'redirect_to_default_locale',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // comment
        if (preg_match('#^/(?P<_locale>|en|fr)/comment$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_comment;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::commentAction',  '_locale' => 'en',));
        }
        not_comment:

        // contact
        if (preg_match('#^/(?P<_locale>|en|fr)/contact$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_contact;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::contactAction',  '_locale' => 'en',));
        }
        not_contact:

        // admin_contact_list
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/contacts$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_contact_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_list')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::listAction',  '_locale' => 'en',));
        }
        not_admin_contact_list:

        // admin_contact_show
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/contacts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_contact_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_show')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::showAction',  '_locale' => 'en',));
        }
        not_admin_contact_show:

        // admin_contact_process
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/contacts/(?P<id>[^/]++)/process$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_contact_process;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_process')), array (  '_controller' => 'AppBundle\\Controller\\ContactController::processAction',  '_locale' => 'en',));
        }
        not_admin_contact_process:

        // homepage
        if (preg_match('#^/(?P<_locale>|en|fr)/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listAction',  '_locale' => 'en',));
        }
        not_homepage:

        // post_show
        if (preg_match('#^/(?P<_locale>|en|fr)/posts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_post_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showAction',  '_locale' => 'en',));
        }
        not_post_show:

        // about
        if (preg_match('#^/(?P<_locale>|en|fr)/about$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'about')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',  '_locale' => 'en',));
        }

        // post
        if (preg_match('#^/(?P<_locale>|en|fr)/post$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::postAction',  '_locale' => 'en',));
        }
        not_post:

        // admin_post_list
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/posts$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_post_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_list')), array (  '_controller' => 'AppBundle\\Controller\\PostController::listAction',  '_locale' => 'en',));
        }
        not_admin_post_list:

        // admin_post_show
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/posts/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_post_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_show')), array (  '_controller' => 'AppBundle\\Controller\\PostController::showAction',  '_locale' => 'en',));
        }
        not_admin_post_show:

        // admin_post_edit
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/posts/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_admin_post_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_edit')), array (  '_controller' => 'AppBundle\\Controller\\PostController::editAction',  '_locale' => 'en',));
        }
        not_admin_post_edit:

        // admin_post_delete
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_admin_post_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_post_delete')), array (  '_controller' => 'AppBundle\\Controller\\PostController::deleteAction',  '_locale' => 'en',));
        }
        not_admin_post_delete:

        // update_password
        if (preg_match('#^/(?P<_locale>|en|fr)/update\\-password$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_update_password;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_password')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updatePasswordAction',  '_locale' => 'en',));
        }
        not_update_password:

        // register
        if (preg_match('#^/(?P<_locale>|en|fr)/register$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_register;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'register')), array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_locale' => 'en',));
        }
        not_register:

        // edit_profile
        if (preg_match('#^/(?P<_locale>|en|fr)/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_edit_profile;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_profile')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editProfileAction',  '_locale' => 'en',));
        }
        not_edit_profile:

        // login
        if (preg_match('#^/(?P<_locale>|en|fr)/login$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_login;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login')), array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_locale' => 'en',));
        }
        not_login:

        // admin_user_list
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/users$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_user_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_list')), array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_locale' => 'en',));
        }
        not_admin_user_list:

        // admin_user_show
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_admin_user_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',  '_locale' => 'en',));
        }
        not_admin_user_show:

        // admin_user_edit
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_admin_user_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',  '_locale' => 'en',));
        }
        not_admin_user_edit:

        // profile
        if (preg_match('#^/(?P<_locale>|en|fr)/profile/?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_profile;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'profile');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',  '_locale' => 'en',));
        }
        not_profile:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
