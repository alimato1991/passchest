<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Notes extends Component
{
    public $notes, $title, $note_text, $note_id;
    public $updateMode = false;

    /**
     * Get all secure notes
     */
    public function render()
    {
        $this->notes = Note::all();
        return view('livewire.notes.notes');
    }

    /**
     * Reset all the fields after Save or Cancel
     */
    public function resetInput()
    {
        $this->title = '';
        $this->note_text = ''; 
    }

    /**
     * Create a new secure note
     */
    public function store()
    {
        $newNote = $this->validate([
            'title' => 'required',
            'note' => 'required'
        ]);

        Note::create($newNote);

        $this->updateMode = true;

        session()->flash('message', 'Added');
        $this->resetInput();
    }

    /**
     * Edit a single secure note
     */
    public function edit($id)
    {
        $note = Note::findOrFail($id);
        $this->note_id = $id;
        $this->title = $note->title;
        $this->note_text = $note->note;

        $this->updateMode = true;
    }

    /**
     * Cancel edit or create
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }

    /**
     * Apply new changes to a secure note
     */
    public function update()
    {
        $this->validate([
            'title' => 'required',
            'note' => 'required'
        ]);

        $note = Note::find($this->note_id);
        $note->update([
            'title' => $this->title,
            'note' => $this->note
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Updated');
        $this->resetInput();
    }

    /**
     * Delete a secure note
     */
    public function delete($id)
    {
        Note::find($id)->delete();
        session()->flash('message', 'Removed');
    }
}
