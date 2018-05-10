<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coding_question_language extends Model
{
    protected $table = 'coding_question_languages';
    protected $fillable = [
        'id','question_id', 'allowed_languages_id'
    ];

     public function questions()
	{ 
	    return $this->belongsTo('App\Question');
	} 
}
