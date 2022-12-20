<div class="content">
    @if ($updateMode)
        @include('livewire.notes.update')
    @else 
        @include('livewire.notes.create')
    @endif

    <div class="entry-wrapper">
        <div class="entry-list">
            @foreach ($notes as $note )
            <div class="entry-item">
                <div class="entry">
                    <div class="entry-name">{{ $note->title }}</div>
                    <div class="entry-email">{{ $note->note }}</div>
                </div>
                <div class="entry-actions">
                    <button wire:click="edit({{ $note->id }})">Edit</button>
                    <button wire:click="delete({{ $note->id }})">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>