
<div class="mt-5">
  <livewire:flash-message/>
  <div class="row">
    <div class="col-auto">
      <a wire:navigate href="/customers/create" class="btn btn-sm btn-success" style="float:right;">Create Customer</a>
    </div>
    <div class="col-auto">
      <input wire:model.live.debounce.150ms="search" type="text" class="form-control" placeholder="search customers">
    </div>
  </div>


<table class="table table-sm table-bordered table-striped table-hover mt-5">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col" colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $key => $customer)
        <tr>
            <th scope="row">{{ $key+1}}</th>
            <td>{{ $customer->name ?? 'Null'}}</td>
            <td>{{ $customer->email ?? 'Null'}}</td>
            <td>{{ $customer->phone ?? 'Null'}}</td>
            <td>
                <a wire:navigate href="customers/{{$customer->id}}" class="btn btn-success">View</a>
                <a wire:navigate href="customers/{{$customer->id}}/edit" class="btn btn-primary">Edit</a>
                <a wire:click="deleteCustomer({{$customer->id}})" href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{ $customers->links()}}
</div>
