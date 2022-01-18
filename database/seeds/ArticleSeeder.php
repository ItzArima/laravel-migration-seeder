<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Model\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $img=config('img');
        for($i=0; $i<5; $i++){
            $newArticle = new Article();
            $now = date('Y-m-d'); 
            $newArticle->title = $faker->catchPhrase;
            $newArticle->author = $faker->name('male');
            $newArticle->description = $faker->text($maxNbChars = 75);
            $newArticle->date = $faker->dateTimeBetween('-2 years' , $now);
            $num = rand(0,count($img)-1);
            $newArticle ->imageId = $img[$num]['id'];
            $newArticle->save();    
        }
    }
}
