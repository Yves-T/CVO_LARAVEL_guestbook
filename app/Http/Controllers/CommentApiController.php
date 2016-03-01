<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentApiController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function store( Request $request )
    {
        return Comment::create($request->only('author', 'text'));
    }

    public function destroy( Comment $comment )
    {
        $comment->delete();
    }
}
