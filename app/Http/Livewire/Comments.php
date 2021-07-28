<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'name' => 'Ahmed',
            'created_at' => '3 min ago',
            'body' => 'this is old Comment'
        ]
    ];

    public $newComment;
    public function addComment(){
        array_unshift($this->comments, [
            'name' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'body' => 'this is new Comment'
        ]);
        $this->newComment = "";
        // $this->comments[] = [
        //     'name' => 'khaled',
        //     'created_at' => '5 min ago',
        //     'body' => 'this is new Comment'
        // ];
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
