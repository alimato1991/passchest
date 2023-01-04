<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Single extends Component
{
    public $singleNote; 
    protected $listeners = ['showSingle'];

    public function showSingle(Note $note)
    {
        $this->singleNote = $note;
    }
}