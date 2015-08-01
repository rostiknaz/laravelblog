<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        for ($i=0; $i < 10 ; $i++) {
           $posts = array(
            ['title' => $faker->sentence, 'img' => $faker->imageUrl(900,300),'description'=>$faker->paragraph(4),'content'=> $faker->paragraph(10),'created_at'=> new DateTime,'updated_at'=> new DateTime,'category_id'=>$faker->numberBetween(1,3)]
              );

           DB::table('posts')->insert($posts);
       }
   }
}
