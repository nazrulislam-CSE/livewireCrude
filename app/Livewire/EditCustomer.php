<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class EditCustomer extends Component
{
    public $customer,$name,$email,$phone;

    public function mount(Customer $customer){
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
    public function updateCustomer(){

        $validated = $this->validate([
            'name' =>'required:max:255',
            'email' =>'required|email|max:255',
            'phone' =>'required|max:255',
        ]);


        $this->customer->update($validated);
        session()->flash('success', 'Customer successfully updated');
        return $this->redirect('/customers',navigate:true);
        
    }
}
