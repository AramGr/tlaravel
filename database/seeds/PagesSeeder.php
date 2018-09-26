<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
                                    'name' => 'About our company',
                                    'alias' => 'about',
                                    'text' => '<p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>
                                            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
                                            <p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <h3>Sub-heading</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</p>
                                            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
                                            <p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            <h3>Sub-heading</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <ul>
                                                <li>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,</li>
                                                <li>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
                                                <li>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</li>
                                                <li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</li>
                                                <li>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                                            </ul>'
                                ]);
    }
}
