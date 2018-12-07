<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Support\Period;

class Movie extends Model
{

    use Viewable;
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    use Sluggable;
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function users(){
        return $this->belongsToMany('App\User', 'watches');
    }
    
    
    public function reports(){
        return $this->hasMany('CyrildeWit\EloquentViewable\View', 'reports');
    }

    public function getMostViewedWeek(){
        return $this->getViews(Period::pastDays(7));
    }
}
