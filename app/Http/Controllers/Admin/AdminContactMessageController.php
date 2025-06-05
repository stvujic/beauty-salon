<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;

class AdminContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.messages.index', compact('messages'));
    }

    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->is_read = true;
        $message->save();

        return redirect()->route('admin.messages.index')->with('success', 'Poruka označena kao pročitana.');
    }


}

