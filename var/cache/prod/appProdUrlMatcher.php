<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/note')) {
            // note_get_all
            if ($pathinfo === '/note') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_note_get_all;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NoteController::getAllAction',  '_route' => 'note_get_all',);
            }
            not_note_get_all:

            // note_create
            if ($pathinfo === '/note') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_note_create;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NoteController::createAction',  '_route' => 'note_create',);
            }
            not_note_create:

            // note_update
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_note_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_update')), array (  '_controller' => 'AppBundle\\Controller\\NoteController::updateAction',));
            }
            not_note_update:

            // note_delete
            if (preg_match('#^/note/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_note_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_delete')), array (  '_controller' => 'AppBundle\\Controller\\NoteController::deleteAction',));
            }
            not_note_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
