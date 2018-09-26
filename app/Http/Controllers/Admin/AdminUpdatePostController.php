<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminUpdatePostController extends Controller
{
    public function show(Request $request, $id)
    {
        $article = Article::find($id);

        return view('default.update_post', ['title' => 'Edit the material', 'article' => $article]);
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = Auth::user();
        $data = $request->except('_token');

        $article = Article::find($data['id']);

//        $this->authorize('update', $article);
        $this->authorizeForUser($user,'update', $article);

        // By default the auth user is chosen but you can set the user id
//        if(Gate::/*forUser(6)->*/allows('update-article', $article)){
//            $article->name = $data['name'];
//            $article->img = $data['img'];
//            $article->text = $data['text'];
//
//            $res = $user->articles()->save($article);
//
//            return redirect()->back()->with('message', 'The Material has been updated');
//        }

//        if(Gate::/*forUser(6)->*/allows('update', $article)){
//        if($request->user()->can('update', $article)){
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];

            $res = $user->articles()->save($article);

            return redirect()->back()->with('message', 'The Material has been updated');
//        }

        return redirect()->back()->with(['message' => 'You have no permission']);

    }
}
