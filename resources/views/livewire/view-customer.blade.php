<div>
    <div class="card offset-3 col-6 mt-5">
        <div class="card-header">
          <h3 class="card-title">View Customer</h3>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $customer->name}}</h5>
          <p class="card-text">{{ $customer->email}}</p>
          <p class="card-text">{{ $customer->phone}}</p>
          <a wire:navigate href="/customers" class="btn btn-primary">Go Back</a>
        </div>
      </div>
</div>