<?php

namespace App\Http\Controllers;

use App\User;
use App\FollowUser;
use Illuminate\Http\Request;

class FollowUserController extends Controller
{
    public function follow(User $user) {
        $follow = FollowUser::create([
            'following_user_id' => \Auth::user()->id,
            'followed_user_id' => $user->id,
        ]);
        return redirect('/users/'.$user->id);
    }

    public function unfollow(User $user) {
        $follow = FollowUser::where('following_user_id', \Auth::user()->id)->where('followed_user_id', $user->id)->first();
        $follow->delete();
        return redirect('/users/'.$user->id);
    }
    
}
