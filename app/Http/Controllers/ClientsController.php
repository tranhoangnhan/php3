<?php

namespace App\Http\Controllers;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Http\Request;

class ClientsController extends Controller
{   
        function index() {
            $limitsByCategories = [
                24 => 6,
                12 => 6,
                3 => 8, // Loại có idLT là 2 sẽ hiển thị 5 bài viết
                9 => 10, // Loại có idLT là 3 sẽ hiển thị 3 bài viết
                // Thêm các cặp khóa (idLT) và giá trị (limit) cho các loại khác nếu cần
            ];
            $postsByCategories = [];
            $allCategories = CategoryModel::all();
            $postTop1 = PostModel::orderBy('id','asc')->first();
        
            foreach ($allCategories as $category) {
                $limit = isset($limitsByCategories[$category->id]) ? $limitsByCategories[$category->id] : 10;
                $postsByCategories[$category->id] = PostModel::where('idLT', $category->id)->where('anHien',1)->orderBy('id', 'desc')->limit($limit)->get();
                $category = CategoryModel::find($category->id);
                $category_slug = $category->slug;
            }
                        

            
            return view('clients/home/index',compact('postsByCategories','postTop1','category'));
        }
        function detail2($slugct,$slug) {
            $id = PostModel::where('slug', $slug)->first()->id;
            $post = PostModel::find($id);
            $relatedPosts = PostModel::where('idLT', $post->idLT)->where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();
            $category = CategoryModel::find($post->idLT);
            
            $viewCount = $post->xem;
            $post->xem = $viewCount + 1;
            $post->save();
            if($post->anHien == 0) {
                return redirect('/')->with('error', 'Bạn hiện không thể xem bài viết này. Bạn sẽ được đưa về trang chủ.');
            } else {
                return view('clients/post/detail', compact('post', 'relatedPosts', 'category'));

            }
        }
        function detail($slug) {
            $id = PostModel::where('slug', $slug)->first()->id;
            $post = PostModel::find($id);
            $relatedPosts = PostModel::where('idLT', $post->idLT)->where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();
            $category = CategoryModel::find($post->idLT);
            
            $viewCount = $post->xem;
            $post->xem = $viewCount + 1;
            $post->save();
            if($post->anHien == 0) {
                return redirect('/')->with('error', 'Bạn hiện không thể xem bài viết này. Bạn sẽ được đưa về trang chủ.');
            } else {
                return view('clients/post/detail', compact('post', 'relatedPosts', 'category'));

            }
        }
        function category($slug) {
            $id = CategoryModel::where('slug', $slug)->first()->id;
            $category = CategoryModel::find($id);
            $posts = PostModel::where('idLT', $id)->orderBy('id', 'desc')->paginate(6);
            $relatedPosts = PostModel::where('idLT', $id)->where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();
            return view('clients/category/index', compact('category', 'posts', 'relatedPosts'));
        }
   
   
}
