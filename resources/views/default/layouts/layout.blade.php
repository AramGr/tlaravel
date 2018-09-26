
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

@section('navbar')
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel Project</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo route('home') ?>">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('articles') }}">Articles</a></li>
                <li><a href="{{ route('article', ['id' => 10]) }}">Article</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
<!-- endsection u yield('navbar') miasin darnum en show -->
@show

@section('header')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>{{ $title }}</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
@show

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3">
            @section('sidebar')
            <div class="sidebar-module">
                <h2>Archives</h2>
                <ol class="list-unstyled">
                    <li><a href="#">March 2018</a></li>
                    <li><a href="#">February 2018</a></li>
                    <li><a href="#">January 2018</a></li>
                    <li><a href="#">December 2018</a></li>
                    <li><a href="#">November 2018</a></li>
                    <li><a href="#">October 2018</a></li>
                    <li><a href="#">September 2018</a></li>
                    <li><a href="#">August 2018</a></li>
                    <li><a href="#">July 2018</a></li>
                    <li><a href="#">June 2018</a></li>
                    <li><a href="#">May 2018</a></li>
                    <li><a href="#">April 2018</a></li>
                </ol>
            </div>
            @show
        </div>
        @yield('content')
    </div>

    <hr>

    <footer>
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
</div> <!-- /container -->

</body>
</html>
