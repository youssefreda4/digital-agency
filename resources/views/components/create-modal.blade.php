<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit='create' enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        {{ $slot }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        @include('dashboard.loading',[
                        'target' => 'create',
                        'name' => 'Create'
                        ])
                    </button>
                </div>
            </form>


        </div>
    </div>
</div>