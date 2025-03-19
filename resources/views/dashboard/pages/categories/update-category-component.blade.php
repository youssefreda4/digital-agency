<x-update-modal title="Edit Skill">

    <div class="col-md-12 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' />
        <x-input-error :messages="$errors->get('name')" />
    </div>

</x-update-modal>