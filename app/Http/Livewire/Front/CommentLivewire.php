<?php

namespace App\Http\Livewire\Front;

use App\Models\Comment;
use Livewire\Component;

class CommentLivewire extends Component
{
    public $body, $post;
    public function render()
    {
        return view('livewire.front.comment-livewire');
    }

    public function addComment(){
        $this->validate([
            'body' => 'required|min:5',
        ]);
        $added = Comment::create([
            'body' => $this->body,
            'post_id' => $this->post->id,
            'user_id' => auth()->user()->id,
        ]);
        $this->body = null;
        if($added){
            $this->dispatchBrowserEvent('toast', ['type' => 'success', 'message' => 'Comment Added Successfully!']);
            return;
        }
        $this->dispatchBrowserEvent('toast', ['type' => 'error', 'message' => 'Failed to add Comment! Please try again.']);
    }
}
