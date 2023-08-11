@extends('layouts.admin')
@section('title')
Quản lý danh mục
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Quản trị danh mục
                 </h6>
                

            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bài viết</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trạng thái</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><a href="/admins/category/add">Thêm danh mục</a></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categorys as $category)

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                          <a href="/category/{{$category->slug}}"  target="_blank"><h6 class="mb-0 text-sm">{{$category->ten}}</h6></a>
                          
                        </div>
                      </div>
                    </td>
                 
                    <td class="align-middle text-center text-sm">
                        @if ($category->anHien==0)
                        <span class="badge badge-sm bg-gradient-danger">Ẩn</span>
                        @endif
                        @if ($category->anHien==1)
                      <span class="badge badge-sm bg-gradient-success">Hiện</span>
                        @endif
                    </td>
                   
                    <td class="align-middle">
                      <a href="/admins/category/edit/{{$category->id}}" class=" btn btn-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Sửa
                      </a>
                      <a onclick="return confirm('Bạn đang thực hiện xóa danh mục {{$category->ten}}. Bạn đã chắc chắn?')" href="/admins/category/delete/{{$category->id}}" class="btn btn-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Xóa
                      </a>
                    </td>
                    
                  </tr>
                  @endforeach

                </tbody>
                
              </table>
              <div class=" align-items-center justify-content-lg-between text-center">
                {{$categorys->links()}}
        
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