<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public static function getBySlug($slug)
    {
        return Profile::where([
            'slug' => $slug
        ])->first();
    }
}
