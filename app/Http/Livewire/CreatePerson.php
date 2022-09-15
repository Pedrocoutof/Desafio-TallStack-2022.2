<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;

class CreatePerson extends Component
{
    public $name;
    public $age;
    public $about;
    public $city;
    public $country;

    protected $rules = [
        'name' => 'string|required|min:3',
        'age' => 'numeric|required',
        'about' => 'string|required',
        'city' => 'string|nullable',
        'country' => 'string|nullable',
    ];

    public function submit()
    {
        $this->validate();

        Person::create([
            'name' => $this->name,
            'age' => $this->age,
            'about' => $this->about,
            'city' => $this->city,
            'country' => $this->country,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-person', [
            'people' => Person::all(),
        ]);
    }
}
