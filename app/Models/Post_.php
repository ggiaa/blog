<?php

namespace App\Models;

class Post
{
    private static $artikel = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "David",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum sunt mollitia fugit repellendus ut modi, repellat, illo quaerat assumenda dolores est tempore obcaecati numquam temporibus doloremque! Quia at tempore nam iste, rerum ex nemo accusantium eum recusandae aliquam, quo molestiae, sed perspiciatis veritatis debitis. Ut saepe nostrum ipsum, animi, debitis nihil sit exercitationem nobis quae necessitatibus pariatur, facere est. Asperiores cupiditate, a error quibusdam id reprehenderit velit, quaerat eveniet sequi assumenda nisi praesentium dicta, suscipit aperiam. Facilis explicabo quam consequuntur."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Doe",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit obcaecati maiores explicabo ratione in perspiciatis recusandae consectetur quaerat accusamus autem at alias atque itaque, culpa dignissimos incidunt repellendus unde odit. Similique sequi soluta dolores suscipit enim id vero et exercitationem quam nisi nemo dolorem, vel placeat eos cumque deleniti nulla necessitatibus eaque repellat officiis atque quaerat! Accusamus, corrupti sapiente? Dolorem, accusantium doloribus magnam ab cupiditate facere sit animi est quam blanditiis voluptas dicta beatae. Similique eius dolor ullam suscipit maiores. Dolores quaerat ea deserunt aliquid, omnis voluptatum voluptates, velit nam, necessitatibus deleniti ex dignissimos! Laboriosam tempore deserunt tenetur ipsa? Ipsa laudantium, odit iste dolores possimus eum sapiente explicabo provident nesciunt velit unde magnam ullam incidunt nobis deserunt iure aliquid eos?"
        ]
    ];

    public static function all()
    {
        return collect(self::$artikel);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
