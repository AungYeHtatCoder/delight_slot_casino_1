<div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">
  <li class="nav-item active">
            <a class="nav-link text-white " href="{{ route('home') }}">
              <span class="sidenav-mini-icon"> <i class="material-icons-round opacity-10">dashboard</i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Dashboard </span>
            </a>
          </li>

          {{-- <li class="nav-item active">
            <a class="nav-link text-white " href="{{route('api_dashboard')  }}">
          
              <span class="sidenav-mini-icon">   <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i> </span>
              <span class="sidenav-normal  ms-2  ps-1">Api Dashboard </span>
            </a>
          </li> --}}
        
    <hr class="horizontal light mt-0">
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white "
       aria-controls="dashboardsExamples" role="button" aria-expanded="false">
       <i class="material-icons py-2">settings</i>
               <span class="nav-link-text ms-2 ps-1">General Setup</span>
      </a>
      <div class="collapse " id="dashboardsExamples">
        <ul class="nav ">
         
          @can('admin_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.banners.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.text.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-bullhorn"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner Text </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.games.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-gamepad"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Bonus </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.promotions.index') }}">
              <span class="sidenav-mini-icon"> <i class="fas fa-gift"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Promotions </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('admin.game-type-lists')}}">
              <span class="sidenav-mini-icon">GP </span>
              <span class="sidenav-normal  ms-2  ps-1"> GameType Provider </span>
            </a>
          </li>
          @endcan

        </ul>
      </div>
    </li>

    @can('admin_access')
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#profileExample" class="nav-link text-white"
      aria-controls="pagesExamples" role="button" aria-expanded="false">
      <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
        <span class="nav-link-text ms-2 ps-1">Authorization</span>
      </a>
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <div class="collapse " id="profileExample">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.roles.index') }}">
                    <span class="sidenav-mini-icon">R</span>
                    <span class="sidenav-normal  ms-2  ps-1">Roles</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.permissions.index')}}">
                    <span class="sidenav-mini-icon"> P </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Permissions </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('profile')}}">
                    <span class="sidenav-mini-icon"> <i class="fa-solid fa-user"></i> </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>
    @endcan

    <li class="nav-item">
      @can('admin_access')
      <a data-bs-toggle="collapse" href="#masterControl" class="nav-link text-white" aria-controls="pagesExamples"
      role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">Admin Control</span>
      </a>
      @endcan
      @can('master_access')
      <a data-bs-toggle="collapse" href="#masterControl" class="nav-link text-white" aria-controls="pagesExamples"
      role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">Master Control</span>
      </a>
      @endcan
      @can('agent_access')
      <a data-bs-toggle="collapse" href="#masterControl" class="nav-link text-white" aria-controls="pagesExamples"
      role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">Agent Control</span>
      </a>
      @endcan
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <div class="collapse " id="masterControl">
              <ul class="nav nav-sm flex-column">
                @can('master_index')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.master.index')}}">
                    <span class="sidenav-mini-icon"> <i class="fas fa-users"></i> </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Master Lists </span>
                  </a>
                </li>
                @endcan
                @can('agent_index')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.agent.index')}}">
                    <span class="sidenav-mini-icon"> <i class="fas fa-users"></i> </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Agent Lists </span>
                  </a>
                </li>
                @endcan
                @can('user_index')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.transferLog') }}">
                    <span class="sidenav-mini-icon"> T L </span>
                    <span class="sidenav-normal  ms-2  ps-1"> TransferLog </span>
                  </a>
                </li>
                @endcan
                @can('user_index')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.user.index') }}">
                    <span class="sidenav-mini-icon"> T L </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Players </span>
                  </a>
                </li>
                @endcan
                @can('make_transfer')
                <li class="nav-item">
                @php
                  $req_count1 = App\Models\CashInRequest::all()->count();
                @endphp
                <a class="nav-link text-white " href="{{ route('admin.cash-in-request-list') }}">
                  <span class="sidenav-mini-icon"> <i class="fas fa-coins"></i> </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Cash In Requests <span class="badge text-bg-light">{{ $req_count1 }}</span></span>
                </a>
              </li>
              <li class="nav-item">
                @php
                  $req_count2 = App\Models\CashOutRequest::all()->count();
                @endphp
                <a class="nav-link text-white " href="{{ route('admin.cash-out-request-list') }}">
                  <span class="sidenav-mini-icon"> <i class="fas fa-coins"></i> </span>
                  <span class="sidenav-normal  ms-2  ps-1"> Cash Out Requests  <span class="badge text-bg-light">{{ $req_count2 }}</span></span>
                </a>
              </li>
              @endcan
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white " href="{{ route('admin.payments.index') }}">
        <span class="sidenav-mini-icon"> <i class="fas fa-coins"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Payment Lists</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      @php
        $req_count1 = App\Models\CashInRequest::where('status', 0)->get()->count();
      @endphp
      <a class="nav-link text-white " href="{{ route('admin.cash-in-request-list') }}">
        <span class="sidenav-mini-icon"> <i class="fas fa-coins"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Cash In Requests <span class="badge text-bg-light">{{ $req_count1 }}</span></span>
      </a>
    </li>
    <li class="nav-item">
      @php
        $req_count2 = App\Models\CashOutRequest::where('status', 0)->get()->count();
      @endphp
      <a class="nav-link text-white " href="{{ route('admin.cash-out-request-list') }}">
        <span class="sidenav-mini-icon"> <i class="fas fa-coins"></i> </span>
        <span class="sidenav-normal  ms-2  ps-1"> Cash Out Requests  <span class="badge text-bg-light">{{ $req_count2 }}</span></span>
      </a>
    </li> -->
    <li class="nav-item">
      <a href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="nav-link text-white">
        <span class="sidenav-mini-icon"> <i class="fas fa-right-from-bracket text-white"></i> </span>
        <span class="sidenav-normal ms-2 ps-1">Logout</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>