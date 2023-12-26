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
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino1.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">AG Live casino</span>
          </a>
        </div>
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino2.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">EVO Live casino</span>
          </a>
        </div>
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino3.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">DG Live casino</span>
          </a>
        </div>
      </div>

      <div class="row mx-1 mt-2">
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino4.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">BBIN Live casino</span>
          </a>
        </div>
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino5.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">BG Live casino</span>
          </a>
        </div>
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino6.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">CQ9 Live casino</span>
          </a>
        </div>
      </div>

      <div class="row mx-1 mt-2">
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino7.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">AE Live casino</span>
          </a>
        </div>
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino8.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">OG Live casino</span>
          </a>
        </div>
        <div class="col-4">
          <a href="#" class="text-decoration-none">
            <img src="{{ asset('slot_app/images/livecasino/casino9.png') }}" alt="olympus" style="width: 100%; border-radius: 10px; display: block" />
            <span class="text-center">WM Live casino</span>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- GAME END -->

<!-- FOOTER INFO START-->

<!-- FOOTER INFO END-->
@include('slot.layouts.sub-footer')
@endsection
