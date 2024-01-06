@extends('admin_layouts.app')
@section('styles')
    <style>
        .image-container {
            position: absolute;
            top: 0;
            left: 0;
        }

        .image {
            max-width: 20%;
            height: auto;
            opacity: 0.8;
            /* Adjust the opacity as needed */
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid mb-3 pb-3">
        <div class="row mb-5">
            <div class="col-lg-3 position-sticky col-md-6">
                
                <div class="card top-1">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                            <i class="material-icons opacity-10">account_balance_wallet</i>
                        </div>
                    </div>
                    <div class="card-header mx-4 p-3 text-center">
                         <h6 class="text-center mb-0">Total Balance</h6>
                         <span class="badge text-bg-info">Admin</span>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0"> {{ number_format($response['data'],2) }} <small></small></h5>
                    </div>

                </div>

               
            </div>
            <div class="col-lg-9 mt-lg-0 mt-4">
                <!-- Card Profile -->
               
                </div>
              
              
            </div>
        </div>
    </div>
@endsection
