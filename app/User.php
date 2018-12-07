<?php

namespace App;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    // Detected OnLine Users
    public function isOnline(){
        return Cache::has('user-is-online-' . $this->id);
    }
    
    public function movies(){
        return $this->belongsToMany('App\Movie', 'watches');
    }
    
    public function reports(){
        return $this->hasMany('App\Report', 'reports');
    }
    public function news(){
        return $this->hasMany('App\News', 'news');
    }

    public function posts()
    {
        return $this->hasMany('App\News');
    }
    
}
