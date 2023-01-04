<div>
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
        <button class="form__button edit" wire:click.prevent="edit({{ $entry->id }})"><i class="fa-solid fa-pencil"></i> Edit</button>
        <button class="form__button delete" wire:click.prevent="delete({{ $entry->id }})"><i class="fa-solid fa-trash"></i> Trash</button>
    </div>
</div>