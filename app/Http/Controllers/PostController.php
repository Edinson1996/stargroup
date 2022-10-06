<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderByDesc('created_at')->get();
        return view('panel.posts.index', compact('posts'));
    }

    public function table()
    {
        return datatables()
            ->eloquent(Post::query()
                ->orderByDesc('created_at'))
            ->addColumn('image', '<img width="120px" src="{{asset($image ? "posts/$image" : "posts/default.jpg")}}"></img>')
            ->addColumn('actions', 'panel.posts._actions')
            ->rawColumns(['image', 'actions'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('panel.posts.create', ['post' => new Post(), 'categories' => CategoryPost::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'title' => ['required', 'unique:posts,title'],
            'description' => 'required',
            'body' => 'required',
            'idea' => 'nullable',
            'image' => 'required',
            'category_id' => 'required',
            'video' => 'nullable',
            'archivo' => 'nullable'
        ]);
        $path = public_path() . '/posts/';
        $fileName = time() . $request->image->getClientOriginalName();
        $image = \Image::make($request->image)->fit(1350, 850)->save($path . $fileName);
        $data["image"] = $fileName;
        $data["slug"] = Str::slug($data["title"]);

        // Archivos//
        $fileNameWithTheExtension = request('archivo')->getClientOriginalName();
        $filename = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
        $extension = request('archivo')->getClientOriginalExtension();
        $newFileName = $filename . '_' . time() . '.' . $extension;
        $path = request('archivo')->storeAs('public/archivo/', $newFileName);
        // Fin Archivos//
        $data["archivo"] = $newFileName;

        Post::create($data);
        return redirect(route('posts.index'))->with('success', 'Acción Realizada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('panel.posts.edit', ['post' => $post, 'categories' => CategoryPost::get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $data = $request->validate([
            'title' => ['required', Rule::unique('posts')->ignore($post)],
            'description' => 'required',
            'body' => 'required',
            'idea' => 'nullable',
            'image' => 'nullable',
            'video' => 'nullable',
            'category_id' => 'required'
        ]);
        if ($request->image != null) {
            $path = public_path() . '/posts/';
            $fileName = time() . $request->image->getClientOriginalName();
            $oldFileName = $post->image;
            $image = \Image::make($request->image)->fit(1350, 850)->save($path . $fileName);
            $data["image"] = $fileName;
            try {
                unlink($path . $oldFileName);
            } catch (\Exception $e) {
            }
        }


        if ($request->archivo != null) {
            // Archivos//
            $fileNameWithTheExtension = request('archivo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithTheExtension, PATHINFO_FILENAME);
            $extension = request('archivo')->getClientOriginalExtension();
            $newFileName = $filename . '_' . time() . '.' . $extension;
            $path = request('archivo')->storeAs('public/archivo/', $newFileName);
            // Fin Archivos//
        }
        $data["archivo"] = $newFileName;

        $data["slug"] = Str::slug($data["title"]);
        $post->update($data);
        return redirect(route('posts.index'))->with('success', 'Acción Realizada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return json_encode(null, 204);
    }
}
