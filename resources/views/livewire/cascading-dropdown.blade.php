<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-6">
            <select wire:model="selectedCountry" wire:change="changeCountry" class="form-select mb-3">
                <option value="-1">Please select a country</option>
                @foreach($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
            <div class="position-relative">
                <select wire:model="selectedCity" class="form-select">
                    <option value="-1">Please select a city</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>                
            </div>
        </div>
    </div>
</div>
