<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswamodel extends Model
{
    use HasFactory;

    protected $table ='tb_siswa';
    protected $primaryKey='nisn';
    public $incrementing=false;
    public $guarded=[];
}
