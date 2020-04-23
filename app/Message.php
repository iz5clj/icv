<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['name', 'text'];

    protected $dates = [
        'updated'
    ];

    public function getUpdatedAttribute($value) {
        return Carbon::parse($value)->format('d/m/Y - h:m:s');
    }

}
