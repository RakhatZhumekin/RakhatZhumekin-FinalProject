<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <script src="{{ asset('main.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
    <div class="header">
        <div id="add_profile"><a href="{{URL::route('add-profile')}}">Add Profile</a></div>
        <div id="add_post"><a href="{{URL::route('add-post')}}">Add Post</a></div>
        <div id="profiles"><a href="{{URL::route('profiles')}}">All Profiles</a></div>
        <div id="posts"><a href="{{URL::route('posts')}}">All Posts</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">
    <h1 id="Hello">Hello, this is my final project for INF-232.</h1>
    <h1>Proceed to the pages in the header.</h1>
</body>
</html>