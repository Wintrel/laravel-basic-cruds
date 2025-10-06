<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

use function PHPUnit\Framework\returnSelf;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::all();
        return view('comments.index');
    }

    public function create() {
        return view("comments.create");
    }

    public function store(Request $request) {
        Comment::create([
            'content' => $request["content"]
        ]);

        return redirect('/comments');
    }

    public function delete($id){
        $comments = Comment::destroy($id);
        return view("comments/delete");
    }
}
