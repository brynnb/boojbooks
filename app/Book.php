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
        //Handle input both from Carbon object at seeding and also text input at user creation
        if (is_string($date)) {
            $this->attributes['date_publication'] = date("Y-m-d", strtotime($date));
        } else {
            $this->attributes['date_publication'] = $date;
        }
    }

    //Make date prettier and exclude empty timestamp
    public function getDatePublicationAttribute($date)
    {
        return date("m-d-Y", strtotime($date));
    }
}
