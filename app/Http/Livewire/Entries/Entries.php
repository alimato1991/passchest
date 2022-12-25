<?php

namespace App\Http\Livewire\Entries;

use App\Models\Entry;
use Livewire\Component;

class Entries extends Component
{
    public $entries, $name, $email, $password, $website, $note, $entry_id;
    public $updateMode = false;

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

        session()->flash('message', 'Added');
        $this->resetInput();
    }

    /**
     * Edit a single saved account details by ID 
     */
    public function edit($id)
    {
        $entry = Entry::findOrFail($id);
        $this->entry_id = $id;
        $this->name = $entry->name;
        $this->email = $entry->email;
        $this->password = $entry->password;
        $this->website = $entry->website;
        $this->website = $entry->note;

        $this->updateMode = true;
    }

    /**
     * Cancel Edit or Create
     */
    public function cancel()
    {
        $this->updateMode = false;
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

        session()->flash('message', 'Updated');
        $this->resetInput();
    }

    /**
     * Delete a single account detail by default
     */
    public function delete($id)
    {
        Entry::find($id)->delete();
        session()->flash('message', 'Deleted');
    }
}
