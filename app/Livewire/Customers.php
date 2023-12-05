<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Customer;

class Customers extends Component
{
    use WithPagination;

    // public $customers =[];
    public $search = [];
    protected $paginationTheme='bootstrap';
    // public function mount(){
    //     $this->customers = \App\Models\Customer::all();
    // }

    public function render()
    {
        if(!$this->search){
            $customers = Customer::paginate(10);
        }else{
            $customers = Customer::where('name','like','%'.$this->search.'%')->paginate(10);
        }
       
        return view('livewire.customers',[
            'customers' => $customers
        ]);
    }

    public function deleteCustomer(Customer $customer){
        $customer->delete();

        session()->flash('error', 'Customer deleted successfully');
        return $this->redirect('/customers',navigate:true);

    }
}
