<div class="forms-section">
    <x-loader></x-loader>
    <div class="single-item-container">
        <h2>{{ $entry->name }}</h2>
        <div class="single-item-card">
            <div class="single-item">
                <div class="item-label">username:</div>
                <div class="item-title">{{ $entry->email }}</div>
            </div>
            <div class="single-item">
                <div class="item-label">password:</div>
                <div class="item-title">{{ $entry->password }}</div>
            </div>
            <div class="single-item">
                <div class="item-label">website:</div>
                <div class="item-title">{{ $entry->website }}</div>
            </div>
            <div class="single-item">
                <div class="item-label">note:</div>
                <div class="item-title">{{ $entry->note }}</div>
            </div>
        </div>
        <button class="form__button" wire:click.prevent="edit({{ $entry->id }})">Edit</button>
        <button class="form__button" wire:click.prevent="delete({{ $entry->id }})">Delete</button>
    </div>
</div>
