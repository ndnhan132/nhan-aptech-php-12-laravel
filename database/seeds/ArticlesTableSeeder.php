<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker= Faker::create();
        foreach (range(1,6) as $index){
            DB::table('articles')->insert([
                'title'=> $faker->name,
                'content'=> $faker->word
            ]);
        }
    }
}
