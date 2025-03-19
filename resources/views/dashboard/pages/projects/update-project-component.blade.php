<x-update-modal title=" Edit Project">

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
            <option value="{{ $category->id }}"  @selected($category->id == $category_id) wire:key='category-{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('category_id')" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" wire:model.blur='imageInput'></inp>
        <div wire:loading wire:target="imageInput" class="text-primary">Uploading...</div>
        <x-input-error :messages="$errors->get('imageInput')" />
    </div>

   
    <div class="col-md-6 mb-2">
        <div>
            <label class="form-label">Image Project</label>
        </div>
        @if ($image)
        <img width="200px" src=" {{ asset($image) }}">
        @endif
    </div>

    <div class="col-md-6 mb-2">
        <div>
            <label class="form-label">Image Preview</label>
        </div>
        @if ($imageInput)
        <img class="w-50 rounded" src="{{ $imageInput->temporaryUrl() }}"  >
        @endif
    </div>


    <div class="col-md-12 mb-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" cols="30" rows="3" wire:model.blur='description'></textarea>
        <x-input-error :messages="$errors->get('description')" />
    </div>

</x-create-modal>