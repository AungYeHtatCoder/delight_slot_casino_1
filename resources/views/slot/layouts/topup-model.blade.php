 <div class="modal fade" id="topupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header text-white">
     <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
     <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <div class="d-flex align-items-center">
      <div id="topup" class="wallet rounded border-1 p-2 text-white active">
       ငွေသွင်းရန်
      </div>
      <div id="withdraw" class="wallet rounded ms-3 border-1 p-2 text-white">
       ငွေထုတ်ရန်
      </div>
     </div>

     <div class="topup my-3">
      <div class="topuptypes">
       <h4 class="text-white">ငွေပေးချေမှုအမျိုးအစားများ</h4>
       <div class="d-flex justify-content-around mt-2">
        <div class="bank ck text-center w-100 active pt-3">
         <img src="{{ asset('slot_app/images/bank/kpay.png') }}" alt="" />
         <p class="text-center">K Pay</p>
        </div>
        <div class="bank cb text-center w-100 ms-1 pt-3">
         <img src="{{ asset('slot_app/images/bank/cbpay.png') }}" alt="" />
         <p class="text-center">CB Pay</p>
        </div>
        <div class="bank text-center w-100 ms-1 pt-3">
         <img src="{{ asset('slot_app/images/bank/wpay.png') }}" alt="" />
         <p class="text-center">Wave Pay</p>
        </div>
        <div class="bank text-center w-100 ms-1 pt-3">
         <img src="{{ asset('slot_app/images/bank/aya_logo.png') }}" alt="" />
         <p class="text-center">Aya Pay</p>
        </div>
       </div>
      </div>

      <div class="mt-2">
       <form action="">
        <div class="mb-3">
         <label for="amount" class="form-label text-white fw-bold">သွင်းငွေပမာဏ</label>
         <input type="number" class="form-control" id="amount" autocomplete="off" />
        </div>
        <div class="mb-3">
         <label for="phone" class="form-label text-white fw-bold">ငွေသွင်းသူဖုန်းနံပါတ်</label>
         <input type="number" class="form-control" id="phone" autocomplete="off" />
        </div>
       </form>
      </div>
     </div>

     <div class="withdraw my-3 d-none">
      <div class="topuptypes">
       <h4 class="text-white">ငွေပေးချေမှုအမျိုးအစားများ withdraw</h4>
       <div class="d-flex justify-content-around mt-2">
        <div class="bank ck text-center w-100 active pt-3">
         <img src="{{ asset('slot_app/images/bank/kpay.png') }}" alt="" />
         <p class="text-center">K Pay</p>
        </div>
        <div class="bank cb text-center w-100 ms-1 pt-3">
         <img src="{{ asset('slot_app/images/bank/cbpay.png') }}" alt="" />
         <p class="text-center">CB Pay</p>
        </div>
        <div class="bank text-center w-100 ms-1 pt-3">
         <img src="{{ asset('slot_app/images/bank/wpay.png') }}" alt="" />
         <p class="text-center">Wave Pay</p>
        </div>
        <div class="bank text-center w-100 ms-1 pt-3">
         <img src="{{ asset('slot_app/images/bank/aya_logo.png') }}" alt="" />
         <p class="text-center">Aya Pay</p>
        </div>
       </div>
      </div>

      <div class="mt-2">
       <form action="">
        <div class="mb-3">
         <label for="amount" class="form-label text-white fw-bold">သွင်းငွေပမာဏ</label>
         <input type="number" class="form-control" id="amount" autocomplete="off" />
        </div>
        <div class="mb-3">
         <label for="phone" class="form-label text-white fw-bold">ငွေသွင်းသူဖုန်းနံပါတ်</label>
         <input type="number" class="form-control" id="phone" autocomplete="off" />
        </div>
       </form>
      </div>
     </div>
    </div>
    <div class="modal-footer">
     <!-- <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button> -->
     <button class="btn-login">ငွေဖြည့်မည်</button>
    </div>
   </div>
  </div>
 </div>