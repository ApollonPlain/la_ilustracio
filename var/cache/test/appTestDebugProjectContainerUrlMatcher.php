<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // redirect_to_default_locale
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::UrlRedirectAction',  'path' => '/en',  '_route' => 'redirect_to_default_locale',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_redirect_to_default_locale;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'redirect_to_default_locale'));
            }

            return $ret;
        }
        not_redirect_to_default_locale:

        // logout
        if ('/logout' === $pathinfo) {
            return ['_route' => 'logout'];
        }

        // comment
        if (preg_match('#^/(?P<_locale>|en|fr)/comment$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'comment']), array (  '_controller' => 'AppBundle\\Controller\\CommentController::commentAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_comment;
            }

            return $ret;
        }
        not_comment:

        // contact
        if (preg_match('#^/(?P<_locale>|en|fr)/contact$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'contact']), array (  '_controller' => 'AppBundle\\Controller\\ContactController::contactAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_contact;
            }

            return $ret;
        }
        not_contact:

        // admin_contact_list
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/contacts$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_contact_list']), array (  '_controller' => 'AppBundle\\Controller\\ContactController::listAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_contact_list;
            }

            return $ret;
        }
        not_admin_contact_list:

        // admin_contact_show
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/contacts/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_contact_show']), array (  '_controller' => 'AppBundle\\Controller\\ContactController::showAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_contact_show;
            }

            return $ret;
        }
        not_admin_contact_show:

        // admin_contact_process
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/contacts/(?P<id>[^/]++)/process$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_contact_process']), array (  '_controller' => 'AppBundle\\Controller\\ContactController::processAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_contact_process;
            }

            return $ret;
        }
        not_admin_contact_process:

        // homepage
        if (preg_match('#^/(?P<_locale>|en|fr)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'homepage']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listAction',  '_locale' => 'en',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_homepage;
            }

            return $ret;
        }
        not_homepage:

        // post_show
        if (preg_match('#^/(?P<_locale>|en|fr)/posts/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'post_show']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_post_show;
            }

            return $ret;
        }
        not_post_show:

        // about
        if (preg_match('#^/(?P<_locale>|en|fr)/about$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'about']), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',  '_locale' => 'en',));
        }

        // post
        if (preg_match('#^/(?P<_locale>|en|fr)/post$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'post']), array (  '_controller' => 'AppBundle\\Controller\\PostController::postAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_post;
            }

            return $ret;
        }
        not_post:

        // admin_post_list
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/posts$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_post_list']), array (  '_controller' => 'AppBundle\\Controller\\PostController::listAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_post_list;
            }

            return $ret;
        }
        not_admin_post_list:

        // admin_post_show
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/posts/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_post_show']), array (  '_controller' => 'AppBundle\\Controller\\PostController::showAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_post_show;
            }

            return $ret;
        }
        not_admin_post_show:

        // admin_post_edit
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/posts/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_post_edit']), array (  '_controller' => 'AppBundle\\Controller\\PostController::editAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_admin_post_edit;
            }

            return $ret;
        }
        not_admin_post_edit:

        // admin_post_delete
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_post_delete']), array (  '_controller' => 'AppBundle\\Controller\\PostController::deleteAction',  '_locale' => 'en',));
            if (!in_array($requestMethod, ['POST'])) {
                $allow = array_merge($allow, ['POST']);
                goto not_admin_post_delete;
            }

            return $ret;
        }
        not_admin_post_delete:

        // update_password
        if (preg_match('#^/(?P<_locale>|en|fr)/update\\-password$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'update_password']), array (  '_controller' => 'AppBundle\\Controller\\UserController::updatePasswordAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_update_password;
            }

            return $ret;
        }
        not_update_password:

        // register
        if (preg_match('#^/(?P<_locale>|en|fr)/register$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'register']), array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_register;
            }

            return $ret;
        }
        not_register:

        // edit_profile
        if (preg_match('#^/(?P<_locale>|en|fr)/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'edit_profile']), array (  '_controller' => 'AppBundle\\Controller\\UserController::editProfileAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_edit_profile;
            }

            return $ret;
        }
        not_edit_profile:

        // login
        if (preg_match('#^/(?P<_locale>|en|fr)/login$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'login']), array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_login;
            }

            return $ret;
        }
        not_login:

        // admin_user_list
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/users$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_list']), array (  '_controller' => 'AppBundle\\Controller\\UserController::listAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_user_list;
            }

            return $ret;
        }
        not_admin_user_list:

        // admin_user_show
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/users/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_show']), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_admin_user_show;
            }

            return $ret;
        }
        not_admin_user_show:

        // admin_user_edit
        if (preg_match('#^/(?P<_locale>|en|fr)/admin/users/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'admin_user_edit']), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',  '_locale' => 'en',));
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_admin_user_edit;
            }

            return $ret;
        }
        not_admin_user_edit:

        // profile
        if (preg_match('#^/(?P<_locale>|en|fr)/profile/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'profile']), array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',  '_locale' => 'en',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_profile;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'profile'));
            }

            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_profile;
            }

            return $ret;
        }
        not_profile:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
