<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->follow($id);

        return back();
    }
    

    public function destroy($id)
    {
        \Auth::user()->unfollow($id);

        return back();
    }
}
