<?php

namespace App;
use app\matkul;
use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = ['no', 'kode_matkul', 'nama_matkul', 'sks'];
    public $timestamps = false;

    public function nilai()
    {
        return $this->hasMany(nilai::class, 'matkul_id', 'no');
    }
}
