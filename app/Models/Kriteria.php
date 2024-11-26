<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $guarded = '';
    public $primaryKey = 'id';
    protected $with = ['subkriteria'];
    public $incrementing = true;

    public function subkriteria()
    {
        return $this->hasMany(SubKriteria::class);
    }
}
