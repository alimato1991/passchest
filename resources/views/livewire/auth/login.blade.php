<div class="form">
    <div class="form__image">
        <img src="/images/login.png" alt="login">
    </div>
    <form wire:submit.prevent="signIn">
        @csrf
        <div class="form__input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" wire:model="signIn.email" placeholder="Email">
            <div class="form-icon"><i class="fa-solid fa-envelope"></i></div>
            @error('signIn.email')
            <span class="validation"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</span>
            @enderror
        </div>
        <div class="form__input">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" wire:model="signIn.password" placeholder="Password">
            <div class="form-icon"><i class="fa-solid fa-lock"></i></div>
            @error('signIn.password')
            <span class="validation"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="form__button">Sign In</button>
        <div class="form__switch">
            Don't have an account? <a href="/register">Sign Up</a> 
        </div>
    </form>
</div>