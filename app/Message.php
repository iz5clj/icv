<?php

namespace App;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'text'];

    protected $dates = [
        'updated'
    ];

    public function getUpdatedAttribute($value) {
        return Carbon::parse($value)->format('d/m/Y');
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
