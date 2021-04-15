<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('blog/create.css') }}">
    <script src="{{ asset('blog/create.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.create') @lang('lang.post')</title>
</head>
<body>
    <div class="header">
        <div id="main"><a href="{{URL::route('main', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div id="add_profile"><a href="{{URL::route('add-profile', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.profile')</a></div>
        <div id="profiles"><a href="{{URL::route('profiles', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.profiles')</a></div>
        <div id="posts"><a href="{{URL::route('posts', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.posts')</a></div>
        <div id="mail"><a href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.send') @lang('lang.mail')</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">

    <h1>@lang('lang.add') @lang('lang.post')</h1>
    <form method="POST" action="{{ route('add-post', ['lang' => App::getLocale()])}}">
        @csrf
        <input type="text" name="title" placeholder=@lang('lang.title')>
        <input type="text" name="body" placeholder=@lang('lang.body') width="100px">
        <input type="number" name="profile_id" placeholder=@lang('lang.profile')@lang('lang.id')>
        <button type="submit">@lang('lang.create') @lang('lang.post')</button>
    </form>
</body>
</html>