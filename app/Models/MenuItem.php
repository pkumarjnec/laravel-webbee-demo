<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    /**
     * Relation with Self
     *
     * @return object
     **/
    public function children() {
        return $this->hasMany('App\Models\MenuItem','parent_id');
    }

    /**
     * Search Menu
     *
     * @return object
     */
    static function search(){
        $events = MenuItem::with('children')->has('children')->get();
        return $events;
    }

}
