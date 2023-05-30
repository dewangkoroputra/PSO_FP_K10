<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request){
        return $request->file('file')->store('images');
    }

   /* referensi internet
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'file_name' => 'required',
            'material_type' => 'required',
            'material_description' => 'required',
            'upload_file' => 'required|file',
        ]);

        // Simpan data ke database
        $post = new Post;
        $post->file_name = $request->file_name;
        $post->material_type = $request->material_type;
        $post->material_description = $request->material_description;
        $post->upload_file = $request->file('upload_file')->store('uploads');
        $post->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Post created successfully!');


    }*/
}
