<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i < 20; $i++) { 
            $time = $faker->dateTime();

            $article = new Article();
            $article->title = $faker->text(100);
            $article->subtitle = $faker->text(150);
            $article->slug = Str::slug($article['title'] , '-');
            $article->author = $faker->name();
            $article->content= $faker->text(1000);
            $article->created_at= $time;
            $article->updated_at= $time;

            $article->save();
        }
    }
}
