<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Profile;

class BlogController extends Controller
{
    public function index($lang) {
        $posts = Post::all();
        App::setlocale($lang);

        return view('blog.index')->with(['posts'=>$posts]);
    }

    public function store(Request $request) {
        $profileId = $request->profile_id;
        $profile = Profile::find($profileId);
        if ($profile == null) {
            return response(['message' => 'profile not found'], 404);
        }

        else {
            Post::create([
                'title' => $request->title,
                'body' => $request->body,
                'profile_id' => $request->profile_id
            ]);
        }

        return back();
    }
}
