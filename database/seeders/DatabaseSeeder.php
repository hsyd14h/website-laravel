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
      

       //User::create([
         //   'name' => 'Watanabe Haruto',
        // 'email' => 'haruto2245@gmail.com',
          //  'password' => bcrypt('12345')
       //]);

      // User::create([
       // 'name' => 'Hwang Hyunjin',
       // 'email' => 'jiniretHJ00@gmail.com',
        //'password' => bcrypt('67890')
        //]);

      User::factory(3)->create();

       Category::create([
           'name' => 'Musik',
           'slug' => 'musik'
       ]);
       Category::create([
           'name' => 'Game',
           'slug' => 'game'
       ]);

       Category::create([
          'name' => 'Programming',
           'slug' => 'programming'
       ]);

       Post::factory(20)->create();

     //  Post::create([
       //    'title' => 'Judul Pertama',
         //  'slug'  => 'judul-pertama',
           //'excerpt' => 'treasuretreasuretreasuretreasuretreasuretreasuretreasuretreasuretreasuretreasuretreasuretreasuretreasure.',
           //'body'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem expedita sunt ut ex ipsam eligendi praesentium molestiae repellendus, voluptatum maxime et nam suscipit! Facere dicta aliquid velit! Eligendi error a dolores dicta nemo non velit et quae reiciendis repudiandae, qui corporis quam voluptatibus eaque voluptas adipisci sapiente obcaecati ea ipsa odit magnam repellendus tenetur modi pariatur! Adipisci veritatis distinctio ipsam sed quidem consequuntur odit omnis eligendi sint reiciendis qui magnam, fugit aliquam illum unde eaque repellat repudiandae error fuga. Dignissimos, autem pariatur itaque iste aperiam quae explicabo, exercitationem ipsam laborum consectetur, cum commodi doloribus at omnis ad assumenda amet accusamus!.',
           //'category_id' => 1,
           //'user_id'     => 1
       //]);

      // Post::create([
      //  'title'    => 'Judul Ke Dua',
       // 'slug'     => 'judul-ke-dua',
        //'excerpt'  => 'keterangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantext.',
        //'body'     => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem expedita sunt ut ex ipsam eligendi praesentium molestiae repellendus, voluptatum maxime et nam suscipit! Facere dicta aliquid velit! Eligendi error a dolores dicta nemo non velit et quae reiciendis repudiandae, qui corporis quam voluptatibus eaque voluptas adipisci sapiente obcaecati ea ipsa odit magnam repellendus tenetur modi pariatur! Adipisci veritatis distinctio ipsam sed quidem consequuntur odit omnis eligendi sint reiciendis qui magnam, fugit aliquam illum unde eaque repellat repudiandae error fuga. Dignissimos, autem pariatur itaque iste aperiam quae explicabo.',
        //'category_id' => 1,
        //'user_id'     => 1
   // ]);

   // Post::create([
    //    'title' => 'Judul Ke Tiga',
    //    'slug'  => 'judul-ke-tiga',
    //    'excerpt' => 'keterangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantext.',
   //     'body'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem expedita sunt ut ex ipsam eligendi praesentium molestiae repellendus, voluptatum maxime et nam suscipit! Facere dicta aliquid velit! Eligendi error a dolores dicta nemo non velit et quae reiciendis repudiandae, qui corporis quam voluptatibus eaque voluptas adipisci sapiente obcaecati ea ipsa odit magnam repellendus tenetur modi pariatur! Adipisci veritatis distinctio ipsam sed quidem consequuntur odit omnis eligendi sint reiciendis qui magnam, fugit aliquam illum unde eaque repellat repudiandae error fuga. Dignissimos, autem pariatur itaque iste aperiam quae explicabo.',
    //    'category_id' => 2,
     //   'user_id'     => 1
   // ]);

    //Post::create([
     //   'title' => 'Judul Ke Keempat',
      //  'slug'  => 'judul-ke-keempat',
      //  'excerpt' => 'keterangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantextketerangantext.',
       // 'body'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem expedita sunt ut ex ipsam eligendi praesentium molestiae repellendus, voluptatum maxime et nam suscipit! Facere dicta aliquid velit! Eligendi error a dolores dicta nemo non velit et quae reiciendis repudiandae, qui corporis quam voluptatibus eaque voluptas adipisci sapiente obcaecati ea ipsa odit magnam repellendus tenetur modi pariatur! Adipisci veritatis distinctio ipsam sed quidem consequuntur odit omnis eligendi sint reiciendis qui magnam, fugit aliquam illum unde eaque repellat repudiandae error fuga. Dignissimos, autem pariatur itaque iste aperiam quae explicabo.',
        //'category_id' => 2,
       // 'user_id'     => 2
    //]);


    }
}
