<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Comment;
class CommentController extends Controller {

    public function createComment(Request $request) {
        $nid = $request->input('nid');
        $aid = $request->has('aid') ? $request->input('aid') : 0;

        $user = Auth::user();

        $comment = new Comment();
        $comment->lid = $nid;
        $comment->uid = $user->id;
        $comment->aid = $aid;
        $comment->text = strip_tags($request->input('text'));
        $comment->save();

        return redirect("/news/$nid#comment$comment->id");
    }

}
