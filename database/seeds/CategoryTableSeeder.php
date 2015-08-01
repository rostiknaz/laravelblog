<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = array(
        	['name'=>'Category 1','description'=>'Welcome to Сategory 1'],
        	['name'=>'Category 2','description'=>'Welcome to Сategory 2'],
        	['name'=>'Category 3','description'=>'Welcome to Сategory 3']

        	);
        DB::table('categories')->insert($category);
    }
}
