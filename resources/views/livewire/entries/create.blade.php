<section class="forms-section">
    <x-loader></x-loader>
    <div class="add-form">
        <form wire:submit.prevent="store">
            @csrf
            <div class="form__input">
                <label for="form__name">Name:</label>
                <input type="text" id="form__label" name="name" wire:model="name">
                <div class="form__icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                @error('name')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="form__email">Email/Username:</label>
                <input type="text" id="form__email" name="email" wire:model="email">
                <div class="form__icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                @error('email')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="form__password">Password:</label>
                <input type="text" id="form__password" name="password" wire:model="password">
                <div class="form__icon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                @error('password')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="form__website">Website:</label>
                <input type="text" id="form__website" name="website" wire:model="website">
                <div class="form__icon">
                    <i class="fa-solid fa-link"></i>
                </div>
                @error('website')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__input">
                <label for="form__note">Note:</label>
                <textarea name="note" id="form__note" cols="30" rows="10" wire:model="note"></textarea>
                @error('note')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </div>
            <div class="form__actions">
                <button class="form__button" type="submit">Save</button>
            </div>
        </form>
    </div>
</section>