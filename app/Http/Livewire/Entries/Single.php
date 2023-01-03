<?php

namespace App\Http\Livewire\Entries;

use App\Models\Entry;
use Livewire\Component;

class Single extends Component
{
    public $showEntry;
    protected $listeners = ['showSingle'];

    public function showSingle(Entry $entry)
    {  
        $this->showEntry = $entry;
    }
}
