<?php

namespace App\Livewire\Dashboard\Pages\Setting;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettingsComponent extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = Setting::find(1);
    }

    protected function rules()
    {
        return [
            'settings.site_name' => 'required|string',
            'settings.address' => 'required|string',
            'settings.phone' => 'required|string',
            'settings.email' => 'required|string|email',
            'settings.facebook' => 'nullable|string|url',
            'settings.instagram' => 'nullable|string|url',
            'settings.x' => 'nullable|string|url',
            'settings.linkedin' => 'nullable|string|url',
        ];
    }

    protected function validationAttributes()
    {
        return [
            'settings.site_name' => 'site name',
            'settings.address' => 'address',
            'settings.phone' => 'phone',
            'settings.email' => 'email',
            'settings.facebook' => 'facebook',
            'settings.instagram' => 'instagram',
            'settings.x' => 'x',
            'settings.linkedin' => 'linkedin',
        ];
    }

    public function update()
    {
        $this->validate();
        $this->settings->save();

        session()->flash('success', 'Settings updated successfully');
    }

    public function render()
    {
        return view('dashboard.pages.setting.update-settings-component');
    }
}
