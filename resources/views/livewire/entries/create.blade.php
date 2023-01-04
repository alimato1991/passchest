<div>
    <x-loader></x-loader>
    <div class="add-form">
        <form action="/" method="POST" wire:submit.prevent="store">
            @csrf
            <div class="form__input">
                <label for="name">Name:</label>
                <input type="text" id="form__label" name="name" wire:model.defer="name">
                <div class="form__icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <span class="validation">@error('name'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="email">Email/Username:</label>
                <input type="text" id="form__email" name="email" wire:model.defer="email">
                <div class="form__icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <span class="validation">@error('email'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="password">Password:</label>
                <input type="text" id="form__password" name="password" wire:model.defer="password">
                <div class="form__icon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <span class="validation">@error('password'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="website">Website:</label>
                <input type="text" id="form__website" name="website" wire:model.defer="website">
                <div class="form__icon">
                    <i class="fa-solid fa-link"></i>
                </div>
                <span class="validation">@error('website'){{ $message }}@enderror</span>
            </div>
            <div class="form__input">
                <label for="note">Note:</label>
                <textarea name="note" id="form__note" cols="30" rows="10" wire:model.defer="note"></textarea>
                <span class="validation">@error('note'){{ $message }}@enderror</span>
            </div>
            <div class="form__actions">
                <button class="form__button" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>