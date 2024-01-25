<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::check()) {

            $user = Auth::user();

            

            Post::create([

                'titulo' => $request->titulo,
                'extracto' => $request->extracto,
                'contenido_post' => $request->contenido_post,
                'acceso' => $request->acceso,
                'caducable' => $request->caducable,
                'comentable' => $request->comentable,
                'user_id' => $request->user_id

            ]);

        }

        return redirect()->route('user.index')->with('success', 'Post created');
    }

    public function index(Request $request){

        if ($request->has('filter')) {
            if ($request->filter == 'all') {
                $posts = Post::where('acceso', 'publico')->get();
            } elseif ($request->filter == 'mine') {
                $posts = Post::where('user_id', Auth::user()->id)->get();
            }
        } else {
            $posts = Post::where('user_id', Auth::user()->id)->get();
        }

        return view('user.index',compact('posts'));

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


}
