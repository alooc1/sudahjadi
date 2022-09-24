<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Abdi Wijaya Putra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti quis nulla consequatur nam veniam modi sit. Quos illum nobis dolore suscipit necessitatibus, maiores excepturi quaerat molestias enim asperiores hic?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nadia",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti pariatur ducimus debitis reiciendis doloribus culpa quas, quia at perferendis sint quis porro aut dolorum omnis a, blanditiis ut provident nesciunt nihil dignissimos optio saepe error dolores? Nulla tempora eius, perspiciatis ea alias quaerat hic quam id iure provident eveniet rerum, in doloribus? Impedit iste consequuntur ipsam reiciendis dolorem quae nemo illum libero iure? Quos perferendis voluptatum esse, numquam quam consectetur aliquam recusandae ab reprehenderit voluptates aspernatur nostrum cum. Maxime corporis incidunt beatae ullam iure aperiam neque deserunt qui voluptatibus voluptates libero saepe culpa veritatis eos, accusamus aut quod quaerat nam!"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
