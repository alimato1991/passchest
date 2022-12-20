<div class="content">
    @if ($updateMode)
        @include('livewire.entries.update')
    @else 
        @include('livewire.entries.create')
    @endif

    <div class="entry-wrapper">
        <div class="entry-list">
            @foreach ($entries as $entry )
            <div class="entry-item">
                <div class="entry">
                    <div class="entry-name">{{ $entry->name }}</div>
                    <div class="entry-email">{{ $entry->email }}</div>
                </div>
                <div class="entry-actions">
                    <button wire:click="edit({{ $entry->id }})">Edit</button>
                    <button wire:click="delete({{ $entry->id }})">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
