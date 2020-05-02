<?php

namespace App\Http\Controllers;

use App\Post;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class FrontController extends Controller
{
    public function index()
    {
        $m1 = Message::where('name', 'm1')->first();
        $m2 = Message::where('name', 'm2')->first();

        $posts = Post::published()->get();

        return view('front.index', [
            'm1'           => $m1,
            'm2'           => $m2,
            'posts'        => $posts,
            'display_grid' => env('DISPLAY_GRID', false)
        ]);
    }

    public function upload(Request $request)
    {
        // first validate
        $messages = [
            'required' => 'E necessario scegliere un file.',
            'mimes'    => 'Il file che puoi inviare deve essere del tipo jpg gif png bmp',
            'max'      => 'Il file non può essere più grande di 2018 Kilobytes'
        ];
        $rules = [
            'original' => 'required|file|max:2048|mimes:jpeg,jpg,bmp,png,gif'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect('/#footer')->withErrors($validator);
        }

        // save the file
        $post = new Post;
        $time = time();
        
        $post->type = 1; //image

        $original = $request->file('original');
        $filename = $time . '-' . $original->getClientOriginalName();
        $post->original = $filename;
        $image = Image::make($original);
        Storage::disk('uploads')->put('original/' . $filename, $image->stream());

        $post->description = 'upload da publico';

        $request->is_published = 0;

        $post->publisher = 99;

        $post->ip = $request->ip();

        $post->save();

        // redirect with success message
        return redirect('/')->with('success', __('m.thank you upload file'));

    }
}
