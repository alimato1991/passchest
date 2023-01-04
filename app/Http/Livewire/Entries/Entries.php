<?php

namespace App\Http\Livewire\Entries;

use App\Models\Entry;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Entries extends Component
{
    public $entries, $entry, $name, $email, $password, $website, $note, $entry_id;
    public $updateMode = false;
    public $singleMode = false;
    public $addNew = false;

    /**
     * Get all the saved account details
     */
    public function render()
    {
        $this->entries = Entry::all();
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
        $newEntry = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'website' => 'required',
            'note' => 'required'
        ]);

        Entry::create($newEntry);

        $this->addNew = false;

        session()->flash('message', 'Added');
        $this->resetInput();
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
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'website' => 'required',
            'note' => 'required'
        ]);

        $entry = Entry::find($this->entry_id);
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
