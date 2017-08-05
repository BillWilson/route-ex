<?php

namespace App\Controller;

class IndexController {
    public static function main()
    {
        echo 'Welcome home!!';
    }

    public static function getUser($id)
    {
        echo 'User: '.$id;
    }

    public static function getArticle($id, $title)
    {
        echo "The id is: $id and the title is $title";
    }
}