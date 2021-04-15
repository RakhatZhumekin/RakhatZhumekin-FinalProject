<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('profile/create.css') }}">
    <script src="{{ asset('profile/create.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.create') @lang('lang.profile')</title>
</head>
<body>
    <div class="header">
        <div id="main"><a href="{{URL::route('main', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div id="add_post"><a href="{{URL::route('add-post', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.post')</a></div>
        <div id="profiles"><a href="{{URL::route('profiles', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.profiles')</a></div>
        <div id="posts"><a href="{{URL::route('posts', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.posts')</a></div>
        <div id="mail"><a href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.send') @lang('lang.mail')</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">

    <h1>@lang('lang.add') @lang('lang.profile')</h1>
    <form method="POST" action="{{ route('add-profile', ['lang' => App::getLocale()])}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder=@lang('lang.name')>
        <input type="file" name="photo" accept="image/png,image/jpeg">
        <button type="submit">@lang('lang.create') @lang('lang.profile')</button>
    </form>
</body>
</html>