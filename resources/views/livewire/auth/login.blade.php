<div class="form">
    <h2 class="form__title">Sign In</h2>
    <form action="/" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form__input">
        <label for="email"></label>
        <input type="email" id="email" name="email" wire:model="signIn.email" placeholder="Email">
        @error('signIn.email')
        <span class="validation">{{ message }}</span>
        @enderror
    </div>
    <div class="form__input">
        <label for="password"></label>
        <input type="password" id="password" name="password" wire:model="signIn.password" placeholder="Password">
        @error('signIn.password')
        <span class="validation">{{ message }}</span>
        @enderror
    </div>
    <button type="submit" class="form__button" wire:click.prevent="signIn()">Sign In</button>
    <span class="form__switch">
        Don't have an account? <a href="/register">Sign Up</a> 
    </span>
    </form>
</div>
