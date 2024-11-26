<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alternatif;
use Livewire\WithPagination;

class DashboardKomponen extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search, $data;
    public $isDetail = false;

    public function render()
    {
        // $fasilitas = ['Ruang Kelas', 'Toilet', 'Taman Bermain', 'Ruang UKS', 'Aula', 'Perpustakaan', 'Gudang', 'Dapur', 'Ruang Administrasi', 'Ruang Makan', 'Kebun'];

        // dd(count($fasilitas));
        return view('livewire.dashboard-komponen', ['lists' => Alternatif::orderBy('ranking', 'asc')->paginate(12)])->extends('layouts.app')->section('content');
    }

    public function detail($id)
    {
        $data = Alternatif::with('foto')->where('id', '=', $id)->first();
        $this->data = $data;
        $this->dispatchBrowserEvent('modal-detail');
    }

    public function resetFields()
    {
        $this->reset(['data']);
    }
}
