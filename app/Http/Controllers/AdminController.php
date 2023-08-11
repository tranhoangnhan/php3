<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel as Category;
use App\Models\PostModel as Post;

use Illuminate\Http\Request;
use App\Http\Requests\CheckPostAdd;
use App\Http\Requests\CheckCategoryAdd;
use Illuminate\Support\Str;



class AdminController extends Controller
{
    function index() {
        $post = Post::all();
        $category = Category::all();
        $totalPost = count($post);
        $totalCategory = count($category);
        $postTop1 = Post::orderBy('id','desc')->first();
        $totalPostHide = Post::where('anHien',0)->get();
        $totalPostHide = count($totalPostHide);

       
        return view('admin/home/dashboard',compact('totalPost','totalCategory','totalPostHide'));
    }
    function postDefault() {
        $category = Category::all();
        
        return view('admin/post/default',compact('category'));
    }
    function post($id) {
        $category = Category::find($id);
        $posts = Post::where('idLT', $id)->orderBy('id', 'desc')->paginate(4);
        

        return view('admin/post/index',compact('category','posts'));
    }
    function postAdd($id) {
        $category = Category::find($id);
        return view('admin/post/add',compact('category'));
    }
    function postAdd_($id, CheckPostAdd $request) {
        $t = new Post;
        $t->tieuDe = $request->input('tieuDe');
        $t->tomTat = $request->input('tomTat');
        $t->urlHinh = $request->input('urlHinh');
        $t->idLT = $id;
        $t->slug = Str::slug($request->input('tieuDe'));
        $t->save();
    
        // Chuyển hướng tới route để thêm slug
        return redirect('admins/post/'.$id);
    }
    
  
    
    function postEdit($id,$idPost) {
        $post = Post::find($idPost);
        $category = Category::find($id);
        return view('admin/post/edit',compact('category','post'));
    }
    function postEdit_($id,$idPost,CheckPostAdd $request) {
        
        $t = Post::find($idPost);
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLT = $id;
        $t->anHien = $_POST['trangThai'];
        $t->save();
        return redirect('admins/post/'.$id);
    
    }
    function postDelete($id,$idPost) {
        $post = Post::find($idPost);
        $post->delete();
        return redirect('admins/post/'.$id);
    }
    
    function category() {
        $categorys = Category::orderby('id','desc')->paginate(4);
        return view('admin/category/index',compact('categorys'));
    }
    function categoryAdd() {
        return view('admin/category/add');
    }
    function categoryAdd_(CheckCategoryAdd $request) {
        $t = new Category;
        $t->ten = $_POST['ten'];
        $t->slug = Str::slug($_POST['ten']);
        $t->save();
        return redirect('admins/category');
    }
    function categoryEdit($id) {
        $category = Category::find($id);
        return view('admin/category/edit',compact('category'));
    }
    function categoryEdit_($id,CheckCategoryAdd $request) {
        $t = Category::find($id);
        $t->ten = $_POST['ten'];
        $t->anHien = $_POST['trangThai'];
        $t->save();
        return redirect('admins/category');
    }
    function categoryDelete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('admins/category');
    }

    
    function thongbao() {
        return view('admin/blocks/403');
    }
}
