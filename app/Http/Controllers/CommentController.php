<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
            'is_approved' => false, // čeka odobrenje od str admina
        ]);

        return redirect()->route('public.comments')->with('message', 'Hvala Vam na iskrenom feedback-u.');
    }
}



