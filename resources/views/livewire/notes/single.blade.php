<div class="forms-section">
    <x-loader></x-loader>
    <div class="single-item-container">
        <h2>{{ $note->title }}</h2>
        <div class="single-item-card">
            <div class="single-item">
                <div class="item-label">title:</div>
                <div class="item-title">{{ $note->title }}</div>
            </div>
            <div class="single-item">
                <div class="item-label">note:</div>
                <div class="item-title">{{ $note->note }}</div>
            </div>
        </div>
        <button class="form__button" wire:click.prevent="edit({{ $note->id }})">Edit</button>
        <button class="form__button" wire:click.prevent="delete({{ $note->id }})">Delete</button>
    </div>
</div>

