<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
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

        if (0 === strpos($pathinfo, '/slickpanel')) {
            // slickpanel_home
            if ($pathinfo === '/slickpanel') {
                return array (  '_controller' => 'slickthemes.slickpanel.controller:full',  '_route' => 'slickpanel_home',);
            }

            // slickpanel_page
            if ($pathinfo === '/slickpanel/page') {
                return array (  '_controller' => 'slickthemes.slickpanel.controller:page',  '_route' => 'slickpanel_page',);
            }

            // slickpanel_userconfig
            if ($pathinfo === '/slickpanel/userconfig') {
                return array (  '_controller' => 'slickthemes.slickpanel.controller.userconfig:manage',  '_route' => 'slickpanel_userconfig',);
            }

        }

        // st_home
        if ($pathinfo === '/../') {
            return array('_route' => 'st_home');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
