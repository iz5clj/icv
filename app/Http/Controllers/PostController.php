<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePostsRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->with('user')->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', [
            'post' => new Post,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostsRequest $request)
    {
        $post = new Post;
        $time = time();
        
        // Is there a file in original?
        if ($request->hasFile('original')) {

            // detect type of file
            $mime = $request->original->getMimeType();

            if (preg_match('/\bvideo\b/', $mime)) {
                $post->type = 3; //video
            } elseif (preg_match('/\baudio\b/', $mime)) {
                $post->type = 2; //audio
            } elseif (preg_match('/\bimage\b/', $mime)) {
                $post->type = 1; //image
            } else {
                $post->type = 99; //unknown
            }

            // elaborate original image or video or audio
            $original = $request->file('original');
            $filename = $time . '-' . $original->getClientOriginalName();
            $post->original = $filename;
            if ($post->type === 1) {
                $image = Image::make($original);
                Storage::disk('uploads')->put('original/' . $filename, $image->stream());
            } else {
                $path = $original->storeAs('original', $filename, 'uploads');
            }
        }

        // Is there a link to a video?
        if($request->filled('link')) {
            $post->link = $request->link;
            $post->type = 4;
        }

        // elaborate thumb to be displayed if present
        if ($request->hasFile('thumb_img')) {
            $thumb = $request->file('thumb_img');
            $image_thumb = Image::make($thumb)->resize(180, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $filename_thumb = $time . '-' . $thumb->getClientOriginalName();
            Storage::disk('uploads')->put('original/thumb/' . $filename_thumb, $image_thumb->stream());
            $post->thumb_img = $filename_thumb;
        }

        // description
        $post->description = $request->description;

        // is published
        $request->is_published ? $post->is_published = 1 : $post->is_published = 0;

        // the publisher
        $post->publisher = auth()->user()->id;

        // the ip
        $post->ip = $request->ip();

        // save in the database
        $post->save();

        if ($request->has('submitAndAdd')) {
            return back()->with('success', 'Post added correctly');
        }
        return redirect()->route('post.index')->with('success', 'Post added correctly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return redirect()->route('post.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostsRequest $request, Post $post)
    {
        return $post;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return back()->with('success', __('m.post deleted'));
    }
}
