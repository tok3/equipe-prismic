<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prismic\Predicates;
use Faker;

class PrismicController extends Controller
{
    //

    public function getIndex(Request $request)
    {

        $document = $request->input('api')->getSingle('homepage');




        $latestPosts = $request->input('api')->query(
            [Predicates::at('document.type', 'post')],
            ['pageSize' => 5, 'page' => 1,
                'orderings' => '[my.post.date desc]']
        );


        return view('page', compact('document', 'latestPosts'));


    }


    /**
     * @param $uid
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPage($uid, Request $request)
    {


        // Query the API by the uid
        /* $api = $request->input('api');
         $pageContent = $api->getByUID('page', $uid);*/

        // Query the API
        $document = $request->input('api')->getByUID('page', $uid);

        //$slices = $document->data->page_content;

        // Render the page
        return view('page', compact('document'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getBlogHome(Request $request, $page = 0)
    {


        // Query the API
        $document = $request->input('api')->getSingle('blog_home');


        $posts = $request->input('api')->query(
            [Predicates::at('document.type', 'post')],
            ['pageSize' => 6, 'page' => $page]
        );


        // Render the page
        return view('bloghome', compact('document', 'posts'));
    }

    /**
     * @param $uid
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPost($uid, Request $request)
    {


         \Prismic::getTopNavigation()->data->menu_links;


        // Query the API
        $document = $request->input('api')->getByUID('post', $uid);


        $post = $document->data;


        // Render the page
        return view('post', compact('document', 'post'));
    }

    /**
     * @param Request $request
     */
    public function getPreview(Request $request)
    {
        $token = $request->input('token');

        if (!isset($token))
        {
            return abort(400, 'Bad Request');
        }

        $url = $request->input('api')->previewSession($token, $request->input('linkResolver'), '/');

        setcookie(Prismic\PREVIEW_COOKIE, $token, time() + 1800, '/', null, false, false);

        return response(null, 302)->header('Location', $url);
    }

    /**
     *
     */
    public function getFakerText()
    {


        $faker = Faker\Factory::create('de_DE'); // create a French faker

        //$faker = Faker\Factory::create();

        // generate data by accessing properties
        echo $faker->realText($faker->numberBetween(20, 40), $faker->numberBetween(1, 5));
        echo '<br>';
        echo '<br>';
        echo $faker->realText($faker->numberBetween(50, 150), $faker->numberBetween(1, 5));
        echo '<br>';
        echo '<br>';
        echo $faker->realText($faker->numberBetween(500, 1000), $faker->numberBetween(1, 5));
        echo '<br>';
        echo '<br>';
        echo $faker->realText($faker->numberBetween(500, 1000), $faker->numberBetween(1, 5));
     echo '<br>';
     echo '<br>';
        echo $faker->realText($faker->numberBetween(100, 2000), $faker->numberBetween(1, 5));
echo '<br>';
echo '<br>';


    }

}



