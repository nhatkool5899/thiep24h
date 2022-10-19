<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;

    public $timestamp = false;
    protected $fillable = [
        'maso',
        'danhmuc_id',
        'hinhanh',
        'gia'
    ];

    protected $primary = 'id';
    protected $table = 'tbl_sanpham';

    public function danhmuc()
    {
        return $this->belongsTo(danhmuc::class,'danhmuc_id');
    }
}
