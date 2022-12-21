<div class="form">
    <h2 class="form__title">Sign Up</h2>
    <form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form__input">
        <label for="name"></label>
        <input type="text" id="name" name="name" wire:model="name" placeholder="Full name">
        @error('name')
        <span class="validation">{{ message }}</span>
        @enderror
    </div>
    <div class="form__input">
        <label for="email"></label>
        <input type="email" id="email" name="email" wire:model="email" placeholder="Email">
        @error('email')
        <span class="validation">{{ message }}</span>
        @enderror
    </div>
    <div class="form__input">
        <label for="password"></label>
        <input type="password" id="password" name="password" wire:model="password" placeholder="Password">
        @error('password')
        <span class="validation">{{ message }}</span>
        @enderror
    </div>
    <button type="submit" class="form__button" wire:click.prevent="register()">Sign Up</button>
    <span class="form__switch">
        Already have an account? <a href="/login">Sign In</a> 
    </span>
    </form>
</div>
