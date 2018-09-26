<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?,?,?)',
                                [
                                    'Blog post',
                                    '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>',
                                    'pic1.jpg'
                                ]);

        DB::table('articles')->insert(
                                                [
                                                    [
                                                        'name' => 'Sample blog post',
                                                        'text' => '<p>This blog post shows a few types of content that\'s supportet and </p>
                                                                <p>Cum sociic natoque pentabis los erno ke ti purelo <a href="#">dis parturient montes</a></p>
                                                                <blackquote>
                                                                    <p>Carabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna </strong></p>
                                                                </blackquote>
                                                                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras matas conse</p>',
                                                        'img' => 'pic2.jpg'
                                                    ],
                                                    [
                                                        'name' => 'Sample blog post2',
                                                        'text' => '<p>This blog post shows a few types of content that\'s supportet and </p>
                                                                <p>Cum sociic natoque pentabis los erno ke ti purelo <a href="#">dis parturient montes</a></p>
                                                                <blackquote>
                                                                    <p>Carabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna </strong></p>
                                                                </blackquote>
                                                                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras matas conse</p>',
                                                        'img' => 'pic3.jpg'
                                                    ]
                                                ]
                                            );

        Article::create([
                            'name' => 'Sample blog post 3',
                            'text' => 'Hello world',
                            'img' => 'pic4.jpg'
                        ]);
    }
}
