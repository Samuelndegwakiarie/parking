<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Confirmation extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        // Retrieve the data from the database using Laravel's Eloquent ORM
        $data = User::find($this->id);

        // Pass the data to the view
        return view('livewire.confirmation', ['data' => $data]);
    }
    
}
