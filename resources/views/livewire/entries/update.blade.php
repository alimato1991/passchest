<div class="forms-section">
    <x-loader></x-loader>
    <div class="update-form">
        <form action="/" method="POST" wire:submit.prevent="update">
            @csrf
            <div class="form__input">
                <label for="name">Name:</label>
                <input type="text" id="entry_name" name="name" wire:model.defer="name">
                <div class="form__icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="validation">@error('name'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="email">Email/Userbane:</label>
                <input type="text" id="entry_email" name="email" wire:model.defer="email">
                <div class="form__icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <span class="validation">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="password">Password:</label>
                <input type="text" id="entry_password" name="password" wire:model.defer="password">
                <div class="form__icon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <span class="validation">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="website">Website:</label>
                <input type="text" id="entry_website" name="website" wire:model.defer="website">
                <div class="form__icon">
                    <i class="fa-solid fa-link"></i>
                </div>
                <span class="validation">@error('website'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="note">Note:</label>
                <textarea name="note" id="entry_note" cols="30" rows="10" wire:model.defer="note">{{ $note }}</textarea>
                <span class="validation">@error('note'){{ $message }}@enderror</span>
            </div>
            <div class="form__actions">
                <button class="form__button" type="submit">Update</button>
                <button class="form__button cancel" wire:click.prevent="cancel">Cancel</button>
                {{-- <button class="form__button delete" wire:click.prevent="delete{{ $entries->id }}"><i class="fa-solid fa-trash"></i></button> --}}
            </div>
        </form>
    </div>
</div>