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
        // Carbon::setlocale('it');
        return Carbon::parse($value)->locale('it_IT')->calendar();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
