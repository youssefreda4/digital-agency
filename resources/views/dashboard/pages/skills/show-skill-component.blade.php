<x-show-modal title="Show Skill">
    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' disabled />
    </div>
    <div class="col-md-6 mb-2">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="1 - 100" wire:model='progress' disabled />
    </div>
</x-show-modal>