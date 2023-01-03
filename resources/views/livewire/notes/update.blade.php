<div class="forms-section">
    <x-loader></x-loader>
    <div class="update-form">
        <form action="/notes" wire:submit.prevent="update">
            @csrf
            <div class="form__input">
                <label for="note_title">Note Title:</label>
                <input type="text" id="note_title" name="title" wire:model.defer="title">
                <div class="form__icon">
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span class="validation">@error('title'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="note_text">Note:</label>
                <textarea name="note_text" id="note_text" cols="30" rows="10" wire:model.defer="note_text">{{ $note }}</textarea>
                <span class="validation">@error('note'){{ $message }}@enderror</span>
            </div>
            <div class="form__actions">
                <button class="form__button" type="submit">Update</button>
                <button class="form__button cancel" wire:click.prevent="cancel">Cancel</button>
            </div>
        </form>
    </div>
</div>