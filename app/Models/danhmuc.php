<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'tendanhmuc',
        'slug'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_danhmuc';

    public function sanpham()
    {
        return $this->hasMany(sanpham::class,'danhmuc_id','id');
    }
}
