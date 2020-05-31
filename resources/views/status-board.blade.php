<div class="{{ $styles['wrapper'] }}">

    @foreach($statuses as $status)
        @include($statusView, [
            'status' => $status
        ])
    @endforeach

    <div wire:ignore>
        @includeWhen($sortable, 'livewire-status-board::sortable', [
            'sortable' => $sortable,
            'sortableBetweenStatuses' => $sortableBetweenStatuses,
        ])
    </div>

</div>
