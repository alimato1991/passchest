<section class="forms-section">
    <x-loader></x-loader>
    <div class="update-form">
        <form wire:submit.prevent="update">
            @csrf
            <div class="form__input">
                <label for="name">Name:</label>
                <input type="text" id="entry_name" name="name" wire:model="name">
                <div class="form__icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                @error('name')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="email">Email/Userbane:</label>
                <input type="text" id="entry_email" name="email" wire:model="email">
                <div class="form__icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                @error('email')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="password">Password:</label>
                <input type="text" id="entry_password" name="password" wire:model="password">
                <div class="form__icon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                @error('password')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="website">Website:</label>
                <input type="text" id="entry_website" name="website" wire:model="website">
                <div class="form__icon">
                    <i class="fa-solid fa-link"></i>
                </div>
                @error('website')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="note">Note:</label>
                <textarea name="note" id="entry_note" cols="30" rows="10" wire:model="note">{{ $note }}</textarea>
                @error('note')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__actions">
                <button class="form__button" type="submit">Update</button>
                <button class="form__button cancel" wire:click.prevent="cancel">Cancel</button>
                {{-- <button class="form__button delete" wire:click.prevent="delete"><i class="fa-solid fa-trash"></i></button> --}}
            </div>
        </form>
    </div>
</section>