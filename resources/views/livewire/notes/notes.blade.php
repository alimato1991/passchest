<div class="content">
    <x-loader></x-loader>
    <div class="forms-section">
        @if ($singleMode)
            @include('livewire.notes.single')
        @endif

        @if ($updateMode)
            @include('livewire.notes.update')
        @endif

        @if ($addNew)
            @include('livewire.notes.create')
        @endif
    </div>
    <div class="entry-wrapper">
        <div class="search-block">
            <form action="/">
                <div class="form__input">
                    <label for="search"></label>
                    <input type="text" placeholder="Search...">
                </div>
                <button class="search__button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="entry-list">
            @unless (count($notes) == 0)
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
            @else
                <div class="empty-result">
                    <span>Click the + below to add a login</span>
                </div>
            @endunless
        </div>
        <div class="add-new">
            <button class="add-new-btn" wire:click="addNew"><i class="fa-solid fa-plus"></i> Add New</button>
        </div>
    </div>
</div>