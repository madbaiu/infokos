<?php

namespace App\Http\Livewire;

use App\Models\Kriteria;
use Livewire\Component;

class KriteriaKomponen extends Component
{
    public function render()
    {
        return view('livewire.kriteria-komponen', ['lists' => Kriteria::all()])->extends('layouts.app')->section('content');
    }
}
