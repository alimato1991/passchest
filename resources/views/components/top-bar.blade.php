@auth
<div class="top-bar">
    <ul class="profile">
        <li>
            <span>{{ auth()->user()->name }}</span>
        </li>
        <li>
            <livewire:auth.logout />
        </li>
    </ul>
</div>
@endauth