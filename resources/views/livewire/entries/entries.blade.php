<div class="content">
    <x-loader></x-loader>
    @if ($updateMode)
        @include('livewire.entries.update')
    @else 
        @include('livewire.entries.create')
    @endif

    <div class="entry-wrapper">
        <div class="entry-list">
            @foreach ($entries as $entry )
            <div wire:key="entry-{{ $entry->id }}">
                <div class="entry-item" wire:click="edit({{ $entry->id }})">
                    <div class="entry">
                        <div class="entry-name">{{ $entry->name }}</div>
                        <div class="entry-email">{{ $entry->email }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>