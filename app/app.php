<?php

/*
 * This is the main file of the application, including routing and controllers.
 *
 * $app is a Slim application instance, see the framework documentation for more details:
 * http://docs.slimframework.com/
 *
 * The order of the routes matter, as it will define the priority of routes. For that reason we
 * need to keep the more "generic" routes, such as the pages route, at the end of the file.
 *
 * If you decide to change the URLs, make sure to change PrismicLinkResolver in LinkResolver.php
 * as well to make sures links in your site are correctly generated.
 */

use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;

require_once 'includes/http.php';

// Index page
$app->get('/', function ($request, $response) use ($app, $prismic)
{

    $api = $prismic->get_api();

    $pageContent = $api->getSingle('homepage');
    if (!$pageContent)
    {
        include '../app/includes/templates/firstrun.php';

        return;
    }

    $menuContent = $api->getSingle('menu');
    if (!$menuContent)
    {
        $menuContent = null;
    }

    render($app, 'homepage', array('pageContent' => $pageContent, 'menuContent' => $menuContent));
});

// Previews
$app->get('/preview', function ($request, $response) use ($app, $prismic)
{
    $token = $request->getParam('token');
    $url = $prismic->get_api()->previewSession($token, $prismic->linkResolver, '/');
    setcookie(Prismic\PREVIEW_COOKIE, $token, time() + 1800, '/', null, false, false);

    return $response->withStatus(302)->withHeader('Location', $url);
});

// Index page
$app->get('/{uid}', function ($request, $response, $args) use ($app, $prismic)
{

    // Retrieve the uid from the url
    $uid = $args['uid'];

    // Query the API by the uid
    $api = $prismic->get_api();
    $pageContent = $api->getByUID('page', $uid);

    if (!$pageContent)
    {
        render($app, '404', array('pageContent' => null, 'menuContent' => null));

        return;
    }

    $menuContent = $api->getSingle('menu');

    render($app, 'page', array('pageContent' => $pageContent, 'menuContent' => $menuContent));
});

