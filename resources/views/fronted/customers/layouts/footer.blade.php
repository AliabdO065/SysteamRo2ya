<?php
    use App\Models\Customers;
  
        $slide = Customers::find(1);
        $slides = json_decode($slide, true);
        $contentasstring =  $slides['content'];
        $content = explode('#x#', $contentasstring);
        $item = [];
        foreach ($content as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item[$key] = $value;
        }
      $logo = $item['imgl'];
      $about_words = '';

        $slide2 = Customers::find(5);
        $slides2 = json_decode($slide2, true);
        $contentasstring2 =  $slides2['content'];
        $content2 = explode('#x#', $contentasstring2);
        $item2 = [];
        foreach ($content2 as $pair) {
            list($key, $value) = explode('=#=', $pair);
            $item2[$key] = $value;
        }



        
        $slide3 = Customers::find(7);
        $slides3 = json_decode($slide3, true);
        $contentasstring3 =  $slides3['content'];
        $content3 = explode('#xt#', $contentasstring3);



?>
    <!--footer-->
    <div class="s-footer cairo-uniquifier" dir="">
        <div class="container py-5">
          <div class="row g-4 align-items-center">
            <div class="col-md-6 col-lg-3">
              <div class="title-footer">
                <h1 class="mt-0"><strong>
                  @if(app()->getLocale() == 'ar')
                  {{$item['name']}}
                  @else
                  {{$item['name_en']}}
                  @endif
  
                </strong></h1>
              </div>
              
              <div class="logo-footer mt-5 mb-5">
                <img src="{{asset($logo)}}" class="img-fluid mt-0" alt="" />
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 WOW fadeIn"
              dir="rtl"
              data-wow-delay="0.2s"
            >
              <h3 class="mt-3 mb-3 text-capitalize">{{ __('messages.about') }}</h3>
              <p class="mt-3 mb-3 text-capitalize">
                <br />
                {{-- @if (!empty($item['wordheader'][0]))
                @for($i=0;$i<4000; $i++ )
                  @if (!empty($item['wordheader'][$i])) 
                      @php
                        $about_words .= $item['wordheader'][$i];
                      @endphp
                  @endif
                @endfor
                {{$about_words}}                    
                @endif --}}
                @if(app()->getLocale() == 'ar')
                {{$item['wordheader']}}
                @else
                {{$item['wordheader_en']}}
                @endif


              </p>
            </div>
  
            <div
              class="col-md-6 col-lg-3 WOW fadeIn"
              dir="rtl"
              data-wow-delay="0.4s"
            >
              <h3 class="mb-4">{{ __('messages.services') }}</h3>
              <ul class="">

                @if (!empty($content3[0]))
                        @foreach ($content3 as $i => $slides)
                        <?php 
                                $string = $slides;
                                $pairs = explode('#x#', $string);
                                $slide = [];
                                foreach ($pairs as $pair) {
                                    list($key, $value) = explode('=#=', $pair);
                                    $slide[$key] = $value;
                                }
                        ?>
                      <li class="mt-3 mb-3">
                        <a href="#">
                            {{-- @if(app()->getLocale() == 'ar') --}}
                            {{$slide['title']}}
                            {{-- @else --}}
                            {{-- {{$slide['title_en']}} --}}
                            {{-- @endif --}}
                          </a><span><i class="fa-solid fa-angle-right me-2"></i></span>
                      </li>
                    @endforeach                        
                @endif
              </ul>
            </div>
  
            <div
              class="col-md-6 col-lg-3 WOW fadeIn"
              dir="rtl"
              data-wow-delay="0.4s">
              <h3 class="mt-3 mb-3 text-capitalize contact">{{ __('messages.contact') }}</h3>
              <div class="titles WOW fadeIn">
                <ul class="text-capitalize text-black-50 mt-0 mb-0">
                  <li class="mt-3 mb-3">
                    <a href="#" class="location">
                      @if(app()->getLocale() == 'ar')
                      {{$item2['address']}}
                      @else
                      {{$item2['address_en']}}
                      @endif
                      <a>
                    <span><i class="fa fa-map-marker-alt me-2"></i></span>
                  </li>
                  <li class="mt-3 mb-3">
                    <a href="#"> {{ $item2['phone'] }}</a
                    ><span><i class="fa fa-phone me-2"></i></span>
                  </li>
                  <li class="mt-3 mb-3">
                    <a href="{{$item2['face']}}" class="face"> <span><i style="font-size: 25px" class="fa-brands fa-facebook me-2"></i></span>  </a>
                  </li>
                  <li class="mt-3 mb-3">
                    <a href=" {{ $item2['insta'] }}" class="insta"> <span><i style="font-size: 25px" class="fa-brands fa-instagram me-2"></i></span>  </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--footer-->