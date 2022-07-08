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
        User::factory(3)->create();
        User::create([
            'name'=> 'Lukman Budiman',
            'username' => 'elbiz',
            'email'=>'lukmanbudiman@gmail.com',
            'password'=>bcrypt('12345')
        ]);
        
        // User::create([
        //     'name'=> 'Lukman',
        //     'email'=>'lukman@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        
        Category::create([
            'name'=>'Asus',
            'slug'=>'asus'
        ]); 
        Category::create([
            'name'=>'Xiaomi',
            'slug'=>'xiaomi'
        ]); 
        Category::create([
            'name'=>'Samsung',
            'slug'=>'samsung'
        ]); 
        
        Category::create([
            'name'=>'Gadget',
            'slug'=>'gadget'
        ]); 

        

        Category::create([
            'name'=>'Laptop Acer',
            'slug'=>'laptop-acer'
        ]); 
        Category::create([
            'name'=>'Laptop Asus',
            'slug'=>'laptop-asus'
        ]); 
        Category::create([
            'name'=>'Laptop Axioo',
            'slug'=>'laptop-axioo'
        ]); 
        Category::create([
            'name'=>'Tutorial',
            'slug'=>'tutorial'
        ]); 

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>2,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>3,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>4,
        //     'user_id'=>2

        // ]);
        // Post::create([
        //     'title'=>'Judul Kelima',
        //     'slug'=>'judul-kelima',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>5,
        //     'user_id'=>2

        // ]);
        // Post::create([
        //     'title'=>'Judul Keenam',
        //     'slug'=>'judul-keenam',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>6,
        //     'user_id'=>2

        // ]);
   
        // Post::create([
        //     'title'=>'Judul Ketujuh',
        //     'slug'=>'judul-ketujuh',
        //     'excerpt'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, accusamus.',
        //     'body'=> '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quae quos quis deserunt eum commodi necessitatibus officia ducimus maxime ab nihil, cumque libero? Quo illum libero culpa. Animi, ullam. Vitae fuga eum cupiditate quis doloremque, dolorem laborum quos, nesciunt, modi nam voluptatem aperiam sit dicta placeat cumque culpa voluptate esse.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas at fugit omnis eum facilis perferendis repudiandae iure tempore similique harum sed earum aliquam non amet unde laboriosam error molestias blanditiis. Doloribus nesciunt animi, est laboriosam fugit dicta. Adipisci nulla nobis repellat unde ut dolor natus cupiditate odit labore provident quos, quod magnam quis qui ducimus dolorem nostrum aut ipsa minima consequatur quo? Fugiat tenetur voluptates maxime enim nam eaque, laborum ducimus laudantium officiis vitae voluptas culpa? Neque voluptatem eum aliquid quia! Optio aliquam non quibusdam sint iure, aperiam numquam similique soluta, perferendis maiores totam ducimus veritatis in dignissimos ex consectetur? Illo minus ab aliquam, corporis magnam earum ipsum dolore temporibus quam deserunt ullam odit fuga quod dolor, in est expedita nobis! Eius beatae laborum aut dolor excepturi, itaque, earum, esse quo libero quia tenetur aliquid! Eligendi perspiciatis dolores incidunt harum nisi dolor, nostrum corporis ratione maxime quos itaque aut?</p>',
        //     'category_id'=>3,
        //     'user_id'=>2

        // ]);
    
    }
}
