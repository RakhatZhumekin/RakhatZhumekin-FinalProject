<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('blog/blog.css') }}">
    <script src="{{ asset('blog/blog.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <div class="header">
        <div id="add_profile"><a href="{{URL::route('add-profile')}}">Add Profile</a></div>
        <div id="add_post"><a href="{{URL::route('add-post')}}">Add Post</a></div>
        <div id="profiles"><a href="{{URL::route('profiles')}}">All Profiles</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">
    
    <h1>All Posts</h1>
    <table class="posts">
    <tr>
        <th>Post ID</th>
        <th>Profile ID</th>
        <th>Profile Name</th>
        <th>Profile Photo</th>
        <th>Post Title</th>
        <th>Post Body</th>
    </tr>
    @forelse ($posts as $post)
            <tr class="post_row">
                <td>{{$post->id}}</td>
                <td>{{$post->profile->id}}</td>
                <td>{{$post->profile->name}}</td>
                <td><img src="{{$post->profile->photo}}" width="100px" height="50px"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
            </tr>
    @empty
        <p id="nothing">There are no posts registered.</p>
    @endforelse
    </table>
</body>
</html>