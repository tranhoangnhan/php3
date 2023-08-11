<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CategoryModel;
use App\Models\PostModel as Post;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('clients/blocks/header', function ($view) {
            $category = CategoryModel::limit(5)->get();
            $view->with('category', $category);
        });
        view()->composer('layouts/admin', function ($view) {
            $categoryShow = CategoryModel::all();

            $categoriesWithPostCounts = [];
            
            foreach ($categoryShow as $category) {
                $postCount = $category->posts()->count(); // Tính toán số lượng bài viết liên quan đến danh mục
                $categoriesWithPostCounts[] = [
                    'ten' => $category->ten, // Tên danh mục
                    'postCount' => $postCount, // Số lượng bài viết
                ];
            }

        $view->with('categoriesWithPostCounts', $categoriesWithPostCounts);
            
        });
    }
}
