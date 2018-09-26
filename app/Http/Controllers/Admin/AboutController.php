<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function show()
    {
//        return 'hello';

        if(view()->exists('default.about')){
//            return view('default.about')->withTitle('Hello World');

//            $view = view('default.about')->withTitle('Hello World')->render();
//            return (new Response($view))
//                            ->header('Content-type', 'NewType')
//                            ->header('header-one', 'Header');

//            return response($view)
//                ->header('Content-type', 'NewType')
//                ->header('header-one', 'Header');

//            return response()->json(['name'=>'Hello', 'name1'=>'Hello1']);

//            return response()->view('default.about', ['title'=>'Hello World']);
//            return response()->download('robots.txt', 'mytext.txt');

//            return response($view)->withHeaders(['headerOne'=>'Hello', 'headertwo'=>'Hello1']);

//            return redirect('/articles');
//            return redirect('/articles')->withInput();
//            return redirect()->route('home');
//            return redirect()->action('Admin\ContactController@show');
//            return redirect('/articles')->with('param1', 'Hello');

//            return new RedirectResponse('/articles');
//            return RedirectResponse::create('/articles');

//            return response()->myRes('hello world');

//////////////////////////////////////////////////////////////// DB::->queries

//            $articles = DB::select("SELECT * FROM `articles` WHERE id = :id", ['id'=>2]);
//            DB::insert("INSERT INTO `articles` (`name`, `text`) VALUES (?,?)", ['test 1', 'TEXT']);

//            $result = DB::connection()->getPdo()->lastInsertId();

//            $result = DB::update('UPDATE articles SET `name` = ? WHERE `id` = ?', ["TEST 3", 6]);
//            $result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', [6]);

//            DB:statement('DROP table `articles`');



//            $articles = DB::select("SELECT * FROM `articles`");
//            dump($result);
//            dump($articles);







///////////for about page

            $page = DB::select("SELECT * FROM `pages` WHERE `alias` = :alias", ['alias'=>'about']);
            return view('default.about')->withPage($page[0])->withTitle('About our company');

///////////
        }

        abort(404);
    }
}
