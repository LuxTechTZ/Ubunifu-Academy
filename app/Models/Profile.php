<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Fillable fields for a Profile.
     *
     * @var array
     */
    protected $fillable = [
        'theme_id',
        'location',
        'bio',
        'twitter_username',
        'github_username',
        'user_profile_bg',
        'avatar',
        'avatar_status',
    ];

    protected $casts = [
        'theme_id' => 'integer',
    ];

    /**
     * A profile belongs to a user.
     *
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Profile Theme Relationships.
     *
     * @var array
     */
    public function theme()
    {
        return $this->hasOne('App\Models\Theme');
    }

    public function college()
    {
        return $this->belongsTo('App\Models\Chuo\Colege','college_id','id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Chuo\Course');
    }

     public function semester()
    {
        return $this->belongsTo('App\Models\Chuo\Semester');
    }


    public function yos()
    {
        return $this->belongsTo('App\Models\Chuo\ClassYear');
    }

}
