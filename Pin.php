<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
		/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image'];

    public function owner(){
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * A pin can have many favorites
     *
     */
    public function favorites()
    {
        return $this->belongsToMany('App\Models\User', 'favorites')->withTimestamps();
    }

    public function getImage($width = null){
        if(!is_null($width)){
            $width = "?w=" . $width;
        }

        return config('upload_paths.pins') . $this->image . $width;
    }

}
