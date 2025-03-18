<x-update-modal title="Edit Counter">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' />
        <x-input-error :messages="$errors->get('name')" />
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Count</label>
        <input type="number" class="form-control" placeholder="Min : 1" wire:model.blur='count' />
        <x-input-error :messages="$errors->get('count')" />
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='icon' />
        <x-input-error :messages="$errors->get('icon')" />
    </div>

</x-update-modal>