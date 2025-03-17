<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit='delete'>
                <div class="modal-body">
                    <strong>
                        {{ $slot }}
                    </strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-danger">
                        @include('dashboard.loading',[
                        'target' => 'delete',
                        'name' => 'Delete'
                        ])
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>