<div class="content">
    <x-loader></x-loader>
    @if ($singleMode)
        @include('livewire.entries.single')
    @endif
    
    @if ($updateMode)
        @include('livewire.entries.update')
    @endif

    @if ($addNew)
        @include('livewire.entries.create')
    @endif

    <div class="entry-wrapper">
        <div class="entry-list">
            @unless (count($entries) == 0)
            @foreach ($entries as $entry )
            <div wire:key="entry-{{ $entry->id }}">
                <div class="entry-item">
                    <div class="entry">
                        <div class="entry-name" wire:click="show({{ $entry->id }})">{{ $entry->name }}</div>
                        <div class="entry-email">{{ $entry->email }}</div>
                    </div>
                </div>
            </div>
            @endforeach
            @else 
            <span>Nothing to show</span>
            @endunless
        </div>
        <div class="add-new">
            <button class="form__button" wire:click="addNew">New Login</button>
        </div>
    </div>
</div>