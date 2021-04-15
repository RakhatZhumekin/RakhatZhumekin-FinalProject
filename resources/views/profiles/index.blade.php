<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('profile/profile.css') }}">
    <script src="{{ asset('profile/profile.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.profiles')</title>
</head>
<body>
    <div class="header">
        <div id="main"><a href="{{URL::route('main', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div id="add_profile"><a href="{{URL::route('add-profile', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.profile')</a></div>
        <div id="add_post"><a href="{{URL::route('add-post', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.post')</a></div>
        <div id="posts"><a href="{{URL::route('posts', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.posts')</a></div>
        <div id="mail"><a href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.send') @lang('lang.mail')</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">
    
    <h1>@lang('lang.all') @lang('lang.profiles')</h1>
    <table class="profiles">
    <tr>
        <th>@lang('lang.profile') @lang('lang.id')</th>
        <th>@lang('lang.profile') @lang('lang.name')</th>
        <th>@lang('lang.profile') @lang('lang.photo')</th>
    </tr>
    @forelse ($profiles as $profile)
            <tr class="profile_row">
                <td>{{$profile->id}}</td>
                <td>{{$profile->name}}</td>
                <td><img src="{{$profile->photo}}" width="100px" height="50px"></td>
            </tr>
    @empty
        <p id="nothing">There are no profiles registered.</p>
    @endforelse
    </table>
</body>
</html>