<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
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

    /**
     * Relation with Workshop
     *
     * @return object
     **/
    public function workshops() {
        return $this->hasMany('App\Models\Workshop','event_id')->where('start','>=', DATE('Y-m-d'));
    }



    static function fetchLiveEvent(){
        $events = Event::with('workshops')->has('workshops');
       // $events->Live();
        return $events->get();
    }

}
