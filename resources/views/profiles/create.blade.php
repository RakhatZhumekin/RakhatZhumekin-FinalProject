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
    <form method="POST" action="{{ route('add-profile')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="file" name="photo" accept="image/png,image/jpeg">
        <button type="submit">Create Profile</button>
    </form>
</body>
</html>