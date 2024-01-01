<div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item mb-2 mt-0">
      <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
        @if (Auth::user()->profile)
          <img src="{{ Auth::user()->profile }}" class="avatar">
        @else
          <i class="fas fa-user-circle"></i>
        @endif
        <span class="nav-link-text ms-2 ps-1">{{ Auth::user()->name }}</span>
      </a>
      <div class="collapse" id="ProfileNav">
        <ul class="nav ">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.profiles.index') }}">
              <span class="sidenav-mini-icon"> <i class="fas fa-user-circle"></i> </span>
              <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    <hr class="horizontal light mt-0">
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white " aria-controls="dashboardsExamples" role="button" aria-expanded="false">
        <i class="material-icons-round opacity-10">dashboard</i>
        <span class="nav-link-text ms-2 ps-1">Dashboards</span>
      </a>
      <div class="collapse " id="dashboardsExamples">
        <ul class="nav ">
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('home') }}">
              <span class="sidenav-mini-icon"> <i class="fas fa-dashboard"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Dashboard </span>
            </a>
          </li>
          @can('admin_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.banners.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-panorama"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.games.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-gamepad"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Game Links </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.text.index') }}">
              <span class="sidenav-mini-icon"> <i class="fa-solid fa-bullhorn"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner Text </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.promotions.index') }}">
              <span class="sidenav-mini-icon"> <i class="fas fa-gift"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> Promotions </span>
            </a>
          </li>
          @endcan

        </ul>
      </div>
    </li>
    @foreach (Auth::user()->roles as $role)
    @if($role->title == "Admin")
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#masterControl" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">Admin Control</span>
      </a>
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <div class="collapse " id="masterControl">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/real-live-master-list')}}">
                    <span class="sidenav-mini-icon"> <i class="fas fa-users"></i> </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Master Lists </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/get-all-admin-to-master-transfer-log') }}">
                    <span class="sidenav-mini-icon"> T L </span>
                    <span class="sidenav-normal  ms-2  ps-1"> TransferLog </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/get-all-admin-to-master-daily-status-transfer-log') }}">
                    <span class="sidenav-mini-icon"> D S </span>
                    <span class="sidenav-normal  ms-2  ps-1">Daily Status </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/get-all-admin-to-master-monthly-status-transfer-log') }}">
                    <span class="sidenav-mini-icon"> M S </span>
                    <span class="sidenav-normal  ms-2  ps-1">Monthly Status </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>
    @elseif($role->title == "Master")
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#masterControl" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">Master Control</span>
      </a>
       <div class="collapse show" id="pagesExamples">
          <ul class="nav">
            <li class="nav-item ">
              <div class="collapse " id="masterControl">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link text-white " href="{{ route('admin.agent-list')}}">
                      <span class="sidenav-mini-icon"> <i class="fas fa-users"></i> </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Agent Lists </span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link text-white " href="{{ route('admin.agent-create')}}">
                      <span class="sidenav-mini-icon"> <i class="fas fa-users"></i> </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Agent Create </span>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('/admin/get-all-master-to-agent-transfer-log') }}">
                      <span class="sidenav-mini-icon"> T L </span>
                      <span class="sidenav-normal  ms-2  ps-1"> TransferLog </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('/admin/get-all-master-to-agent-daily-status-transfer-log') }}">
                      <span class="sidenav-mini-icon"> D S </span>
                      <span class="sidenav-normal  ms-2  ps-1">Daily Status </span>
                    </a>
                  </li>

                   <li class="nav-item">
                    <a class="nav-link text-white " href="{{ url('/admin/get-all-master-to-agent-monthly-status-transfer-log') }}">
                      <span class="sidenav-mini-icon"> M S </span>
                      <span class="sidenav-normal  ms-2  ps-1">Monthly Status </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
    </li>
    @elseif($role->title == "Agent")
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#masterControl" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">Agent Control</span>
      </a>
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <div class="collapse " id="masterControl">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.agent-user-list')}}">
                    <span class="sidenav-mini-icon"> <i class="fas fa-users"></i> </span>
                    <span class="sidenav-normal  ms-2  ps-1"> User Lists </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/get-all-agent-to-user-transfer-log') }}">
                    <span class="sidenav-mini-icon"> T L </span>
                    <span class="sidenav-normal  ms-2  ps-1"> TransferLog </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/get-all-agent-to-user-daily-status-transfer-log') }}">
                    <span class="sidenav-mini-icon"> D S </span>
                    <span class="sidenav-normal  ms-2  ps-1">Daily Status </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('/admin/get-all-agent-to-user-monthly-status-transfer-log') }}">
                    <span class="sidenav-mini-icon"> M S </span>
                    <span class="sidenav-normal  ms-2  ps-1">Monthly Status </span>
                  </a>
                </li>

              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>
    @endif
    @endforeach

    @can('admin_access')
    <li class="nav-item mt-3">
      <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">Management</h6>
    </li>
    @endcan
    @can('admin_access')
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#profileExample" class="nav-link text-white" aria-controls="pagesExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">User Control</span>
      </a>
      <div class="collapse show" id="pagesExamples">
        <ul class="nav">
          <li class="nav-item ">
            <div class="collapse " id="profileExample">
              <ul class="nav nav-sm flex-column">
                @can('admin_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.permissions.index')}}">
                    <span class="sidenav-mini-icon"> P </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Permissions </span>
                  </a>
                </li>
                @endcan
                @can('admin_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.roles.index') }}">
                    <span class="sidenav-mini-icon"> U R </span>
                    <span class="sidenav-normal  ms-2  ps-1"> User's Roles </span>
                  </a>
                </li>
                @endcan
                @can('admin_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.users.index')}}">
                    <span class="sidenav-mini-icon"> U </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Users </span>
                  </a>
                </li>
                @endcan
                @can('admin_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('  http://ag.gsoftbb.com')}}">
                    <span class="sidenav-mini-icon"> U </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Agent System </span>
                  </a>
                </li>
                @endcan

                @can('admin_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ url('https://bbinbo.gsoft688.com/Account/Login.aspx')}}">
                    <span class="sidenav-mini-icon"> U </span>
                    <span class="sidenav-normal  ms-2  ps-1"> SlotAccDashboard </span>
                  </a>
                </li>
                @endcan

                @can('admin_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="">
                    <span class="sidenav-mini-icon"> S P </span>
                    <span class="sidenav-normal  ms-2  ps-1"> SlotPlayer </span>
                  </a>
                </li>
                @endcan
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </li>
    @endcan
    {{-- lottery --}}
    {{-- lottery --}}
    @can('admin_access')
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
        {{-- <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i> --}}
        <i class="fas fa-gamepad" style="font-size: 16px;"></i>
        <span class="nav-link-text ms-2 ps-1">Slot Control</span>
      </a>
      <div class="collapse " id="applicationsExamples">
        <ul class="nav ">
          @can('admin_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ url('/admin/game-type-lists') }}">
              <span class="sidenav-mini-icon"> <i class="fas fa-gamepad"></i> </span>
              <span class="sidenav-normal  ms-2  ps-1"> GameType&Provider </span>
            </a>
          </li>
          @endcan
        </ul>
      </div>
    </li>
    @endcan
    {{-- end lottery --}}
    {{-- end lottery --}}

    <li class="nav-item">
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-white">
        <span class="sidenav-mini-icon"> <i class="fas fa-right-from-bracket text-white"></i> </span>
        <span class="sidenav-normal ms-2 ps-1">Logout</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </li>
  </ul>
