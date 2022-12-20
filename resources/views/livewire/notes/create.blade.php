<section>
    <div class="form">
        <form action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <label for="title">Note Title:</label>
                <input type="text" id="title" name="title" wire:model="title">
                @error('title')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <fieldset>
                <label for="note_text">Note:</label>
                <textarea name="note_text" id="note_text" cols="30" rows="10" wire:model="note_text"></textarea>
                @error('note_text')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <div class="actions">
                <button class="btn btn-save" wire:click.prevent="store()">Save</button>
            </div>
        </form>
    </div>
</section>