<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('profile/create.css') }}">
    <script src="{{ asset('profile/create.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Profile</title>
</head>
<body>
    <div class="header">
        <div id="add_post"><a href="{{URL::route('add-post')}}">Add Post</a></div>
        <div id="profiles"><a href="{{URL::route('profiles')}}">All Profiles</a></div>
        <div id="posts"><a href="{{URL::route('posts')}}">All Posts</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">

    <h1>Add Profile</h1>
    <form method="POST" action="{{ route('add-profile')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="file" name="photo" accept="image/png,image/jpeg">
        <button type="submit">Create Profile</button>
    </form>
</body>
</html>