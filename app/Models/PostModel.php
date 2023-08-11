<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'tin';
    protected $primaryKey = 'id';
    protected $fillable = ['tieuDe', 'tomTat', 'noiDung', 'urlHinh', 'noiBat', 'lang', 'idLT', 'xem', 'created_at', 'updated_at','slug'];
}
