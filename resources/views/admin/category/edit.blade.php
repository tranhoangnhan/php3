@extends('layouts.admin')
@section('title')
Sửa bài viết
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <form action="/admins/category/edit/{{$category->id}}" method="post" class="bg-white">

            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Tên</label>
              <input type="text" name="ten" value="{{$category->ten}}" class="form-control" id="exampleInputName">
              @error('ten') <span class="text-danger">{{$message}}</span> @enderror
   <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            </div>
          
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Trạng thái</label>

                <div class="form-check">
             
                @if ($category->anHien==0)

                <input type="radio" class="form-check-input" value="0" name="trangThai" id="exampleInputPassword1" checked>
                Ẩn
                  </label>

                <input type="radio" class="form-check-input" value="1" name="trangThai" id="exampleInputPassword1"> Hiện

                @else
                <input type="radio" class="form-check-input" value="1" name="trangThai" id="exampleInputPassword1" checked> Hiện
                <input type="radio" class="form-check-input" value="0" name="trangThai" id="exampleInputPassword1"> Ẩn

                @endif
              </div>

              </div>
              <div class="mb-3">
               
                <button type="submit" class="btn btn-primary">Sửa</button>
            @csrf
          </form>
    </div>
    
   
 
  </div>
@endsection