<x-show-modal title="Show Service">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' disabled />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter Name" wire:model='email' disabled />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Subject</label>
        <input type="text" class="form-control" placeholder="Enter Icon" wire:model='subject' disabled />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">message</label>
        <textarea class="form-control" cols="30" rows="5" wire:model='message' disabled></textarea>
    </div>

</x-show-modal>