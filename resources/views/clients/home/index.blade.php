@extends('layouts.clients')

  <!-- =========={ MAIN }==========  -->
  <main id="content">
    <!-- advertisement -->
    <div class="bg-gray-50 py-4 hidden">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="mx-auto table text-center text-sm">
          <a class="uppercase" href="#">Advertisement</a>
          <a href="#">
            <img src="src/img/ads/ads_728.jpg" alt="advertisement area">
          </a>
        </div>
      </div>
    </div>

    <!-- hero big grid -->
    <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <!-- big grid 1 -->
        <div class="flex flex-row flex-wrap">
          <!--Start left cover-->
          <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
            <div class="relative hover-img max-h-98 overflow-hidden">
              <a href="#">
                <img class="max-w-full w-full mx-auto h-auto" src="{{asset($postTop1->urlHinh)}}" onerror="this.src='{{ asset('default_image.png') }}'" alt="Image description">
              </a>
              <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                <a href="/post/{{$postTop1->id}}">
                  <h2 class="text-3xl font-bold capitalize text-white mb-3">{{$postTop1->tieuDe}}</h2>
                </a>
                <p class="text-gray-100 hidden sm:inline-block">{{$postTop1->tomTat}}</p>
                <div class="pt-2">
                </div>
              </div>
            </div>
          </div>

          <!--Start box news-->
          <div class="flex-shrink max-w-full w-full lg:w-1/2">
            <div class="box-one flex flex-row flex-wrap">
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img2.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">News magazines are becoming obsolete, replaced by gadgets</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Techno</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img3.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Minimalist designs are starting to be popular with the next generation</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Architecture</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img4.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Tips for decorating the interior of the living room</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Interior</div>
                    </div>
                  </div>
                </div>
              </article>
            

              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img5.jpg"onerror="this.src='{{ asset('default_image.png') }}'" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Online taxi users are increasing drastically ahead of the new year</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Lifestyle</div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-white">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>TIN NỔI BẬT
              </h2>
            </div>
          
            <div class="flex flex-row flex-wrap -mx-3">
                @foreach ($postsByCategories[12] as $post)
                
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img ">
                  <a href="/post/{{$post->slug}}">
                    <img class="max-w-full w-full mx-auto" style="height:300px" src="{{asset($post->urlHinh)}}" onerror="this.src='{{ asset('default_image.png') }}'" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="/post/{{$post->slug}}">{{$post->tieuDe}}</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">{{$post->tomTat}}</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
          </div>
          <!-- right -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
            <div class="w-full bg-gray-50 h-full">
              <div class="text-sm py-6 sticky">
                <div class="w-full text-center">
                  <a class="uppercase" href="#">Advertisement</a>
                  <a href="#">
                    <img class="mx-auto" src="https://www.elegantthemes.com/blog/wp-content/uploads/2020/02/000-404.png" alt="advertisement area">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- slider news -->
    <div class="relative bg-gray-50" style="background-image: url('src/img/bg.jpg');background-size: cover;background-position: center center;background-attachment: fixed">
      <div class="bg-black bg-opacity-70">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
          <div class="flex flex-row flex-wrap">
            <div class="flex-shrink max-w-full w-full py-12 overflow-hidden">
              <div class="w-full py-3">
                <h2 class="text-white text-2xl font-bold text-shadow-black">
                  <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Xã hội
                </h2>
              </div>
              <div id="post-carousel" class="splide post-carousel">
                <div class="splide__track">
                  <ul class="splide__list">
                    @foreach ($postsByCategories[9] as $post)
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" style="height:400px" src="{{asset($post->urlHinh)}}" onerror="this.src='{{ asset('default_image.png') }}'" alt ="{{$post->tieuDe}}">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="/post/{{$post->id}}">{{$post->tieuDe}}</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>{{$category->slug}}</a>
                          </div>
                        </div>
                      </div>
                    </li>
                   @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <div class="flex-shrink max-w-full w-full overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Du lịch
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
                @foreach ($postsByCategories[3] as $post)
                <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                    <div class="flex flex-row sm:block hover-img">
                      <a href="">
                        <img class="max-w-full w-full mx-auto" style="height:300px" src="{{asset($post->urlHinh)}}" onerror="this.src='{{ asset('default_image.png') }}'"alt ="{{$post->tieuDe}}">
                      </a>
                      <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                        <h3 class="text-lg font-bold leading-tight mb-2">
                          <a href="/post/{{$post->id}}">{{$post->tieuDe}}</a>
                        </h3>
                        <p class="hidden md:block text-gray-600 leading-tight mb-1">{{$post->tomTat}}</p>
                        <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Du lịch</a>
                      </div>
                    </div>
                  </div>
             @endforeach    
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Mẹo vặt
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="flex-shrink max-w-full w-full px-3 pb-5">
                <div class="relative hover-img max-h-98 overflow-hidden">
                  <!--thumbnail-->
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img2.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="Image description">
                  </a>
                  <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                    <!--title-->
                    <a href="#">
                      <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                    </a>
                    <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>                                                  
                    <!-- author and date -->
                    <div class="pt-2">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe</div>
                    </div>
                  </div>
                </div>
              </div>
              @foreach ($postsByCategories[24] as $post)
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" style="height:300px" src="{{asset($post->urlHinh)}}" onerror="this.src='{{ asset('default_image.png') }}'" alt ="{{$post->tieuDe}}">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="/post/{{$post->id}}">{{$post->tieuDe}}</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">{{$post->tomTat}}</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Mẹo vặt</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <!-- right -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
            <div class="w-full bg-white">
              <div class="mb-6">
                <div class="p-4 bg-gray-100">
                  <h2 class="text-lg font-bold">Phổ biến nhất</h2>
                </div>
                <ul class="post-number">
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="text-sm py-6 sticky">
              <div class="w-full text-center">
                <a class="uppercase" href="#">Advertisement</a>
                <a href="#">
                  <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- post -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Latest news
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="flex-shrink max-w-full w-full px-3 pb-5">
                <div class="relative hover-img max-h-98 overflow-hidden">
                  <!--thumbnail-->
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img15.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                    <!--title-->
                    <a href="#">
                      <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                    </a>
                    <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>                                                  
                    <!-- author and date -->
                    <div class="pt-2">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img24.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img17.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img25.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img12.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img8.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pr-8 lg:pt-14 lg:pb-8 order-first">
            <div class="w-full bg-white">
              <div class="mb-6">
                <div class="p-4 bg-gray-100">
                  <h2 class="text-lg font-bold">Most Popular</h2>
                </div>
                <ul class="post-number">
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="text-sm py-6 sticky">
              <div class="w-full text-center">
                <a class="uppercase" href="#">Advertisement</a>
                <a href="#">
                  <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main><!-- end main -->

 