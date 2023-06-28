<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required',
            'song_id' => 'required|exists:songs,id',
        ]);

        $comment = new Comment();
        $comment->content = $validatedData['content'];
        $comment->song_id = $validatedData['song_id'];
        $comment->user_id = Auth::id(); // Assign the authenticated user's ID
        $comment->save();

        return redirect()->back()->with('success', 'Comment created successfully.');
    }

    public function destroy(Comment $comment)
    {
        // Check if the authenticated user owns the comment
        if (Auth::id() === $comment->user_id) {
            $comment->delete();
            return redirect()->back()->with('success', 'Comment deleted successfully.');
        }

        return redirect()->back()->with('error', 'Unauthorized action.');
    }
}
