<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Afiyul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempora iusto, odio corrupti dolorem cupiditate, at quisquam illum sit commodi praesentium veniam enim, laudantium consectetur explicabo consequuntur quis. Eveniet, optio?"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Afiyul2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dignissimos ut inventore veniam alias eaque, unde ullam repudiandae maiores voluptatem possimus quam, eius provident at explicabo aliquid, a qui? Accusantium omnis, ut ipsam enim aspernatur esse aliquid sequi adipisci deleniti minus, asperiores fuga ex sint animi doloribus modi fugit! Asperiores voluptatibus facilis aliquid repellat ipsam beatae tempore saepe laboriosam quod perspiciatis distinctio nostrum, sed reprehenderit optio alias, cupiditate quasi dolor assumenda eligendi corrupti voluptatum rem nesciunt temporibus! Exercitationem, temporibus quibusdam!"
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
