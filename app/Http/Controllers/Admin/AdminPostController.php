<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Events\onAddArticleEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;

class AdminPostController extends Controller
{
    public function show()
    {
        return view('default.add_post', ['title' => 'New Material']);
    }

    public function create(Request $request)
    {
//        if(Gate::denies('add-article')){
//            return redirect()->back()->with(['message' => 'You have no permission']);
//        }

        $article = new Article;

//        if(Gate::denies('add', $article)){
//            return redirect()->back()->with(['message' => 'You have no permission']);
//        }

        if($request->user()->cannot('add', $article)) {
            return redirect()->back()->with(['message' => 'You have no permission']);
        }

        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->all();

        $res = $user->articles()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text']
        ]);

        ////event takes place after saving article into database, you can also call helper's "event()" method
//        Event::fire(new onAddArticleEvent($res, $user));
//        event(new onAddArticleEvent($res, $user));

        ////call a hand made event listener
        Event::fire('OnAddArticleEvent', [$res, $user]);

        return redirect()->back()->with('message', 'The material has been added');
    }

}
