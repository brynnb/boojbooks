<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'date_publication'];
    protected $dates = ['date_publication'];
    use SoftDeletes;

    //Used to convert a date only (no time) user input to a proper Carbon date input
    public function setDatePublicationAttribute($date)
    {
        $this->attributes['date_publication'] = date("Y-m-d",strtotime($date));
    }
}
