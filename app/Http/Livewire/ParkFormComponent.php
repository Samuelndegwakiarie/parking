<?php
use App\Models\Park;
use Livewire\Component;

class ParkForm extends Component
{
    public $county;
    public $make;
    public $model;
    public $vehicle_plate;
    public $phone_number;
    public $currentStep = 1;

    public function park()
    {
        $validatedData = $this->validate([
            'county' => 'required',
            'make' => 'required',
            'model' => 'required',
            'vehicle_plate' => 'required',
            'phone_number' => 'required',
        ]);

        $park = new Park();
        $park->county = $this->county;
        $park->make = $this->make;
        $park->model = $this->model;
        $park->vehicle_plate = $this->vehicle_plate;
        $park->phone_number = $this->phone_number;
        $park->save();

        return redirect()->route('park.confirm', ['parkId' => $park->id]);
    }

    public function render()
    {
        return view('livewire.park-form');
    }
}
