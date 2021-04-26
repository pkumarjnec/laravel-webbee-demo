<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    /**
     * Relation with Workshop
     *
     * @return object
     **/
    public function children() {
        return $this->hasMany('App\Models\MenuItem','parent_id');
    }

    static function search(){
        $events = MenuItem::with('children')->has('children')->get();
        return $events;
    }

}
