<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <form method="POST" action="{{ route('add-post')}}">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body">
        <input type="number" name="profile_id" placeholder="profile_id">
        <button type="submit">Create Post</button>
    </form>
</body>
</html>