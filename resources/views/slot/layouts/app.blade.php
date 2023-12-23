@include('slot.layouts.head')
@yield('style')

<body>
  <div class="main">
    <!-- NAVBAR START -->
    @include('slot.layouts.navbar')
    <!-- NAVBAR END -->

    @yield('content')
    <!-- FOOTER START -->
    @include('slot.layouts.footer')
    <!-- FOOTER END -->
  </div>

  <!-- SIDE BAR -->
  @include('slot.layouts.sidebar')
  <!-- SIDE BAR -->

  <!-- TOP UP AND WITHDRAW -->
  @include('slot.layouts.topup-model')
</body>
@include('slot.layouts.js')
@yield('script')