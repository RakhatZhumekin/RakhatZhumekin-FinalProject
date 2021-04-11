<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = ['name', 'photo'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
