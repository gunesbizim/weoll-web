<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = config('content.weoll-posts');
        $media_source = $data['image_path'];
        $data = collect($data['medias'])->paginate(6);
        // dd($data);

        return view('pages.blog.index', compact('data', 'media_source'));
    }
    public function show($id)
    {
        $data = arrayToObject(config("content.weoll-posts.medias.{$id}"));
        // dd($data);
        return view('pages.blog.show', compact('data'));
    }
}
