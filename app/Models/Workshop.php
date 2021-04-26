<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{

    /**
     * Not Null Id Scope
     *
     * @param $query    object query object
     *
     * @return object
     **/
    public function scopeLive($query)
    {
        return $query->where('start','>=', DATE('Y-m-d'));
    }

}
