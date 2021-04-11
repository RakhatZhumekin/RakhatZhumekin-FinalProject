<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index() {
        $profiles = Profile::all();

        return view('profiles.index')->with(['profiles'=>$profiles]);
    }
}
