<div class="content">
    <x-loader></x-loader>

    @if ($singleMode)
        @include('livewire.notes.single')
    @endif

    @if ($updateMode)
        @include('livewire.notes.update')
    @endif

    @if ($addNew)
        @include('livewire.notes.create')
    @endif

    <div class="entry-wrapper">
        <div class="entry-list">
            @foreach ($notes as $note )
            <div wire:key="note-{{ $note->id }}">
                <div class="entry-item" wire:click="show({{ $note->id }})">
                    <div class="entry">
                        <div class="entry-name">{{ $note->title }}</div>
                        <div class="entry-email">{{ $note->note }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="add-new">
            <button class="form__button" wire:click="addNew">Add New</button>
        </div>
    </div>
</div>