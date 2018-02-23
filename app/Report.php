<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable=[
      'start_time','end_time','content','user_id'
    ];

    protected $dates=[
        'start_time','end_time','created_at','updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
