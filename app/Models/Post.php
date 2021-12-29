<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rahmat Berlianda Avandi",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis vitae dolores perspiciatis quos, numquam aspernatur illum, odio officia veritatis repudiandae totam velit sequi praesentium itaque voluptate, adipisci dignissimos tempora? Eveniet minus nemo numquam quas dolorem consectetur deserunt totam itaque ea ut facilis quisquam assumenda doloremque laboriosam fugiat doloribus maxime nisi voluptatibus impedit quibusdam, tempora quos! Ab, sapiente, minima veritatis provident quod iusto, voluptate quam vero sequi impedit beatae? Exercitationem necessitatibus magni laudantium consequuntur nisi labore natus nihil, maxime enim. Deserunt.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Robert Caligari",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus harum quaerat consequuntur debitis incidunt vitae architecto soluta unde, tempore at delectus, numquam doloribus corporis non saepe sit fugit voluptatibus veritatis praesentium! Veritatis, cum enim molestiae eligendi, fugiat velit dolor possimus consectetur labore facere, minus illum laudantium. Rem fugit inventore temporibus expedita saepe, hic odit sunt ullam enim repellat. Hic vel, ullam perferendis vitae et pariatur. Rem velit tempora reiciendis neque. In, enim? Natus recusandae iste harum, quasi nemo, deserunt atque sapiente impedit dicta ut minus! Tempore facilis cumque enim ullam cupiditate, quo earum corrupti iste ad, non eveniet ab repudiandae!",
        ],
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($post["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
