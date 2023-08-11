<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostModel;

class CategoryModel extends Model
{
    protected $table = 'loaitin';
    protected $primaryKey = 'id';
    protected $fillable = ['ten', 'lang', 'thuTu', 'anHien','slug'];
    public function posts()
{
    return $this->hasMany(PostModel::class, 'idLT'); // 'category_id' là khóa ngoại trong bảng tin tham chiếu đến danh mục
}
}

