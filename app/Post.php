<?php

namespace App;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getUpdatedAtAttribute($value) {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
