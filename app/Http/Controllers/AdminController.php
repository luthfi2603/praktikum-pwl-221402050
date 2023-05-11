<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.dashboard');
    }

    public function anime(){
        return view('admin.anime');
    }

    public function fisika(){
        return view('admin.fisika');
    }

    public function senyawa(){
        return view('admin.senyawa');
    }

    public function lagu(){
        return view('admin.lagu');
    }

    public function game(){
        return view('admin.game');
    }

    public function postingan(){
        $posts = Post::select('title', 'excerpt', 'content', 'image', 'id')->get();
        // dd($posts);
        return view('admin.postingan', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_post(){
        return view('admin.create_post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_post(Request $request){
        $validate = $request->validate([
            'title'     => 'required|min:5|max:100',
            'excerpt'   => 'required|min:20|max:150',
            'content'   => 'required|min:50|max:255',
            'image'     => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);

        $new_post = new Post;
        $new_post->title        = $request->title;
        $new_post->excerpt      = $request->excerpt;
        $new_post->content      = $request->content;
        $new_post->author_id    = $request->author_id;

        if($request->hasFile('image')){
            // define image location in local path
            $location = public_path('/assets2/img');

            // membuat nama gambar baru agar tidak duplikat
            $namaFile = $request->file('image')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            // ambil file image dan simpan ke local server
            $request->file('image')->move($location, $namaFileBaru);

            // simpan nama file di database
            $new_post->image = $namaFileBaru;
        }

        $new_post->save();

        // dd("Success");
        return redirect('/admin/postingan')->with('status', "Postingan Berhasil Ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_post($id){
        $post = Post::find($id);
        // dd($post);
        return view('admin.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_post(Request $request, $id){
        $post = Post::find($id);
        $validate = $request->validate([
            'title'     => 'required|min:5|max:100',
            'excerpt'   => 'required|min:20|max:150',
            'content'   => 'required|min:50|max:255',
            'image'     => 'image|mimes:jpeg,jpg,png|max:4096'
        ]);

        $post->title        = $request->title;
        $post->excerpt      = $request->excerpt;
        $post->content      = $request->content;
        $post->author_id    = $request->author_id;

        if($request->hasFile('image')){
            // define image location in local path
            $location = public_path('/assets2/img');

            // membuat nama gambar baru agar tidak duplikat
            $namaFile = $request->file('image')->getClientOriginalName();
            $namaFileBaru = substr(uniqid(), 5, 5);
            $namaFileBaru .= '_';
            $namaFileBaru .= $namaFile;

            // ambil file image dan simpan ke local server
            $request->file('image')->move($location, $namaFileBaru);

            // simpan nama file di database
            $post->image = $namaFileBaru;
        }

        $post->save();

        return redirect('/admin/postingan')->with('update_status', "Postingan Berhasil Diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_post($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/admin/postingan')->with('delete_status', "Postingan Berhasil Dihapus!");
    }
}