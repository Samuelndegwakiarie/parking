<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Parking;

class HomeComponent extends Component
{
    public $county;
    public $make;
    public $model;
    public $vehicle_plate;
    public $color;
    public $phone_number;

    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount(){
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.home-component');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();    
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
        if($this->currentStep == 1){
            $this->validate([
                'county'=>'required|string'
            ]);
        }

        elseif($this->currentStep == 2){
            $this->validate([
                'make'=>'required|string',
                'model'=>'required|string',
                'vehicle_plate'=>'required|string',
                'color'=>'required|string'                
            ]);            
        }

        elseif($this->currentStep == 3){
            $this->validate([
                'phone_number'=>'required|digits:10'               
            ]);            
        }
    }
    

    public function submitForm(){
        $this->validate([
            'county'=>'required|string',
            'make'=>'required|string',
            'model'=>'required|string',
            'vehicle_plate'=>'required|string',
            'color'=>'required|string',
            'phone_number'=>'required|digits:10'
        ]);


        $parking = new Parking;
        $parking->county = $this->county;
        $parking->make = $this->make;
        $parking->model = $this->model;
        $parking->vehicle_plate = $this->vehicle_plate;
        $parking->color = $this->color;
        $parking->phone_number = $this->phone_number;
        $parking->save();

        session()->flash('message', 'Parking data saved successfully!');
        return redirect()->route('home.index');
}


    public function save(){
        $this->submitForm();
        
    }
}