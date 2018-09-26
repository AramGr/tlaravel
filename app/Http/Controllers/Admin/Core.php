<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Core extends Controller
{
    protected static $articles;

    public function __construct()
    {
//        $this->middleware('mymiddle');
    }

    public static function addArticles($array)
    {
        return self::$articles[] = $array;
    }


    public function getArticles(Request $request) {
////////////////////////////////// QUERY BUILDER ///////////////////////////
///
//        $articles = DB::table('articles')->get();
//        $articles = DB::table('articles')->first();
//        $articles = DB::table('articles')->value('name');

//        DB::table('articles')->orderBy('id')->chunk(2, function($articles){
//            foreach($articles as $article){
//                Core::addArticles($article);
//            }
//        });

//        $articles = DB::table('articles')->pluck('name');
//        $articles = DB::table('articles')->count();
//        $articles = DB::table('articles')->max('id');

//        $articles = DB::table('articles')->select('name', 'id', 'text')->get();
//        $articles = DB::table('articles')->distinct()->select('name')->get();

//        $query = DB::table('articles')->select('name');
        /////
        /// some code
        /////
//        $articles = $query->addSelect('text AS fulltext')->get();

        ////WHERE 3 arguments: id, =, 5
//        $articles = DB::table('articles')->select('name','text AS fulltext')
//                            ->where('id', '>', '5')
//                            ->where('name', 'like', 'test%', 'or')->get();

//        $articles = DB::table('articles')->select('name','text AS fulltext')
//            ->where([
//                        ['id', '>', '5'],
//                        ['name', 'like', 'test%', 'or']
//                    ])
//            ->get();

//        $articles = DB::table('articles')->select('name','text AS fulltext')
//                            ->where('id', '>', '5')
//                            ->where('name', 'like', 'test%', 'or')
//                            ->orWhere('id', '<', '2')
//                            ->get();

        /////   WHERE id between 1 and 5
//        $articles = DB::table('articles')->whereBetween('id', [1,5])->get();
//        $articles = DB::table('articles')->whereNotBetween('id', [1,5])->get();

//        $articles = DB::table('articles')->whereIn('id', [1,2,3,5])->get();
//        $articles = DB::table('articles')->whereNotIn('id', [1,2,3,5])->get();

//        $articles = DB::table('articles')->groupBy('name')->get();

        ///////LIMIT
//        $articles = DB::table('articles')->take(4)->skip(2)->get();

        ///////INSERT INTO
//        DB::table('articles')->insert([
//                                                ['name'=>'Test2', 'text'=>'hello'],
//                                                ['name'=>'Test3', 'text'=>'hello world'],
//                                                ['name'=>'Test2', 'text'=>'hello'],
//                                                ['name'=>'Test3', 'text'=>'hello world'],
//                                                ['name'=>'Test2', 'text'=>'hello'],
//                                                ['name'=>'Test3', 'text'=>'hello world']
//                                            ]);
        ///////INSERT and get last id
//        $result = DB::table('articles')->insertGetId(['name'=>'Test2', 'text'=>'hello']);
//        dump($result);

        ///////update where id = 21
//        $result = DB::table('articles')->where('id', 21)->update(['name'=>'hello word1']);
//        dump($result);

        ///////delete
//        $result = DB::table('articles')->where('id', 21)->delete();
//        dump($result);

        ///////LEFT JOIN
//        $users = DB::table('users')
//            ->leftJoin('articles', 'users.id', '=', 'posts.user_id')
//            ->get();

        /////// increment decrement
//        DB::table('articles')->increment('name', 5);
//        DB::table('articles')->decrement('name', 5);



////////////////////////////////// ELOQUENT MODEL //////////////////////////////


//        $articles = DB::table('articles')->get();

//        $articles = Article::all();

//        $articles = Article::where('id', '>', 3)->orderBy('name')->take(2)->get();

//        foreach ($articles as $article){
//            echo $article->text.'<br>';
//        }

//        Article::chunk(2, function($articles) {
//
//        });

//        $article = Article::find(3);
//        echo $article->text;

//        $article = Article::where('id', 1)->first();

//        $articles = Article::find([1,2,3]);
//        $article = Article::findOrFail(2);
//        $article = Article::where('id', 2)->firstOrFail();

///////////////// database insert
//        $article = new Article;
//        $article->name = 'New article';
//        $article->text = 'New text';
//
//        $article->save();

///////////////// update
//        $article = Article::find(21);
//        $article->name = 'New name 2';
//        $article->text = 'New text 2';
//
//        $article->save();

////////////////// insert 2
//        Article::create(
//                            [
//                                'name'=>'Hello World',
//                                'text'=>'Some Text'
//                            ]
//                        );
            //if the obj not exist it inserts into the database
//        $article = Article::firstOrCreate([
//                                    'name'=>'Hello World1',
//                                    'text'=>'Some Text'
//                                ]);

            //if the obj not exist it does not insert into the database but creates obj for further work
//        $article = Article::firstOrNew([
//                                'name'=>'Hello World2',
//                                'text'=>'Some Text'
//                            ]);
//
//        $article->save();

///////////////////////////////////////delete
//        $article = Article::find(26);
//        $article->delete();
//        Article::destroy(25);
//        Article::destroy([24,23]);

//        Article::where('id', '>', '3')->delete();

/////////////////////////////////////soft delete
//        $article = Article::find(2);
//        $article->delete();

        ///////catch the soft deleted rows
//        $articles = Article::withTrashed()->get();
//        $articles = Article::withTrashed()->restore();
//        $articles = Article::onlyTrashed()->restore();


//        foreach($articles as $article){
//            if($article->trashed()){
//                echo $article->id.'is deleted <br>';
//                $article->restore();
//            } else {
//                echo $article->id.'is not deleted <br>';
//            }
//        }

        ///// delete the soft deleted row
//        $article = Article::find(2);
//        $article->forceDelete();

//////////////////////////// TABLE RELATIONS ///////////////////
////////// One to one

//        $user = User::find(1);
//        $country = $user->country;


//        $articles = Article::all();

//        $country = Country::find(1);
//        dump($country->user);

///////// One to many

//        $user = User::find(1);
//        $articles = $user->articles;
//        foreach ($articles as $article) {
//            echo $article->name.'<br>';
//        }
//        dump($user->articles);

//        $user = User::find(1);
//        $articles = $user->articles()->where('id','>', 17)->get();
//        dump($articles);

//        $article = Article::find(17);
//        dump($article->user);

////////////// Many to many

//        $user = User::find(1);
//        foreach ($user->roles as $role){
//            echo $role->name.'<br>';
//        }

//        $user = User::find(1);
//        $role = $user->roles()->where('roles.id',2)->first();
//        dump($role);

//        $role = Role::find(1);
//        dump($role->users);

////////////// lenivaya zagruzka

/////100 angam database chdimelu momentn a

//        $articles = Article::all();
//        foreach ($articles as $article) {
//            echo $article->user->name;
//        }

//        $articles = Article::with('user')->get();
//        foreach ($articles as $article) {
//            echo $article->user->name.'<br>';
//        }

//        $articles = Article::all();
//        ////code
//
//        ////end of code
//        $articles->load('user');
//        foreach ($articles as $article) {
//            echo $article->user->name.'<br>';
//        }

//        $users = User::all();
//        foreach ($users as $user) {
//            dump($user->roles);
//        }

//        $users = User::with('articles', 'roles')->get();
//        foreach ($users as $user) {
//            dump($user->articles);
//        }

        //// take users that has at least one article
//        $users = User::has('articles')->get();
//        foreach ($users as $user) {
//            dump($user);
//        }

        //// take users that has 3 or more articles
//        $users = User::has('articles', '>=', 3)->get();
//        foreach ($users as $user) {
//            dump($user);
//        }

        ///////adding data into tables with relationed
//        $user = User::find(1);
//        $article = new Article([
//                                'name' => 'New Article',
//                                'text' => 'Some text'
//                                ]);
////        $user->articles()->save($article);

//        //save accepts object of the Article, create accepts array with data

//        $user->articles()->create([
//                                    'name' => 'New Article2',
//                                    'text' => 'Some text2'
//                                    ]);

//        $user = User::find(1);
//        $user->articles()->saveMany([
//                                        new Article(['name' => 'New Article3', 'text' => 'Some text3']),
//                                        new Article(['name' => 'New Article4', 'text' => 'Some text4']),
//                                        new Article(['name' => 'New Article5', 'text' => 'Some text5']),
//                                    ]);

//        $user = User::find(1);
//        $role = new Role(['name' => 'guest']);
//        $user->roles()->save($role);
//

//////////////////update in the table

//        $user = User::find(2);
//        $user->articles()->where('id', 24)->update(['name' => 'NEW TEXT']);
//
//        $article = Article::find(24);
//        dump($article);

///////////////////////////changing the connections (ex.1 -> now the 1 country has user 2 and not user one)
//one to one
//        $country = Country::find(1);
//        $user = User::find(2);
//        $country->user()->associate($user);
//        $country->save();

//one to many
//        $articles = Article::all();
//        $user = User::find(2);
//        foreach ($articles as $article){
//            $article->user()->associate($user);
//            $article->save();
//        }
//many to many

//        $user = User::find(2);
//        $role_id = Role::find(2)->id;
////        $user->roles()->attach($role_id); //inserts new row in the 3rd relational table
//        $user->roles()->detach($role_id); //deletes row in the 3rd relational table

////////////////////////////Listeners and mutators

//        $article = Article::find(26);
////        dump($article);
//        $article->name = 'Some text';
//        echo $article->name;

//        $article = Article::find(26);
//        echo $article->name;
////////////
//        $array = ['key' => 'Hello world'];
//        $article = Article::find(26);
//        $article->text = $array;
//        $article->save();

//        $article = Article::find(26);
//        dump($article->toArray());
//        dump($article->toJson());
//        dump((string)$article);


        return;
    }

    public function getArticle($id) {
        echo $id;
    }
}
