<form novalidate wire:submit='update'>

    @if (session()->has('success'))
    <div class=" alert alert-primary success-alert">{{ session('success') }}</div>
    @endif

    <div class="col-12 row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Site Name</label>
            <input type="text" class="form-control" placeholder="John Doe" wire:model='settings.site_name'>
            <x-input-error :messages="$errors->get('settings.site_name')" />

        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="ACME Inc." wire:model='settings.address'>
            <x-input-error :messages="$errors->get('settings.address')" />

        </div>
    </div>

    <div class="col-12 row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Email</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" placeholder="example.com" wire:model='settings.email'>
            </div>
            <x-input-error :messages="$errors->get('settings.email')" />
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Phone No</label>
            <input type="text" class="form-control phone-mask" placeholder="+20 120 000 0000"
                wire:model='settings.phone'>
            <x-input-error :messages="$errors->get('settings.phone')" />

        </div>
    </div>

    <div class="col-12 row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Facebook</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" placeholder="https://www.facebook.com"
                    wire:model='settings.facebook'>
            </div>
            <x-input-error :messages="$errors->get('settings.facebook')" />
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Instagram</label>
            <input type="text" class="form-control phone-mask" placeholder="https://www.instagram.com"
                wire:model='settings.instagram'>
            <x-input-error :messages="$errors->get('settings.instagram')" />
        </div>
    </div>

    <div class="col-12 row">
        <div class="col-md-6 mb-3">
            <label class="form-label">X</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" placeholder="https://www.x.com" wire:model='settings.x'>
            </div>
            <x-input-error :messages="$errors->get('settings.x')" />
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Linkedin</label>
            <input type="text" class="form-control phone-mask" placeholder="https://www.linkedin.com"
                wire:model='settings.linkedin'>
            <x-input-error :messages="$errors->get('settings.linkedin')" />

        </div>
    </div>

    <button class="btn btn-primary" type="submit">
        @include('dashboard.loading',[
            'target' => 'update',
            'name' => 'Update'
            ])
    </button>
</form>