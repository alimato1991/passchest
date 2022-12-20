<section>
    <div class="form">
        <form action="/" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <label for="name">Name:</label>
                <input type="text" id="entry_name" name="name" wire:model="name">
                @error('name')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <fieldset>
                <label for="email">Email/Userbane:</label>
                <input type="text" id="entry_email" name="email" wire:model="email">
                @error('email')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <fieldset>
                <label for="password">Password:</label>
                <input type="text" id="entry_password" name="password" wire:model="password">
                @error('password')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <fieldset>
                <label for="website">Website:</label>
                <input type="text" id="entry_website" name="website" wire:model="website">
                @error('website')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <fieldset>
                <label for="note">Note:</label>
                <textarea name="note" id="entry_note" cols="30" rows="10" wire:model="note"></textarea>
                @error('note')
                    <span class="validation">{{ $message }}</span>
                @enderror
            </fieldset>
            <div class="actions">
                <button class="btn btn-save" wire:click.prevent="update()">Update</button>
                <button class="btn btn-cancel" wire:click.prevent="cancel()">Cancel</button>
            </div>
        </form>
    </div>
</section>