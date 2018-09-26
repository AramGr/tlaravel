@extends('default.layouts.layout')

@section('content')

    <div class="">
        <h2>Editing materials</h2>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @cannot('update', $article)
        <div class="alert alert-danger">
            He is not allowed
        </div>
    @endcannot

    <form method="post" action="{{ route('admin_update_post_p') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $article->id }}">
        <div class="form-group">
            <div class="col-xs-6">
                <label for="name">Heading</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}" placeholder="Jane Doe">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <label for="img">Image</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ $article->img }}" placeholder="Image">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <label for="text">Text</label>
                <textarea type="text" class="form-control" id="text" name="text" rows="3">{{ $article->text }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection