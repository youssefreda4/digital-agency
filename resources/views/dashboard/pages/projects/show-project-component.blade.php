<x-show-modal title="Show Project">

    <div class="col-md-6 mb-2">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' disabled />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Link</label>
        <input type="text" class="form-control" placeholder="https://example.com" wire:model='link' disabled />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model="category_id">
            @foreach ($categories as $category)
            <option>Select Category</option>
            <option value="{{ $category->id }}" @selected($category->id == $category_id) wire:key='category-{{
                $category->id }}'>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>


    <div class="col-md-12 mb-2">
        <label class="form-label">Description</label>
        <textarea class="form-control" cols="30" rows="3" wire:model='description' disabled></textarea>
    </div>

    <div class="col-md-6 mb-2">
        <div>
            <label class="form-label">Image Preview</label>
        </div>
        @if ($image)
        <img width="200px" src=" {{ asset($image) }}">
        @endif
    </div>

    </x-create-modal>