<x-create-modal title="Add New Category">

    <div class="col-md-12 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' />
        <x-input-error :messages="$errors->get('name')" />
    </div>

</x-create-modal>