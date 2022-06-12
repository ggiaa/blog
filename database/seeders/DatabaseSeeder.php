<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'ejojo',
        //     'email' => 'ejojo@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'Gia',
            'username' => 'gia',
            'email' => 'gia@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nostrum dolorem cumque quos. Ducimus et natus laudantium, sapiente possimus dolores est dolore maiores asperiores',
        //     'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nostrum dolorem cumque quos. Ducimus et natus laudantium, sapiente possimus dolores est dolore maiores asperiores. Fugit voluptatem beatae nostrum illo? Impedit illo rem dicta repellendus doloribus officia nobis quisquam? Rem maiores magni explicabo totam vel atque nisi, aliquam voluptatem ipsum saepe excepturi, enim, eaque exercitationem fugiat. Ipsum nam id, molestiae facere laboriosam at magni totam laudantium molestias itaque, autem earum, consequatur deleniti? Dolore pariatur neque molestiae suscipit amet illum nesciunt deleniti consequuntur doloremque ipsum aspernatur mollitia ipsam quisquam, error, molestias explicabo id cumque, dicta tenetur. Praesentium tenetur eius itaque nesciunt, maiores nihil atque amet eum, voluptas architecto sint totam quaerat adipisci numquam inventore debitis libero, rerum magnam natus facere? Commodi, illum.',
        //     'category_id' => '1',
        //     'user_id' => '1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore voluptas tempore autem ratione aut magnam quibusdam',
        //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore voluptas tempore autem ratione aut magnam quibusdam dolores explicabo, veritatis natus veniam porro quae officiis quaerat commodi amet dicta vitae voluptates odio aspernatur? Sequi consequatur optio, ullam vero nisi esse modi, id nulla facere minus vel repudiandae unde accusamus pariatur quisquam aliquid minima blanditiis placeat cum fuga quaerat natus incidunt perspiciatis nobis. Officiis, necessitatibus nesciunt accusantium nam corporis rerum odio odit optio aperiam non sapiente dolor! Qui eligendi assumenda cumque quos repellat sunt maiores modi, rerum quidem, ipsa porro ullam voluptatibus?',
        //     'category_id' => '1',
        //     'user_id' => '2'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore voluptas tempore autem ratione aut magnam quibusdam',
        //     'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore voluptas tempore autem ratione aut magnam quibusdam dolores explicabo, veritatis natus veniam porro quae officiis quaerat commodi amet dicta vitae voluptates odio aspernatur? Sequi consequatur optio, ullam vero nisi esse modi, id nulla facere minus vel repudiandae unde accusamus pariatur quisquam aliquid minima blanditiis placeat cum fuga quaerat natus incidunt perspiciatis nobis. Officiis, necessitatibus nesciunt accusantium nam corporis rerum odio odit optio aperiam non sapiente dolor! Qui eligendi assumenda cumque quos repellat sunt maiores modi, rerum quidem, ipsa porro ullam voluptatibus?',
        //     'category_id' => '2',
        //     'user_id' => '1'
        // ]);
    }
}
