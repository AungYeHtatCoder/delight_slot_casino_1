<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-white">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="{{ url('/') }}" class="text-decoration-none">
          <div class="d-flex">
            <img src="{{ asset('slot_app/images/sidebaricon/back.png') }}" alt="back" />
            <p class="ps-3">ရှေ့စာမျက်နှာ</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/sidebaricon/all.png') }}" alt="all" />
            <p class="ps-3">အားလုံး</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('admin/get-launche-game') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/hotgame.png') }}" alt="hotgame" />
            <p class="ps-3">ဟော့ဂိမ်းများ</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL::to('/') }}#10" class="text-decoration-none smoothScroll">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/slotlogo.png') }}" alt="slot" />
            <p class="ps-3">Slots</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/#4') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/livecasino/casinologo.png') }}" alt="livecasino" />
            <p class="ps-3">LIVE Casino</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/#3') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/fishgames/fishlogo.png') }}" alt="fish" />
            <p class="ps-3">FISH HUNTER</p>
          </div>
        </a>
      </li>
      
      <li class="nav-item">
        <a href="{{ url('/#9') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/sport/sportlogo.png') }}" alt="livecasino" />
            <p class="ps-3">SPORTBOOK</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/#1') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/card/cardlogo.png') }}" alt="card" />
            <p class="ps-3">CARD & BOARDGAME</p>
          </div>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a href="#" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/esport/esportlogo.png') }}" alt="esport" />
            <p class="ps-3">Esports</p>
          </div>
        </a>
      </li> --}}
      <li class="nav-item">
        <a href="{{ url('/#5') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/lottery/lottorylogo.png') }}" alt="lottery" />
            <p class="ps-3">LOTTO</p>
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/#8') }}" class="text-decoration-none">
          <div class="d-flex list-card">
            <img src="{{ asset('slot_app/images/lottery/lottorylogo.png') }}" alt="lottery" />
            <p class="ps-3">OTHERS</p>
          </div>
        </a>
      </li>
    </ul>
    <!-- <div class="dropdown mt-3">
          <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
          >
            Dropdown button
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div> -->
  </div>
</div>
