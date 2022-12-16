<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(int $id)
    {
        $thread = Thread::with(['topics', 'topics.user', 'topics.replies'])
            ->where('id', $id)
            ->first();

        return view('thread.index', compact('thread'));
    }
}
