<div class="form">
    <form method="POST" action="/">
        @csrf
        <button type="submit" wire:click.prevent="logout">Logout</button>
    </form>
</div>