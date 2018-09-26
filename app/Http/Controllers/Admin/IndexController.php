<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show() {

//        $data = ['title' => 'Hello World', 'title2' => 'Hello World2', 'title3' => 'Hello World3'];
//        return view('default.template', $data);

//        return view('default.template')->with('title', 'Hello World');

//        $view = view('default.template');
//        $view->with('title', 'Hello World');
//        $view->with('title2', 'Hello World 2');
//        $view->with('title3', 'Hello World 3');

        $array = [
            'title' => 'Laravel Project',
            'data' => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5',
            ],
            'dataI' => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar' => true,
            'script' => "<script>alert('hello')</script>"
        ];

        if(view()->exists('default.index')){

//            $path = config('view.paths');
//            return view()->file($path[0].'/default/template.php')->withTitle('Hello World');
//            return view('default.template')->withTitle('Hello World');

            //es versian chi ashxatum Laravel 5.6-um
//            view()->name('default.template', 'myview');
//            return view()->of('myview')->withTitle('Hello world');

            return view('default.index', $array);
//            echo view('default.template', ['title' => 'Hello World'])->getPath();
        }

        abort(404);
    }
}
