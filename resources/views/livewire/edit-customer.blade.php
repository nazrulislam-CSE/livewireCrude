{{-- <h1 class="alert alert-danger text-center">Hellow Livewire</h1> --}}

<div class="card offset-3 col-6 mt-5">
    <div class="card-header bg-success text-light">
      <span>Edit Customer</span>
      <a wire:navigate href="/customers" class="btn btn-danger" style="float:right;">Customer List</a>
    </div>
    <div class="card-body">
        <form wire:submit="updateCustomer" action="" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input wire:model="email" type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input wire:model="phone" type="phone" class="form-control" id="exampleFormControlInput1" placeholder="Enter phone">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div> --}}
              <div class="mb-3 mx-auto">
                <button type="submit" class="btn btn-danger" style="float:right;">Update</button>
              </div>
        </form>   
    </div>
  </div>
