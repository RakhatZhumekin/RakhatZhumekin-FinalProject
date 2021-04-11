<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['profile_id', 'title', 'body'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
