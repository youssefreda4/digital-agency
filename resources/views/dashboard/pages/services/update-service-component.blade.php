<x-update-modal title="Edit Service">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' />
        <x-input-error :messages="$errors->get('name')" />
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Enter Icon" wire:model.blur='icon' />
        <x-input-error :messages="$errors->get('icon')" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" cols="30" rows="5" wire:model.blur='description'></textarea>
        <x-input-error :messages="$errors->get('description')" />
    </div>

</x-update-modal>