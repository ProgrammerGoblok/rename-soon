<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Post::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'  => 'Afiat Yulian',
        //     'email' => 'afiyul3@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'  => 'Afiat Yulian 2',
        //     'email' => 'afiyul4@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis nulla nisi aspernatur laboriosam deleniti repudiandae autem reiciendis explicabo ipsam ut. Nemo nostrum minima culpa, accusamus beatae quas qui illum eligendi aperiam dicta eius odio distinctio ducimus quasi illo, reiciendis sapiente maxime? Dolor fugiat, eveniet ad eum, labore sed nihil corporis delectus, asperiores quos eaque! Voluptatem molestias unde sequi delectus odit sit rem atque a id repellendus totam, facilis, quisquam ratione! Distinctio necessitatibus nihil obcaecati placeat aliquid illo, saepe facilis dolorem quasi cumque laudantium consequatur eum ullam laborum! Harum placeat ipsa aspernatur animi autem ratione omnis! Ipsam, accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis nulla nisi aspernatur laboriosam deleniti repudiandae autem reiciendis explicabo ipsam ut. Nemo nostrum minima culpa, accusamus beatae quas qui illum eligendi aperiam dicta eius odio distinctio ducimus quasi illo, reiciendis sapiente maxime? Dolor fugiat, eveniet ad eum, labore sed nihil corporis delectus, asperiores quos eaque! Voluptatem molestias unde sequi delectus odit sit rem atque a id repellendus totam, facilis, quisquam ratione! Distinctio necessitatibus nihil obcaecati placeat aliquid illo, saepe facilis dolorem quasi cumque laudantium consequatur eum ullam laborum! Harum placeat ipsa aspernatur animi autem ratione omnis! Ipsam, accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis nulla nisi aspernatur laboriosam deleniti repudiandae autem reiciendis explicabo ipsam ut. Nemo nostrum minima culpa, accusamus beatae quas qui illum eligendi aperiam dicta eius odio distinctio ducimus quasi illo, reiciendis sapiente maxime? Dolor fugiat, eveniet ad eum, labore sed nihil corporis delectus, asperiores quos eaque! Voluptatem molestias unde sequi delectus odit sit rem atque a id repellendus totam, facilis, quisquam ratione! Distinctio necessitatibus nihil obcaecati placeat aliquid illo, saepe facilis dolorem quasi cumque laudantium consequatur eum ullam laborum! Harum placeat ipsa aspernatur animi autem ratione omnis! Ipsam, accusamus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore reprehenderit, ea, officiis nulla nisi aspernatur laboriosam deleniti repudiandae autem reiciendis explicabo ipsam ut. Nemo nostrum minima culpa, accusamus beatae quas qui illum eligendi aperiam dicta eius odio distinctio ducimus quasi illo, reiciendis sapiente maxime? Dolor fugiat, eveniet ad eum, labore sed nihil corporis delectus, asperiores quos eaque! Voluptatem molestias unde sequi delectus odit sit rem atque a id repellendus totam, facilis, quisquam ratione! Distinctio necessitatibus nihil obcaecati placeat aliquid illo, saepe facilis dolorem quasi cumque laudantium consequatur eum ullam laborum! Harum placeat ipsa aspernatur animi autem ratione omnis! Ipsam, accusamus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
