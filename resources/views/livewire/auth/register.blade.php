<div class="form">
    <x-loader></x-loader>
    <div class="form__image">
        <img src="/images/create-account.png" alt="sign-up">
    </div>
    <form wire:submit.prevent="register">
    @csrf
    <div class="form__input">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" wire:model="name" placeholder="Full name">
        <div class="form__icon"><i class="fa-solid fa-user"></i></div>
        @error('name')
        <span class="validation">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__input">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" wire:model="email" placeholder="Email">
        <div class="form__icon"><i class="fa-solid fa-envelope"></i></div>
        @error('email')
        <span class="validation">{{ $message }}</span>
        @enderror
    </div>
    <div class="form__input">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" wire:model="password" placeholder="Password">
        <div class="form__icon"><i class="fa-solid fa-lock"></i></div>
        @error('password')
        <span class="validation">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="form__button">Create Account</button>
    <div class="form__switch">
        Already have an account? <a href="/login">Sign In</a> 
    </div>
    </form>
</div>
