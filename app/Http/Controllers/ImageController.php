<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images/index', compact('images'));
    }

    public function create()
    {
        return view('images/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Image::create([
            'name' => $imageName,
            'path' => 'images/' . $imageName,
        ]);

        return redirect()->route('images/index')
                        ->with('success','Image uploaded successfully.');
    }
}
