<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reports';
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function movie()
    {
        return $this->belongsTo('App\Movie', 'movie_id');
    }
}
