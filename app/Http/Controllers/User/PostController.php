<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\ImageService;
use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpLoadImageRequest;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\StorageAttributes;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->paginate(50);

        return view('user.post.index', compact('posts'));
    }

    public function create()
    {
        return view('user.post.create');
    }


    public function submission(Request $request)
    {
        $request->validate([
            'title' => ['string', 'max:50'],
            'description' => ['required', 'string', 'max:500'],
        ]);
        $imageFile = $request->image->store('public/images/');

        Post::create([
            'user_id' => Auth::id(),
            'description' => $request->description,
            'title' => $request->title,
            'sort_order' => $request->sort_order,
            'shop_id' => $request->shop_id,
            'image' => $imageFile,
        ]);

        return redirect()->route('user.post.index');
    }
}
