    <!-- start sec4 -->
    <div class="sec-4 overflow-hidden" id="customersOpinions">
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
              أراء العملاء
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
      <div class="nv-hed my-5 fs-1 me-5"id="text-3">
        <h3 style="text-align: end" >
          هذا ما قال عنا بعض عملائنا اللذين وضعوا كامل ثقتهم , في شركتنا
        </h3>
      </div>
      <!-- inimm -->
      <div class="void eslam" id="void">
        <div class="crop">
        <ul id="card-list" style="--count: 6;">
        @foreach($customers as $customer )
          <li><div class="card"><a  href=""><span class="model-name ">{{ $customer->name}}</span><span>{{ $customer->content}}</span></a></div></li>
        @endforeach 
        <div class="last-circle"></div>
        <div class="second-circle"></div>
        </div>
        <div class="mask"></div>
        <div class="center-circle"></div>
      <div>
      <!-- sosxmsko -->
     
    </div>
  
  </div>
  <div
  class="add-coment"
  style="
    background-color: #283287;
    padding: 20px 40px;
    width: 25%;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 40px;
    display: flex;
    border-radius: 20px;
    justify-content: center;
    align-items: center;
  "
>
<div
class="add-com text-end"
style="
  padding: 10px;
  background-color: white;
  width: 75%;
  display: flex;
  border-radius: 20px;
"
>
<form action="{{route('storeOpinion')}}" method="POST" >
  @csrf
  <input
  type="text"
  name="name"
  placeholder="الاسم"
  style="
    outline: none;
    padding: 2px;
    width: 75%;
    border-radius: 5px;
    border: none;
  "
  required
/>
<input
  type="text"
  name="content"
  placeholder="اكتب رائيك"
  style="
    outline: none;
    padding: 2px;
    width: 75%;
    border-radius: 5px;
    border: none;
  "
  required
/>
</div>
<button value="submit">ارسال</button>
</form>
</div>

    <!-- end sec4 -->