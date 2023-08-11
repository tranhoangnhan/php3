@extends('layouts.admin')
@section('title')
Sửa bài viết
@endsection
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible text-white" role="alert">
        <b>        Các lỗi bạn đang gặp phải:
        </b> <br>
        @foreach ($errors->all() as $error)
        <span class="text-sm">{{$error}}</span>
        <br>
        @endforeach
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
        <form action="/admins/post/{{$category->id}}/edit/{{$post->id}}" method="post" class="bg-white">

            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Tên</label>
              <input type="text" name="tieuDe" value="{{$post->tieuDe}}" class="form-control" id="exampleInputName">
              @error('tieuDe') <span class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputContent" class="form-label">Tóm tắt</label>
                <input type="text" class="form-control" value="{{$post->tomTat}}" name="tomTat" id="exampleInputContent">
                @error('tomTat') <span class="text-danger">{{$message}}</span> @enderror

              </div>
        
            
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Hình</label>
                <input type="text" class="form-control" value="{{$post->urlHinh}}" name="urlHinh" id="exampleInputPassword1">
                @error('urlHinh') <span class="text-danger">{{$message}}</span> @enderror

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Trạng thái</label>

                <div class="form-check">
             
                @if ($post->anHien==0)

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
                <label for="exampleInputContent" class="form-label">Loại tin</label>
                <input type="hidden" name="idLT" value="{{$category->id}}">
                <input type="text" name="idLT3" class="form-control" disabled value="{{$category->ten}}" id="exampleInputContent">
               
                <button type="submit" class="btn btn-primary">Sửa</button>
            @csrf
          </form>
    </div>
    
   
 
  </div>
@endsection