<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'This is the Message.',
            'created_at' => '3 min ago',
            'creator' => 'Tovis Bratsburg'
        ]
    ];

    public $newComment;


    public function addComment()
    {
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Tovis Bratsburg'
        ]);
        $this->newComment = "";
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
