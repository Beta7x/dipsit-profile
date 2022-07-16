<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Posts extends Model
// {
//     use HasFactory;
// }

class Posts {
    private static $news_posts = [
        [
            "title" => "Berita Pertama",
            "slug" => "berita-pertama",
            "author" => "Beta7x",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto unde debitis sapiente pariatur modi. Culpa quam nulla voluptatem hic animi recusandae tenetur, aliquid inventore accusantium suscipit autem corrupti laudantium harum."
        ],
        [
            "title" => "Berita Kedua",
            "slug" => "berita-kedua",
            "author" => "DevOps",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias non placeat numquam eligendi perferendis officiis velit maxime mollitia commodi aperiam quas nesciunt, et quidem a incidunt minima culpa, illum, ad totam aliquam porro quis! Ratione facilis perspiciatis suscipit repellat rem quasi amet hic incidunt, at ipsam alias, magni repudiandae officiis voluptatum fuga magnam quisquam totam fugiat officia beatae enim nesciunt."
        ]
    ];

    public static function all() {
        return collect(self::$news_posts);
    }

    public static function find($slug) {
        $news_posts = static::all();
        // $new_post = [];
        // foreach ($news_posts as $post) {
        //     if ($post["slug"] === $slug) {
        //         $new_post = $post;
        //     }
        // }

        return $news_posts->firstWhere('slug', $slug);
    }
}
