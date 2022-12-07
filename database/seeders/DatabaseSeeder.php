<?php

namespace Database\Seeders;

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

        User::create([
            'name' => 'Angkasawari Sakti',
            'username' => 'angkswrsktii',
            'email' => 'angkasawarisakti@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Ramdhani',
        //     'email' => 'ramdhani@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(19)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, consequuntur rerum nostrum amet vitae eos animi veritatis consectetur nulla recusandae unde minima omnis? Eaque debitis exercitationem repellendus, vero sapiente deleniti voluptate suscipit commodi et, nulla corporis possimus eum tempore voluptas aperiam voluptatem sint? Eum placeat, nemo laborum reprehenderit harum ex sint voluptas, consequatur architecto, perferendis numquam blanditiis? Quisquam neque iure minima vel, repellat nulla, recusandae aliquid eos dolorem excepturi officia, dicta hic at ad placeat esse debitis expedita exercitationem illum deserunt tempore! Tempore aliquam temporibus ad at vitae illum quis distinctio consectetur praesentium neque qui voluptates quo quae, aliquid aperiam fuga nemo possimus, voluptatibus repudiandae pariatur velit, expedita cum debitis in.</p><p> Debitis nihil beatae necessitatibus nobis porro officia, temporibus aliquam autem reprehenderit quis! Magni, officiis incidunt est quasi dolorem temporibus maxime labore! Obcaecati et explicabo magni, laborum ipsam rem placeat officia blanditiis nisi maiores maxime veritatis consequuntur tempora, alias quod dolor hic, possimus totam quasi assumenda quam nostrum ducimus fuga esse. Molestiae cum at aliquid iusto doloremque aliquam libero saepe deserunt, obcaecati enim. Vel in labore omnis veritatis perspiciatis eaque ea debitis, minima magni eius expedita id, impedit nostrum nisi distinctio. Modi tempora eaque facere sint dolorum ratione necessitatibus sapiente.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, consequuntur rerum nostrum amet vitae eos animi veritatis consectetur nulla recusandae unde minima omnis? Eaque debitis exercitationem repellendus, vero sapiente deleniti voluptate suscipit commodi et, nulla corporis possimus eum tempore voluptas aperiam voluptatem sint? Eum placeat, nemo laborum reprehenderit harum ex sint voluptas, consequatur architecto, perferendis numquam blanditiis? Quisquam neque iure minima vel, repellat nulla, recusandae aliquid eos dolorem excepturi officia, dicta hic at ad placeat esse debitis expedita exercitationem illum deserunt tempore! Tempore aliquam temporibus ad at vitae illum quis distinctio consectetur praesentium neque qui voluptates quo quae, aliquid aperiam fuga nemo possimus, voluptatibus repudiandae pariatur velit, expedita cum debitis in.</p><p> Debitis nihil beatae necessitatibus nobis porro officia, temporibus aliquam autem reprehenderit quis! Magni, officiis incidunt est quasi dolorem temporibus maxime labore! Obcaecati et explicabo magni, laborum ipsam rem placeat officia blanditiis nisi maiores maxime veritatis consequuntur tempora, alias quod dolor hic, possimus totam quasi assumenda quam nostrum ducimus fuga esse. Molestiae cum at aliquid iusto doloremque aliquam libero saepe deserunt, obcaecati enim. Vel in labore omnis veritatis perspiciatis eaque ea debitis, minima magni eius expedita id, impedit nostrum nisi distinctio. Modi tempora eaque facere sint dolorum ratione necessitatibus sapiente.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, consequuntur rerum nostrum amet vitae eos animi veritatis consectetur nulla recusandae unde minima omnis? Eaque debitis exercitationem repellendus, vero sapiente deleniti voluptate suscipit commodi et, nulla corporis possimus eum tempore voluptas aperiam voluptatem sint? Eum placeat, nemo laborum reprehenderit harum ex sint voluptas, consequatur architecto, perferendis numquam blanditiis? Quisquam neque iure minima vel, repellat nulla, recusandae aliquid eos dolorem excepturi officia, dicta hic at ad placeat esse debitis expedita exercitationem illum deserunt tempore! Tempore aliquam temporibus ad at vitae illum quis distinctio consectetur praesentium neque qui voluptates quo quae, aliquid aperiam fuga nemo possimus, voluptatibus repudiandae pariatur velit, expedita cum debitis in.</p><p> Debitis nihil beatae necessitatibus nobis porro officia, temporibus aliquam autem reprehenderit quis! Magni, officiis incidunt est quasi dolorem temporibus maxime labore! Obcaecati et explicabo magni, laborum ipsam rem placeat officia blanditiis nisi maiores maxime veritatis consequuntur tempora, alias quod dolor hic, possimus totam quasi assumenda quam nostrum ducimus fuga esse. Molestiae cum at aliquid iusto doloremque aliquam libero saepe deserunt, obcaecati enim. Vel in labore omnis veritatis perspiciatis eaque ea debitis, minima magni eius expedita id, impedit nostrum nisi distinctio. Modi tempora eaque facere sint dolorum ratione necessitatibus sapiente.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, consequuntur rerum nostrum amet vitae eos animi veritatis consectetur nulla recusandae unde minima omnis? Eaque debitis exercitationem repellendus, vero sapiente deleniti voluptate suscipit commodi et, nulla corporis possimus eum tempore voluptas aperiam voluptatem sint? Eum placeat, nemo laborum reprehenderit harum ex sint voluptas, consequatur architecto, perferendis numquam blanditiis? Quisquam neque iure minima vel, repellat nulla, recusandae aliquid eos dolorem excepturi officia, dicta hic at ad placeat esse debitis expedita exercitationem illum deserunt tempore! Tempore aliquam temporibus ad at vitae illum quis distinctio consectetur praesentium neque qui voluptates quo quae, aliquid aperiam fuga nemo possimus, voluptatibus repudiandae pariatur velit, expedita cum debitis in.</p><p> Debitis nihil beatae necessitatibus nobis porro officia, temporibus aliquam autem reprehenderit quis! Magni, officiis incidunt est quasi dolorem temporibus maxime labore! Obcaecati et explicabo magni, laborum ipsam rem placeat officia blanditiis nisi maiores maxime veritatis consequuntur tempora, alias quod dolor hic, possimus totam quasi assumenda quam nostrum ducimus fuga esse. Molestiae cum at aliquid iusto doloremque aliquam libero saepe deserunt, obcaecati enim. Vel in labore omnis veritatis perspiciatis eaque ea debitis, minima magni eius expedita id, impedit nostrum nisi distinctio. Modi tempora eaque facere sint dolorum ratione necessitatibus sapiente.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
