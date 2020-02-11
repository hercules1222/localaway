<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Survey extends Model
{
    protected $fillable = ['person_id', 'answer_id', 'input_field', 'description'];
    
    public function survey_person()
    {
        return $this->hasOne('App\Survey_person');
    }

    public function answer()
    {
        return $this->hasOne('App\Answer');
    }
}
