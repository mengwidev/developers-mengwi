<?php

namespace App\Models\Sid;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $connection = 'SID_DB';
    protected $table = 'artikel';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'isi',
        'id_kategori',
        'tgl_upload',
        'gambar',
        'gambar1',
        'gambar2',
        'gambar3',
        'dokumen',
        'link_dokumen',
        'slug',
        'hit',
        'tipe',
        'enabled',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
