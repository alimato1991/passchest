<div class="logout-form">
    <form wire:submit.prevent="logout">
        @csrf
        <button type="submit"><i class="fa-solid fa-door-open"></i></button>
    </form>
</div>