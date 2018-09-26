@extends('default.layouts.layout')

@section('content')

    <div class="">
        <h2>Adding new materials</h2>
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

    <form method="post" action="{{ route('admin_add_post_p') }}">
        @csrf
        <div class="form-group">
            <div class="col-xs-6">
                <label for="name">Heading</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Jane Doe">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <label for="img">Image</label>
                <input type="text" class="form-control" id="img" name="img" value="{{ old('img') }}" placeholder="Image">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
                <label for="text">Text</label>
                <textarea type="text" class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection