<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class FavoriteController extends Controller
{
    public function store(Request $request, $id)
    {
        
        // User::all(Auth::user()->favorite($id));

        \Auth::user()->favorite($id);

        return back();
        // return redirect()->route('user.cart.index');
        
        
    }
    

    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);

        return back();
    }
}
