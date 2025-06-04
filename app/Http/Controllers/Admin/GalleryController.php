<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryImage::latest()->get();
        return view('admin.gallery.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('gallery_images', 'public');

        GalleryImage::create([
            'path' => $path,
            'is_visible' => true,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Slika uspešno dodata.');
    }

    public function destroy(GalleryImage $galleryImage)
    {
        Storage::disk('public')->delete($galleryImage->path);
        $galleryImage->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Slika obrisana.');
    }

    public function toggleVisibility(GalleryImage $galleryImage)
    {
        $galleryImage->is_visible = !$galleryImage->is_visible;
        $galleryImage->save();

        return redirect()->route('admin.gallery.index')->with('success', 'Vidljivost slike je ažurirana.');
    }
}
