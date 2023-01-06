<div>
    <x-loader></x-loader>
    <div class="add-form">
        <form action="/notes" wire:submit.prevent="store">
            @csrf
            <div class="form__input">
                <label for="title">Note Title:</label>
                <input type="text" id="title" name="title" wire:model.defer="title">
                <div class="form__icon">
                    <i class="fa-solid fa-bookmark"></i>
                </div>
                <span class="validation">@error('title'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="note">Note:</label>
                <textarea name="note" id="note_text" cols="30" rows="10" wire:model.defer="note"></textarea>
                <span class="validation">@error('note'){{ $message }}@enderror</span>
            </div>
            <div class="form__actions">
                <button class="form__button" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>