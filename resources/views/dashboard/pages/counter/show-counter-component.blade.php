<x-show-modal title="Show Counter">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' disabled/>
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Count</label>
        <input type="number" class="form-control" placeholder="Min : 1" wire:model.blur='count' disabled/>
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='icon' disabled/>
    </div>

</x-show-modal>