<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('blog/blog.css') }}">
    <script src="{{ asset('blog/blog.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('lang.blog')</title>
</head>
<body>
    <div class="header">
        <div id="main"><a href="{{URL::route('main', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div id="add_profile"><a href="{{URL::route('add-profile', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.profile')</a></div>
        <div id="add_post"><a href="{{URL::route('add-post', ['lang' => App::getLocale()])}}">@lang('lang.add') @lang('lang.post')</a></div>
        <div id="profiles"><a href="{{URL::route('profiles', ['lang' => App::getLocale()])}}">@lang('lang.all') @lang('lang.profiles')</a></div>
        <div id="mail"><a href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.send') @lang('lang.mail')</a></div>
    </div>
    <hr size="2px" width="90%" color="#210b2c">
    
    <h1>@lang('lang.all') @lang('lang.posts')</h1>
    <table class="posts">
    <tr>
        <th>@lang('lang.post') @lang('lang.id')</th>
        <th>@lang('lang.profile') @lang('lang.id')</th>
        <th>@lang('lang.profile') @lang('lang.name')</th>
        <th>@lang('lang.profile') @lang('lang.photo')</th>
        <th>@lang('lang.post') @lang('lang.title')</th>
        <th>@lang('lang.post') @lang('lang.body')</th>
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