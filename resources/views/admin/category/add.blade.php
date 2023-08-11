@extends('layouts.admin')
@section('title')
Thêm danh mục
@endsection
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      
        <form action="/admins/category/add" method="post" class="bg-white">

            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Tên</label>
              <input type="text" name="ten" value="{{old('ten')}}" class="form-control" id="exampleInputName">
              @error('ten') <span class="text-danger">{{$message}}</span> @enderror
              
            </div>
          
        
            
            
              <div class="mb-3">
              
                <button type="submit" class="btn btn-primary">Thêm</button>
            @csrf
          </form>
          
    </div>
    
   
 
  </div>
@endsection