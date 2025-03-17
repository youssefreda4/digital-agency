<x-create-modal title="Add New Skill">

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

</x-create-modal>