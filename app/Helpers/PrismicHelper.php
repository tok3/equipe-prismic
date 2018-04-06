<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Prismic\Predicates;
use Prismic\Dom\Link;
use Prismic\LinkResolver;

class PrismicHelper
{


    /**
     * @param int $pageSize
     * @return mixed
     */
    public static function getLatestPosts($pageSize = 5)
    {

        $latestPosts = \Request::input('api')->query(
            [Predicates::at('document.type', 'post'),],
            ['pageSize' => $pageSize = 5, 'orderings' => '[document.publication_date desc]']
        );

        return $latestPosts;

    }

    /**
     * @return mixed
     */
    public static function getTopNavigation()
    {

        $menuContent = \Request::input('api')->getSingle('menu');

        return $menuContent;
    }


    /**
     * @return mixed
     */
    public static function getFooterNavigation()
    {

        $menuContent = \Request::input('api')->getSingle('footer_menu');

        return $menuContent;
    }


    public static function topNav()
    {

        $menuContent = \Request::input('api')->getSingle('menu');


        $segments = \Request::segments();

        foreach ($menuContent->data->menu_links as $key => $item)
        {


            if (isset($item->link->uid))
            {
                $menuContent->data->menu_links[$key]->link->active = 0;

                $isActive = array_search($item->link->uid, $segments);

                if ($isActive !== '')
                {
                    $menuContent->data->menu_links[$key]->link->active = 1;
                }

            }

        }

        echo "<pre>";
        print_r($menuContent->data->menu_links);
        echo "</pre>";


    }
}