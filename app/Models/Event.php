<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     * Relation with Workshop
     *
     * @return object
     **/
    public function workshops() {
        return $this->hasMany('App\Models\Workshop','event_id')->scopes('Live');
    }



    static function fetchLiveEvent(){
        $events = Event::with('workshops')->has('workshops');
        return $events->get();
    }

}
