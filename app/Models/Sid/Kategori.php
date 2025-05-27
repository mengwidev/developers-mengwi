<?php

namespace App\Models\Sid;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $connection = 'SID_DB';
    protected $table = 'kategori';
    public $timestamps = false;

    protected $fillable = ['kategori'];
}
