<x-create-modal title="Add New Project">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model.blur='name' />
        <x-input-error :messages="$errors->get('name')" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" placeholder="https://example.com" wire:model.blur='link'></inp>
        <x-input-error :messages="$errors->get('link')" />
    </div>



    <div class="col-md-6 mb-2">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model="category_id">
            @foreach ($categories as $category)
            <option>Select Category</option>
            <option value="{{ $category->id }}" wire:key='category-{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('category_id')" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" wire:model.blur='image'></inp>
        <div wire:loading wire:target="image" class="text-primary">Uploading...</div>
        <x-input-error :messages="$errors->get('image')" />
    </div>

    <div class="col-md-12 mb-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" cols="30" rows="3" wire:model.blur='description'></textarea>
        <x-input-error :messages="$errors->get('description')" />
    </div>

    <div class="col-md-6 mb-2">
        <div>
            <label class="form-label">Image Preview</label>
        </div>
        @if ($image)
        <img class="w-50 rounded" src="{{ $image->temporaryUrl() }}">
        @endif
    </div>

</x-create-modal>