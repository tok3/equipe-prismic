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



$WPGLOBAL['faker'] = \Faker\Factory::create('de_DE');



$api = Api::get(PRISMIC_URL);


$response = $api->query(

    Predicates::at('document.type', 'post'),
    [ 'pageSize' => 5, 'page' => 1 ,
     'orderings' => '[my.post.date desc]']

);


$latestPosts = $response->getResults();

$WPGLOBAL['latestPosts'] = $latestPosts;
//$latestPosts = $response->getResults();

// $latestPosts[0]->getText('post.title');

/* ---------------------------------------------------------- */
// Index page
$app->get('/', function ($request, $response) use ($app, $prismic,$latestPosts)
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
    $latest = 'funky';
    render($app, 'homepage', array('pageContent' => $pageContent, 'menuContent' => $menuContent, 'latest'=>$latest));
});


/* ---------------------------------------------------------- */
// Blog/Article Index page
$app->get('/artikel{route:|artikel|artikel/}', function ($request, $response) use ($app, $prismic) {

    // Query the API for the homepage content and all the posts
    $api = $prismic->get_api();
    $pageContent = $api->getSingle('blog_home');

    $posts = $api->query(
        Predicates::at("document.type", "post"),
        [ 'orderings' => '[my.post.date desc]',
         'pageSize' => 10, 'page' => 1 ]
    );

    // If there is no bloghome content, display 404 page
    if ( $pageContent == null ) {
        not_found($app);
        return;
    }

    $menuContent = $api->getSingle('menu');
    // Render blog/artikle index-page
    render($app, 'bloghome', array('pageContent' => $pageContent, 'menuContent' => $menuContent, 'posts' => $posts->getResults()));
});


/* ---------------------------------------------------------- */
// Previews
$app->get('/preview', function ($request, $response) use ($app, $prismic)
{
    $token = $request->getParam('token');
    $url = $prismic->get_api()->previewSession($token, $prismic->linkResolver, '/');
    setcookie(Prismic\PREVIEW_COOKIE, $token, time() + 1800, '/', null, false, false);

    return $response->withStatus(302)->withHeader('Location', $url);
});


/* ---------------------------------------------------------- */
//  Page
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


// Pages by UID
$app->get('/artikel/{uid}', function ($request, $response, $args) use ($app, $prismic) {

    // Retrieve the uid from the url
    $uid = $args['uid'];

    // Query the API by the uid
    $api = $prismic->get_api();
    $post = $api->getByUID('post', $uid);

    // If there is no post content, display the 404 page
    if (!$post) {
        not_found($app);
        return;
    }
    $menuContent = $api->getSingle('menu');
    // Render the post page
    render($app, 'post', array('post' => $post, 'menuContent' => $menuContent));
});