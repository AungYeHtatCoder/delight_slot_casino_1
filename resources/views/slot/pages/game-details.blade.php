@extends('slot.layouts.app')

@section('content')


<!-- GAME START -->
<div class="game mt-5">

  <!-- LIVE CASINO -->
  <div class="mt-4">
    <div class="game-content-title mt-5">
      <span>
        <img src="{{ asset('slot_app/images/livecasino/casinologo.png') }}" alt="hotgame" style="width: 30px; height: 30px" class="ms-2" />
        LIVE Casino
      </span>
    </div>
    <div class="game-content mt-2">

        <div class="row mx-1">
            @foreach ($gameLists as $data)
                <div class="col-4">
                <a href="#" class="text-decoration-none">
                    <img src="{{ asset('slot_app/images/livecasino/casino1.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
                    <span class="text-center">{{$data->name_en}}</span>
                </a>
                </div>
            @endforeach
        </div>


    </div>
  </div>

</div>
<!-- GAME END -->

<!-- FOOTER INFO START-->

<!-- FOOTER INFO END-->
@include('slot.layouts.sub-footer')
@endsection
