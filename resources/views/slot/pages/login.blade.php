@include('slot.layouts.head')
@yield('style')

<body>
    <div class="main">
        <div class="">
          <div class="text-center">
            <img
              src="https://delightmyanmar.pro/user_app/assets/img/logo.png"
              alt=""
              style="width: 100px; height: 100px"
            />
          </div>
          <h5 class="text-center">အကောင့်ဝင်ရန်</h5>
          <form action="">
            <input
              type="text"
              name="signin_phone"
              class="form-control w-75 py-2 my-3 mx-auto"
              placeholder="ဖုန်းနံပါတ် (သို့) အီးမေးလ်ဖြည့်ပါ"
            />
            <input
              type="password"
              name="signin_password"
              class="form-control w-75 py-2 my-3 mx-auto"
              placeholder="လျှို့ဝှက်နံပါတ်ဖြည့်ပါ"
            />
  
            <div class="d-flex justify-content-end align-items-center me-5">
              <small
                ><a
                  href="#"
                  style="text-decoration: none; color: #98a7b5"
                  class="me-3"
                  >လျှို့ဝှက်နံပါတ် မေ့နေပါသလား။</a
                ></small
              >
            </div>
  
            <div class="d-flex justify-content-center align-items-center">
              <button
                type="button"
                name="signin_btn"
                class="btn-register border-0 w-75 mt-4"
              >
                ၀င်မည်
              </button>
            </div>
  
            <hr />
  
            <div class="text-center">
              အကောင့်မရှိသေးသူများ
              <a
                href="{{ url('/slot-register') }}"
                name="signin_btn"
                class="w-75 mx-auto mt-4 py-2"
                style="text-decoration: none; color: #2ec59c"
                >အကောင့် အသစ်ဖွင့်မည်</a
              >
            </div>
          </form>
        </div>
      </div>

  
  
</body>
@include('slot.layouts.js')
@yield('script')