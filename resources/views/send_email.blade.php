<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('email.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.send') @lang('lang.mail')</title>
</head>
<body>
    <div class="header">
        <div id="main"><a href="{{URL::route('main', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div id="add_profile"><a href="{{URL::route('add-profile', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.profile')</a></div>
        <div id="add_post"><a href="{{URL::route('add-post', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.post')</a></div>
        <div id="profiles"><a href="{{URL::route('profiles', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.profiles')</a></div>
        <div id="posts"><a href="{{URL::route('posts', ['lang' => App::getLocale()])}}">@lang('lang.send') @lang('lang.mail')</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">
    
    <h1>@lang('lang.send_me')</h1>
    <form method="POST" action="{{ route('send_mail', ['lang' => App::getLocale()])}}">
        @csrf
        <input type="text" name="sender" placeholder=@lang('lang.sender')>
        <input type="text" name="message" placeholder=@lang('lang.message')>
        <input type="submit" name="send" value=@lang('lang.send')>
    </form>
</body>
</html>