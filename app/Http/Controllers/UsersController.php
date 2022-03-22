<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $auths = Auth::user();
        return view('users/index', [ 'user' => $user ]);
    }
    
    public function userEdit(User $user)
    {
        return view('users/edit')->with(['user' => $user]);
    }
    
    public function show(User $user)
    {
        return view('users/show')->with(['user' => $user]);
        
    }
        public function update(Request $request, User $user)
    {
        $input_user = $request['user'];
        $user->fill($input_user)->save();
        
        return redirect()->route('mypage', ['user' => Auth::id()]);
    }
}
