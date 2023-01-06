<?php

namespace App\Http\Livewire\Notes;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notes extends Component
{
    public $notes, $note, $title, $note_text, $note_id;
    public $updateMode = false;
    public $singleMode = false;
    public $addNew = false;

    protected $rules = [
        'title' => 'required',
        'note' => 'required'
    ];
    /**
     * Get all secure notes
     */
    public function render()
    {
        $this->notes = Auth::user()->noteList;
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
        $this->validate();

        Note::create([
            'user_id' => Auth::user()->id,
            'title' => $this->title,
            'note' => $this->note_text
        ]);

        $this->addNew = false;

        session()->flash('message', 'Added');
        $this->resetInput();
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
        $this->addNew = false;
        $this->emit('showSingle', $note->id);
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
        $this->validate();

        $user_id = Auth::user()->id;

        $note = Note::where('id', $user_id);

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
        $note = Note::find($id);
        $note->delete();
        $this->singleMode = false;
        $this->render();
    }
}
