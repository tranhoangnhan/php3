@extends('layouts.admin')
@section('title')
{{$category->ten}}
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Quản trị bài viết danh mục: <i><u>{{$category->ten}}</u></i>
                 </h6>
                 <a href="/admins/post"><button class="btn btn-success  mx-3">Chọn danh mục khác</button></a>
                

            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bài viết</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lượt xem</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày đăng</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập nhật</th>
                    
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><a href="/admins/post/{{$category->id}}/add">Thêm bài viết</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{asset($post->urlHinh)}}" onerror="this.src='{{ asset('default_image.png') }}'" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <a href="/post/{{$category->slug}}/{{$post->slug}}"  target="_blank"><h6 class="mb-0 text-sm">{{$post->tieuDe}}</h6></a>
                          
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$post->xem}}</p>
                      <p class="text-xs text-secondary mb-0">Lượt xem</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        @if ($post->anHien==0)
                        <span class="badge badge-sm bg-gradient-danger">Ẩn</span>
                        @endif
                        @if ($post->anHien==1)
                      <span class="badge badge-sm bg-gradient-success">Hiện</span>
                        @endif
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$post->created_at->format('d/m/Y H:i:s')}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$post->updated_at->format('d/m/Y H:i:s')}}</span>
                    </td>
                    <td class="align-middle">
                      <a href="/admins/post/{{$category->id}}/edit/{{$post->id}}" class=" btn btn-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Sửa
                      </a>
                      <a onclick="return confirm('Bạn đang thực hiện xóa bài viết thuộc danh mục {{$category->ten}}. Bài viết: {{$post->tieuDe}}. Bạn đã chắc chắn?')"  href="/admins/post/{{$category->id}}/delete/{{$post->id}}" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Xóa
                      </a>
                    </td>
                    
                  </tr>
                  @endforeach

                </tbody>

              </table>
              <div class=" align-items-center justify-content-lg-between text-center">
                {{$posts->links()}}
        
            </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
@endsection