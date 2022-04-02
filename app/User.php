<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'goal_message', 'training_history',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
     // フォロワー→フォロー
    public function followUsers()
    {
        return $this->belongsToMany('App\User', 'follow_users', 'followed_user_id', 'following_user_id');
    }

    // フォロー→フォロワー
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follow_users', 'followed_user_id', 'following_user_id');
    }
    
    public function is_followed_by_auth_user()
    {
        $id = Auth::id();
        
        $follows = array();
        foreach($this->follows as $follow) {
          array_push($follows, $follow->id);
        }
        
        if (in_array($id, $follows)) {
          return true;
        } else {
          return false;
        }
    }

}
