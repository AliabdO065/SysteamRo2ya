    <!-- start sec3 -->
    <div class="sec-3">
      <div class="container-fluid">
        <div class="row">
          <div class="nav-sec2 position-relative">
            <h1
              style="
                font-family: Franklin Gothic Heavy;
                font-size: 40px !important;
                font-weight: 400;
                text-align: center;
                position: absolute;
                right: 40px;
                top: 20px;
                color: white;
              "
            >
              أعمالنا
            </h1>
            <img
              src="{{asset('fronted/employees/assets/Rectangle 73.png')}}"
              width="100%"
              height="70px"
              alt=""
            />
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row d-flex justify-content-between g-5 pt-5 pb-5">

          @foreach($projects as $project)
          <div class="col-12 col-md-6 col-lg-4 col-sm-12">
            <div
              class="car-1"
              style="
                width: 100%;
                height: 300px;
                gap: 0px;
                border: 2px 0px 0px 0px;
                opacity: 0px;
                border: 2px solid #000000;
                box-shadow: 0px 4px 4px 0px #00000040;
                border-radius: 2%;
                background: #d9d9d9;
                display: flex;
                flex-direction: column;
                justify-content: end;
                align-items: end;
                position: relative;
              "
            >
              <h1
                style="
                  position: absolute;
                  bottom: 20px;
                  font-size: 27px;
                  color: white;
                  left: 120px;
                "
              >
                {{$project->title}}
              </h1>
              <img width="100%" src="{{asset('fronted/employees/assets/'.$project->image)}}" alt="" />
            </div>
          </div>
         @endforeach
          
        </div>
      </div>
    </div>
    <!-- start sec3 -->
