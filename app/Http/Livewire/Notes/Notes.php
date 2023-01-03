<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Notes extends Component
{
    public $notes, $note, $title, $note_text, $note_id;
    public $updateMode = false;
    public $singleMode = false;
    public $addNew = false;

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

    public function addNew()
    {
        $this->addNew = true;
        $this->updateMode = false;
        $this->singleMode = false;
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

        $this->addNew = false;

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
        $this->singleMode = false;
    }

    /**
     * Display a single secure note
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        $this->note = $note;
        $this->updateMode = false;
        $this->singleMode = true;
        $this->emit('showSingle', $note->id);
    }

    /**
     * Cancel edit or create
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->singleMode = true;
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
            'note' => $this->note_text
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
