<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Profile;
use App\Models\Post;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/post/{post_id}', function($post_id) { // returns the profile of the post author
//     $post = Post::find($post_id);

//     return $post->profile;
// });

Route::get('/main/{lang}', function($lang) {
    App::setlocale($lang);
    return view('main');
}) -> name('main');

Route::get('/profiles/{lang}', [ProfileController::class, 'index']) -> name('profiles');

Route::get('/posts/{lang}', [BlogController::class, 'index']) -> name('posts');

Route::get('/profile/create/{lang}', function($lang) {
    App::setlocale($lang);
    return view('profiles.create');
}) -> name('add-profile');

Route::post('/profile/create/{lang}', [ProfileController::class, 'store']) -> name('add-profile');

Route::get('/post/create/{lang}', function($lang) {
    App::setlocale($lang);
    return view('blog.create');
}) -> name('add-post');

Route::post('/post/create/{lang}', [BlogController::class, 'store']) -> name('add-post');

Route::get('/mail/send/{lang}', [MailController::class, 'index']) -> name('send-mail');

Route::post('/mail/send/{lang}', [MailController::class, 'send']) -> name('send_mail');