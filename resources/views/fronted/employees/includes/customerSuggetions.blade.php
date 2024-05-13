    <!-- start sec5 -->
    <div class="sec-1 mb-5 " id="customerSuggetions">
      <div class="container-fluid overflow-hidden">
        <div class="row">
          <div
            class="col-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center"
          >
            <div class="parent-img w-50 h-50 overflow-hidden">
              <img
                class="w-auto"
                src="{{asset('fronted/employees/assets/img44.png')}}"
                alt=""
              />
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <div
              class="info-tex w-100 text-center"
              style="padding: 100px; max-width: 750px"
            >
              <h1
                style="
                  font-family: Elsie Swash Caps;
                  
                  font-weight: 900;
                  line-height: 10px;
                  text-align: center;
                  margin-bottom: 10px;
                  margin-top: 60px;
               "
              id="text-4"
           >
                للمقترحات او الشكاوي
              </h1>
              
            </div>
            <form action="{{route('storeSuggetion')}}" method="POST" class="form_in" style="display: flex; flex-direction: column; gap: 20px; width: 50%; margin: auto;">
            @csrf
              <input type="text" name="name" placeholder="الاسم" style="text-align: right;background-color: #64636340;outline: none; border: none; padding: 10px; border-radius: 10px;" >
              <input type="email" name="email" placeholder="البريد الالكتروني" style="text-align: right;background-color: #64636340;outline: none; border: none; padding: 10px; border-radius: 10px;">
              <textarea name="message" id="" placeholder="الرساله" cols="10" rows="7"style="text-align: right;background-color: #64636340;outline: none; border: none; padding: 10px; border-radius: 10px;"></textarea>
              <input type="submit"  value="ارسال" style="text-align: center;background-color: #283287;color: white;outline: none; border: none; padding: 10px; border-radius: 10px;">
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <!-- end sec5 -->