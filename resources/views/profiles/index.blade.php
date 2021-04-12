<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('profile/profile.css') }}">
    <script src="{{ asset('profile/profile.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles</title>
</head>
<body>
    <div class="header">
        <div id="add_profile">Add Profile</div>
        <div id="add_post">Add Post</div>
        <div id="posts">All Posts</div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">
    
    @forelse ($profiles as $profile)
        <table class="profiles">
            <tr class="profile_row">
                <td>{{$profile->id}}</td>
                <td>{{$profile->name}}</td>
                <td><img src="{{$profile->photo}}" width="100px"></td>
            </tr>
        </table>
    @empty
        <p id="nothing">There are no profiles registered.</p>
    @endforelse
</body>
</html>