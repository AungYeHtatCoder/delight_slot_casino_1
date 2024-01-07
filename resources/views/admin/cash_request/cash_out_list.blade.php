@extends('admin_layouts.app')
@section('styles')
<style>
  .transparent-btn {
    background: none;
    border: none;
    padding: 0;
    outline: none;
    cursor: pointer;
    box-shadow: none;
    appearance: none;
    /* For some browsers */
  }
</style>
@endsection
@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <!-- Card header -->
      <div class="card-header pb-0">
        <div class="d-lg-flex">
          <div>
            <h5 class="mb-0">Cash Out Requested Lists</h5>

          </div>
          {{-- <div class="ms-auto my-auto mt-lg-0 mt-4">
      <div class="ms-auto my-auto">
       <a href="{{ url('/admin/agent-user-create') }}" class="btn bg-gradient-primary btn-sm mb-0">+&nbsp; Create New
          Player</a>
          <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
        </div>
      </div> --}}
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-flush" id="users-search">
      <thead class="thead-light">
        <th>#</th>
        <th>UserName</th>
        <th>Phone</th>
        <th>Requested Amount</th>
        <th>Payment Method</th>
        <th>Created_at</th>
        <th>Action</th>
      </thead>
      <tbody>
        @foreach ($cashes as $cash)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>
            <span class="d-block">{{ $cash->user->name }}</span>
          </td>
          <td>{{ $cash->phone }}</td>
          <td>{{ number_format($cash->user->balance) }}</td>
          <td>{{ number_format($cash->amount) }}</td>
          <td>{{ $cash->payment_method }}</td>
          <td>{{ $cash->created_at->format('d-m-Y') }}</td>
          <td>

            <a href="{{ route('admin.getCashOut', $cash->id) }}" data-bs-toggle="tooltip" data-bs-original-title="Cash Out To Player" class="btn btn-warning btn-sm">
              <i class="fas fa-right-left text-white me-1"></i>
              {{-- <i class="material-icons text-secondary position-relative text-lg" style="font-size: 25px">currency_exchange</i> --}}
              ငွေထုတ်မည်
            </a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('admin_app/assets/js/plugins/datatables.js') }}"></script>
{{-- <script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
      searchable: true,
      fixedHeight: true
    });
  </script> --}}
<script>
  if (document.getElementById('users-search')) {
    const dataTableSearch = new simpleDatatables.DataTable("#users-search", {
      searchable: true,
      fixedHeight: false,
      perPage: 7
    });

    document.querySelectorAll(".export").forEach(function(el) {
      el.addEventListener("click", function(e) {
        var type = el.dataset.type;

        var data = {
          type: type,
          filename: "material-" + type,
        };

        if (type === "csv") {
          data.columnDelimiter = "|";
        }

        dataTableSearch.export(data);
      });
    });
  };
</script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
@endsection