<?php

namespace App\Models;

use App\Models\SubKriteria;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alternatif extends Model
{
    protected $table = 'alternatif';
    protected $guarded = [];


    public function subkriteria()
    {
        return $this->belongsToMany(SubKriteria::class);
    }
    public function foto()
    {
        return $this->hasMany(Foto::class, 'alternatif_id', 'id');
    }
}
