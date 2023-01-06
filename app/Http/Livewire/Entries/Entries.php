<?php

namespace App\Http\Livewire\Entries;

use App\Models\User;
use App\Models\Entry;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Entries extends Component
{
    public $entries, $entry, $name, $email, $password, $website, $note, $entry_id;
    public $updateMode = false;
    public $singleMode = false;
    public $addNew = false;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'website' => 'required',
        'note' => 'required'
    ];

    /**
     * Get all the saved account details
     */
    public function render()
    {
        $this->entries = Auth::user()->entryList;
        return view('livewire.entries.entries');
    }

    /**
     * Reset all the fields after Save or Cancel
     */
    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->website = '';
        $this->note = '';
    }

    public function addNew()
    {
        $this->addNew = true;
        $this->singleMode = false;
    }

    /**
     * Create a new account details 
     */
    public function store()
    {
        $this->validate();

        Entry::create([
            'user_id' => Auth::user()->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'website' => $this->website,
            'note' => $this->note
        ]);

        $this->addNew = false;

        session()->flash('message', 'Added');
        $this->resetInput();
    }

    /**
     * Display a single saved account details by ID 
     */
    public function show($id)
    {
        $entry = Entry::findOrFail($id);
        $this->entry = $entry;
        $this->singleMode = true;
        $this->updateMode = false;
        $this->addNew = false;
        $this->emit('showSingle', $entry->id);
    }

    /**
     * Edit a single saved account details by ID 
     */
    public function edit($id)
    {
        $entry = Entry::findOrFail($id);
        $this->name = $entry->name;
        $this->email = $entry->email;
        $this->password = $entry->password;
        $this->website = $entry->website;
        $this->note = $entry->note;
        $this->updateMode = true;
        $this->singleMode = false;
    }

    /**
     * Cancel Edit or Create
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->addNew = false;
        $this->singleMode = true;
        $this->resetInput();
    }

    /**
     * Apply new changes to an account detail
     */
    public function update()
    {
        $this->validate();

        $user_id = Auth::user()->id;

        $entry = Entry::where('id', $user_id);
    
        $entry->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'website' => $this->website,
            'note' => $this->note
        ]);

        $this->updateMode = false;
        $this->singleMode = true;

        session()->flash('message', 'Updated');
        $this->resetInput();
    }

    /**
     * Delete a single account detail by default
     */
    public function delete($id)
    {
        $entry = Entry::findOrFail($id);
        $entry->delete();
        $this->singleMode = false;
    }
}
