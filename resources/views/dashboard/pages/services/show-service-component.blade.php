<x-show-modal title="Show Service">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' disabled />
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Enter Icon" wire:model.blur='icon' disabled />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" cols="30" rows="5" wire:model.blur='description' disabled></textarea>
    </div>

</x-show-modal>