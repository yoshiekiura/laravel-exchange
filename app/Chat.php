<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{

    protected $dates = ['date'];

    public function messages() {
        return $this->hasMany('App\Message', 'chat_id', 'chat_id');
    }

    public function author() {
        return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function recipient() {
        return $this->belongsTo('App\User', 'recipient_id', 'id');
    }

}
