@auth
<div class="primary-menu">
    <div class="menu-image">
        <img src="/images/stack.png" alt="stack">
    </div>
    <ul class="menu">
        <li class="menu-item">
            <div class="menu-icon">
                <i class="fa-solid fa-key"></i>
            </div>
            <a href="/">Logins</a>
        </li>
        <li class="menu-item">
            <div class="menu-icon">
                <i class="fa-solid fa-note-sticky"></i>
            </div>
            <a href="/notes">Secure Notes</a>
        </li>
    </ul>
    <div class="profile-bar">
        <ul class="profile">
            <li>
                <span class="profile-name">Hi, {{ auth()->user()->name }}</span>
            </li>
            <li>
                <livewire:auth.logout />
            </li>
        </ul>
    </div>
</div>
@endauth