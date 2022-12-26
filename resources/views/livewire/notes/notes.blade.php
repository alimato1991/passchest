<div class="content">
    <x-loader></x-loader>
    @if ($updateMode)
        @include('livewire.notes.update')
    @else 
        @include('livewire.notes.create')
    @endif

    <div class="entry-wrapper">
        <div class="entry-list">
            @foreach ($notes as $note )
            <div wire:key="note-{{ $note->id }}">
                <div class="entry-item" wire:click="edit({{ $note->id }})">
                    <div class="entry">
                        <div class="entry-name">{{ $note->title }}</div>
                        <div class="entry-email">{{ $note->note }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>