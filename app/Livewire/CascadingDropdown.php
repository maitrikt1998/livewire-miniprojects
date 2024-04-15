<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\City;

class CascadingDropdown extends Component
{

    public $countries = [];
    public $cities = [];
    
    public $selectedCountry = null;
    public $selectedCity = null;


    public function mount()
    {
        $this->countries = Country::all();
    }

    public function changeCountry()
    {
        $this->selectedCity = null;
        if ($this->selectedCountry) {
            $this->cities = City::where('country_id', $this->selectedCountry)->get();
        }else {
            $this->cities = [];
        }
    }


    public function render()
    {
        return view('livewire.cascading-dropdown');
    }


}