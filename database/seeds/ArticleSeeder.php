<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles_list = config('seeder.articles');

        foreach ($articles_list as $article) {

            $newArticle = new Article();
            $newArticle->title = $article['title'];
            $newArticle->sub_title = $article['sub_title'];
            $newArticle->body = $article['body'];
            $newArticle->cover = $article['cover'];

            $newArticle->save();
        }
    }
}
