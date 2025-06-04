<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Package;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function packages()
    {
        $packages = Package::all();
        return view('pages.packages', compact('packages'));
    }

    public function comments()
    {
        $comments = Comment::with('user')->where('is_approved', true)->latest()->get();
        return view('pages.comments', compact('comments'));

    }

}
