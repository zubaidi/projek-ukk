<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index() {
        return view('images');
    }

    // upload image
    public function upload(Request $request) {
        // validasi request
        $request->validate([
            'image' => 'required | max:2048'
        ]);
        // new object
        $images = new Images();
        // simpan ke storage
        $images->path = $request->file('image')->store('images', 'public');
        $images->save();
        return back()->with('success', 'Image uploaded successfully.');
    }
}
