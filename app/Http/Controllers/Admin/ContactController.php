<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Contracts\SaveStr;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    protected $request;

//    public function __construct(Request $request)
//    {
//        $this->request = $request;
//    }

    public function show(Request $request, $id = FALSE)
    {
//        print_r($request->all());
//        $array = $request->only('name', 'site');
//        $array = $request->except(['name', 'site']);
//        print_r($array);


//        if($request->has('name')){
//            echo '<h1 style="margin-top: 100px">'.$request->input('name', 'Default').'</h1>';
//        }

//        echo '<h1 style="margin-top: 100px">'.$request->name.'</h1>';
//        echo '<h1 style="margin-top: 100px">'.$request->path().'</h1>';

//        if($request->is('contact/*')){
//            echo '<h1 style="margin-top: 100px">'.$request->path().'</h1>';
//        }

//        echo '<h1 style="margin-top: 100px">'.$request->url().'</h1>';
//        echo '<h1 style="margin-top: 100px">'.$request->fullUrl().'</h1>';

//        echo '<h1 style="margin-top: 100px">'.$request->method().'</h1>';

//        echo '<h1 style="margin-top: 100px">'.$request->root().'</h1>';
//        echo '<h1 style="margin-top: 100px">'.$request->query('option').'</h1>';

//        print_r($request->header());
//        print_r($request->server());
//        print_r($request->segments());

//        if ($request->isMethod('post')) {

            ////

            ////validation

            ////

// adding session
//            $request->flash(); //create session data
//            $request->old('name');
//            $request->flush(); //clean session data
//            $request->flashOnly('name', 'site');
//            $request->flashExcept('name', 'site');
//            return redirect()->route('contact')->withInput();


//            echo '<h1 style="margin-top: 100px">'.$request->method().'</h1>';
//        }

        //////////////////////////////////////////////////////////////////
//        if ($request->isMethod('post')){

            // the date has to be after tomorrow (now is 22.08.2018, must be 24.08.2018 or later)
//            $rules = [
//                'name' => 'after:tomorrow'
//            ];

            //the data must be between the rules range
//            $rules = [
//                'name' => 'between:2,5'
//            ];

            //must have input with name "name_confirmation", so these 2 inputs have to be the same
//            $rules = [
//                'name' => 'confirmed'
//            ];

            //input name have to be different with input email
//            $rules = [
//                'name' => 'different:email'
//            ];

            //The name must be 2 digits.
//            $rules = [
//                'name' => 'digits:2'
//            ];

            //The name must be between 2 and 5 digits.
//            $rules = [
//                'name' => 'digits_between:2,5'
//            ];

            //checks if in the database in table users in column name is there an input value or not
//            $rules = [
//                'name' => 'exists:users,name'
//            ];

            //The input value have to be either "ar" or "kar"
//            $rules = [
//                'name' => 'in:ar,kar'
//            ];

            //name is required when email=aram@gmail.com
//            $rules = [
//                'name' => 'required_if:email,aram@gmail.com'
//            ];

            //name is rquired when email is not empty
//            $rules = [
//                'name' => 'required_with:email'
//            ];

            // the name must be the same as email
//            $rules = [
//                'name' => 'same:email'
//            ];

            //name have to be unique in the column name of table users
//            $rules = [
//                'name' => 'unique:users,name'
//            ];

//            $rules = [
//                'name' => 'required|max:10',
//                'email' => 'required|email'
//            ];
//            $this->validate($request, $rules);
//
//            dump($request->all());
//
//        }
        /////////////////////////////////////////////////////////////////////////

        if($request->isMethod('post')){

//            $messages = [];
//            $validator = Validator::make($request->all(), [
//                'name' => 'required'
//            ], $messages);
//
//            if($validator->fails()){
//                return redirect()->route('contact')->withErrors($validator)->withInput();
//            }

        }

////////////////////////////////////Sessions//////////////////////////////
//        $result = $request->session()->get('key', 'default');
//        $result = $request->session()->all();
//        $request->session()->put('key', 'some value');
//        $request->session()->put('key.first', 'some value');

//        if($request->session()->has('key.second')){
//            $result = $request->session()->all();
//            dump($result);
//        }
//        $request->session()->push('key.second', 'some value 2');
//        $result = $request->session()->all();
//        Session::push('key.second', 'some value 2');

//        dump(session('key5','default'));

        //// clear key from session
//        Session::forget('key2');
        //// clear all session
//        Session::flush();

        //// pulls data from session and deletes immediately
//        dump(Session::pull('key'));

        //// creates data for only one request
//        Session::flash('message', 'value');

        //// brings back the last flash session ad keeps for one request
//        Session::reflash();

/////////////////////////////////////Localization/////////////////////////////////////////////////

        ////messages is the file, hello is the key of the returned array
        $title_head = Lang::get('messages.hello', ['name']);
        ////
//        if(Lang::has('messages.apples')){
//            $title_head = Lang::choice('messages.apples', 23);
//        }

//        dd(Lang::$app);



        return view('default.contact', ['title' => 'Contacts', 'title_head' => $title_head]);
    }

    public function store(Request $request/*, SaveStr $saveStr*/, $id = FALSE)
    {
//        if($request->isMethod('post')){
//            $messages = [
//                'name.required' => 'ПОЛЕ :attribute обязателно к заполнению',
//                'email.max' => 'Максимально допустимое количество симвалов - :max',
//            ];
//            $validator = Validator::make($request->all(), [
//                'name' => 'required',
////                'email' => 'required',
////////////if the field exists so it is required, if not exixst in the form, it is not required
////                'email' => 'sometimes|required',
//            ], $messages);
//
//            $validator->sometimes(['email', 'site'], 'required', function ($input) {
//
////                dump($input);
////                exit;
//
//                return strlen($input->name) >= 10;
//            });
//
////            $validator->after(function($validator){
////                $validator->errors()->add('name', 'Дополнительное сообщение');
////            });
//
//            if($validator->fails()){
//                $messages = $validator->errors();
////                dump($messages->get('name'));
//
////                if($messages->has('name')){
//////                    dump($messages->get('name'));
//////                    dump($messages->all('<p> :message </p>'));
////                    dump($messages->first('name', '<p> :message </p>'));
////                }
//
////                dump($validator->failed());
////                exit();
//
//                return redirect()->route('contact')->withErrors($validator)->withInput();
//            }
//        }
//
////        $this->validate($request, $rules, $messages);

        ///////////////////Service provider's work/////////////////////////
        ///
//        $saveStr->save($request, Auth::user());

//        $var = new SomeClass();

//        $var = App::make('App\Helpers\Contracts\SaveStr');
//        $var->save($request, Auth::user());

//        SaveStr::save($request, Auth::user());


        return redirect()->route('contact');
    }
}
