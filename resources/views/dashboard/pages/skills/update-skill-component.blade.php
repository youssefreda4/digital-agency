<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit='update'>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' />
                            <x-input-error :messages="$errors->get('name')" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Progress</label>
                            <input type="number" class="form-control" placeholder="1 - 100" wire:model='progress' />
                            <x-input-error :messages="$errors->get('progress')" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        @include('dashboard.loading',[
                        'target' => 'update',
                        'name' => 'Update'
                        ])
                    </button>
                </div>
            </form>


        </div>
    </div>
</div>