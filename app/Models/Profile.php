<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
