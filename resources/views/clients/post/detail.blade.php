 @extends('layouts.clients')
    @section('content')
    @section('title')
    {{$post->tieuDe}}
    @endsection
    @section('des')
   {{$post->tomTat}}
    @endsection
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

    <!-- block news -->
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
            <div class="w-full py-3 mb-3">
              <h2 class="text-gray-800 text-3xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span> {{$post->tieuDe}}
                
              </h2>
             
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="max-w-full w-full px-4">
                <!-- Post content -->
                <div class="leading-relaxed pb-4">
                    {!!$post->noiDung!!}
                  <div class="relative flex flex-row items-center justify-between overflow-hidden bg-gray-100 dark:bg-gray-900 dark:bg-opacity-20 mt-12 mb-2 px-6 py-2">
                    <div class="my-4 text-sm">
                      <!--author-->
                      <span class="mr-2 md:mr-4">
                        <!-- <i class="fas fa-user me-2"></i> -->
                        <svg class="bi bi-person mr-2 inline-block" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"></path>
                        </svg> đăng bởi <a class="font-semibold" href="#">Admin</a>
                      </span>
                      <!--date-->
                      <time class="mr-2 md:mr-4" datetime="2020-10-22 10:00">
                        <!-- <i class="fas fa-calendar me-2"></i> -->
                        <svg class="bi bi-calendar mr-2 inline-block" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M14 0H2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M6.5 7a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm-9 3a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2zm3 0a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg> {{$post->created_at->format('d/m/Y H:i:s')}}
                      </time>
                      <!--view-->
                      <span class="mr-2 md:mr-4">
                        <!-- <i class="fas fa-eye me-2"></i> -->
                        <svg class="bi bi-eye mr-2 inline-block" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 001.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0014.828 8a13.133 13.133 0 00-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 001.172 8z" clip-rule="evenodd"></path>
                          <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM4.5 8a3.5 3.5 0 117 0 3.5 3.5 0 01-7 0z" clip-rule="evenodd"></path>
                        </svg> {{$post->xem}} lượt xem
                      </span>
                      <!--end view-->
                    </div>

                    <div class="hidden lg:block">
                      <ul class="space-x-3">
                        <!--facebook-->
                        <li class="inline-block">
                          <a target="_blank" class="hover:text-red-700" href="#" title="Share to Facebook">
                            <!-- <i class="fab fa-facebook fa-2x"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"></path></svg>
                          </a>
                        </li>
                        <!--twitter-->
                        <li class="inline-block">
                          <a target="_blank" class="hover:text-red-700" href="#" title="Share to Twitter">
                            <!-- <i class="fab fa-twitter fa-2x"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"></path></svg>
                          </a>
                        </li>
                        <!--instagram-->
                        <li class="inline-block">
                          <a target="_blank" class="hover:text-red-700" href="#" title="Share to Instagram">
                            <!-- <i class="fab fa-instagram fa-2x"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" viewBox="0 0 512 512"><path fill="currentColor" d="M349.33,69.33a93.62,93.62,0,0,1,93.34,93.34V349.33a93.62,93.62,0,0,1-93.34,93.34H162.67a93.62,93.62,0,0,1-93.34-93.34V162.67a93.62,93.62,0,0,1,93.34-93.34H349.33m0-37.33H162.67C90.8,32,32,90.8,32,162.67V349.33C32,421.2,90.8,480,162.67,480H349.33C421.2,480,480,421.2,480,349.33V162.67C480,90.8,421.2,32,349.33,32Z"></path><path fill="currentColor" d="M377.33,162.67a28,28,0,1,1,28-28A27.94,27.94,0,0,1,377.33,162.67Z"></path><path fill="currentColor" d="M256,181.33A74.67,74.67,0,1,1,181.33,256,74.75,74.75,0,0,1,256,181.33M256,144A112,112,0,1,0,368,256,112,112,0,0,0,256,144Z"></path></svg>
                          </a>
                        </li><!--end instagram-->
                      </ul>
                    </div>
                  </div>
                </div>
                
                <!-- author -->
                <div class="flex flex-wrap flex-row -mx-4 justify-center py-4">
                  <div class="flex-shrink max-w-full px-4 w-1/3 sm:w-1/4 md:w-1/6">
                    <a href="#"><img class="rounded-full border max-w-full h-auto dark:border-gray-700" src="src/img/dummy/avatar.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="author"></a>
                  </div>
                  <div class="flex-shrink max-w-full px-4 w-2/3 sm:w-3/4 md:w-10/12">
                    <!--name-->
                    <p class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">
                      <span class="font-semibold">Ari budin</span>
                    </p>
                    <!-- website -->
                    <p class="mb-1"><a target="_blank" class="text-red-700" href="#">https://aribudin.com</a></p>
                    <!--description-->
                    <p>Programmer, Father, Husband, I design and develop Bootstrap template</p>
                  </div>
                </div>

                <!-- Comments -->
                <div id="comments" class="pt-16">
                  <!--title-->
                  <h3 class="text-2xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">5 Comments</h3>

                  <!--comment list-->
                  <ol class="mb-4">
                    <li class="py-2 mt-6">
                      <div class="pb-4 border-b border-gray-200 dark:border-gray-600 border-dashed">
                        <footer>
                          <img class="w-20 h-20 border border-gray-200 dark:border-gray-700 max-w-full float-left mr-4" src="src/img/avatar2.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="avatar">
                          <div>
                            <a class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100" href="#" target="_blank">Carlos vila</a>
                            <span class="md:float-right text-sm">
                              <time datetime="2020-10-27">Oct 27, 2020</time>
                            </span>
                          </div>
                        </footer>
                        <div>
                          <p>I like this themes, fast loading and look profesional</p>
                        </div>
                        <div>
                          <a class="text-red-700 hover:text-red-800" href="#comment-form">Reply</a>
                        </div>
                      </div>
                      <ul class="ml-12 md:ml-24">
                        <li class="py-2 mt-6">
                          <div class="pb-4 border-b border-gray-200 dark:border-gray-600 border-dashed">
                            <footer>
                              <img class="w-20 h-20 border border-gray-200 dark:border-gray-700 max-w-full float-left mr-4" src="src/img/avatar.jpg" onerror="this.src='{{ asset('default_image.png') }}'" alt="avatar">
                              <div>
                                <a class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100" href="#" target="_blank">Ari Budin</a>
                                <span class="md:float-right text-sm">
                                  <time datetime="2020-10-27">Oct 27, 2020</time>
                                </span>
                              </div>
                            </footer>
                            <div>
                              <p>Thank you Carlos!</p>
                            </div>
                            <div>
                              <a class="text-red-700 hover:text-red-800" href="#comment-form">Reply</a>
                            </div>
                          </div>
                          <ul class="md:ml-24">
                            <li class="py-2 mt-6" id="comment-5">
                              <div class="pb-4 border-b border-gray-200 dark:border-gray-600 border-dashed">
                                <footer>
                                  <img class="w-20 h-20 border border-gray-200 dark:border-gray-700 max-w-full float-left mr-4" src="src/img/avatar2.jpg"  onerror="this.src='{{ asset('default_image.png') }}'"alt="avatar">
                                  <div>
                                    <a class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100" href="#" target="_blank">Carlos vila</a>
                                    <span class="md:float-right text-sm">
                                      <time datetime="2020-10-27">Oct 27, 2020</time>
                                    </span>
                                  </div>
                                </footer>
                                <div>
                                  <p>You're welcome!</p>
                                </div>
                                <div>
                                  <a class="text-red-700 hover:text-red-800" href="#comment-form">Reply</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="py-2 mt-6">
                      <div class="pb-4 border-b border-gray-200 dark:border-gray-600 border-dashed">
                        <footer>
                          <img class="w-20 h-20 border border-gray-200 dark:border-gray-700 max-w-full float-left mr-4" src="src/img/avatar.jpg"  onerror="this.src='{{ asset('default_image.png') }}'"alt="avatar">
                          <div>
                            <a class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100" href="#" target="_blank">Ari Budin</a>
                            <span class="md:float-right text-sm">
                              <time datetime="2020-10-27">Oct 27, 2020</time>
                            </span>
                          </div>
                        </footer>
                        <div>
                          <p>Please support me with give positive rating!</p>
                        </div>
                        <div>
                          <a class="text-red-700 hover:text-red-800" href="#comment-form">Reply</a>
                        </div>
                      </div>
                      <ul class="ml-12 md:ml-24">
                        <li class="py-2 mt-6">
                          <div class="pb-4 border-b border-gray-200 dark:border-gray-600 border-dashed">
                            <footer>
                              <img class="w-20 h-20 border border-gray-200 dark:border-gray-700 max-w-full float-left mr-4" src="src/img/avatar2.jpg"  onerror="this.src='{{ asset('default_image.png') }}'"alt="avatar">
                              <div>
                                <a class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100" href="#" target="_blank">Carlos vila</a>
                                <span class="md:float-right text-sm">
                                  <time datetime="2020-10-27">Oct 27, 2020</time>
                                </span>
                              </div>
                            </footer>
                            <div>
                              <p>Yes Sure!</p>
                            </div>
                            <div>
                              <a class="text-red-700 hover:text-red-800" href="#comment-form">Reply</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ol>

                  <!--comment form-->
                  <div id="comment-form" class="mt-12">
                    <h4 class="text-2xl leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-100">NẠN MUỐN BÌNH LUẬN</h4>
                    <p class="mb-5">Địa chỉ email của bạn sẽ được công khai</p>
                    <div>
                      <form action="#" novalidate="">
                        <div class="mt-2"></div>
                        <div class="mb-6">
                          <textarea class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Bình luận" aria-label="insert comment" rows="4" required=""></textarea>
                        </div>
                        <div class="mb-6">
                          <input class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Họ và tên" aria-label="name" type="text" required="">
                        </div>
                        <div class="mb-6">
                          <input class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Email" aria-label="email" type="text" required="">
                        </div>
                        <div class="mb-6">
                          <input class="w-full leading-5 relative py-3 px-5 text-gray-800 bg-white border border-gray-100 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Trang web:" aria-label="website" type="text">
                        </div>
                        <div class="mb-6">
                          <div>
                            <input class="form-checkbox h-5 w-5 text-red-500 dark:bg-gray-700 border border-gray-100 dark:border-gray-700 focus:outline-none" id="comment-cookies" name="comment-cookies" type="checkbox" value="yes">
                            <label class="ml-2" for="comment-cookies">
                              Lưu lại thông tin cho lần sau
                            </label>
                          </div>
                        </div>
                        <div class="mb-6">
                          <button type="submit" class="flex items-center py-3 px-5 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0">Đăng bình luận</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
            <div class="w-full bg-white">
              <div class="mb-6">
                <div class="p-4 bg-gray-100">
                  <h2 class="text-lg font-bold">Bài viết liên quan về {{$category->ten}}</h2>
                </div>
                <ul class="post-number">
                    @foreach($relatedPosts as $relatedPost)
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="/post/{{$category->slug}}/{{$relatedPost->slug}}">{{$relatedPost->tieuDe}}</a>
                  </li>
                 @endforeach
                </ul>
              </div>
            </div>

            <div class="text-sm py-6 sticky">
              <div class="w-full text-center">
                <a class="uppercase" href="#">Advertisement</a>
                <a href="#">
                  <img class="mx-auto" src=""  onerror="this.src='{{ asset('default_image.png') }}'"alt="advertisement area">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- end main -->
@endsection