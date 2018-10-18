<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class url extends Model
{
    public $timestamps  = false;
    protected $fillable = ['url', 'shortened'];

    static function getUniqueShortUrl()
    {
        $shortened = str_random(5);

        if(self::whereShortened($shortened)->count()!= 0)
        {
            return self::getUniqueShortUrl(); //si on trouve ce qui a ete genere dans notre db alors rappel la function et regenere
        }
        return $shortened;
    }
}
