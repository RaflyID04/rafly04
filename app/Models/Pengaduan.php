<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gambar()
    {
        return $this->hasMany(Gambar::class, 'id_pengaduan', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Pengaduan::class, 'id_kategori', 'id');
    }

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class, 'id_pengaduan', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_masyarakat', 'id');
    }
}
