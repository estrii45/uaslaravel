<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['id_user', 'npm', 'tempat_lahir', 'tgl_lahir', 'gender', 'telephone', 'alamat'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function nilai()
    {
        return $this->hasOne(nilai::class, 'id_user', 'id');
    }

}
