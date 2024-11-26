<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class PenilaianKomponen extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $idalternatif;
    public $nama;
    public $kriteria;
    public $subkriteria;
    public $search = "";
    public $options = "Tambah";

    public function mount()
    {
        $this->kriteria = Kriteria::all();
    }
    public function render()
    {

        return view('livewire.penilaian-komponen', ['lists' => Alternatif::has('subkriteria')->paginate(10), 'listpilihan' => Alternatif::doesntHave('subkriteria')->get()])->extends('layouts.app')->section('content');
    }

    public function resetInput()
    {
        $this->reset(['nama', 'subkriteria', 'idalternatif', 'options']);
    }

    public function store()
    {
        $this->validate(
            [
                'subkriteria.*' => 'required',
            ],
            [
                'subkriteria.*.required' => 'Harap di pilih',
            ],
        );

        $data = Alternatif::find($this->idalternatif);

        ksort($this->subkriteria);
        DB::table('alternatif_sub_kriteria')->where('alternatif_id', $this->idalternatif)->delete();

        $data->subkriteria()->sync($this->subkriteria);

        session()->flash('message', $this->idalternatif ? 'Data berhasil di rubah' : 'Data berhasil ditambah');
        $this->resetInput();
        $this->dispatchBrowserEvent('modal-store');
    }

    public function edit($id)
    {
        $this->idalternatif = $id;
        $data = Alternatif::with('subkriteria')->find($this->idalternatif);
        $this->nama = $data->nama;
        foreach ($data->subkriteria as $key => $item) {
            $this->subkriteria[$key] = $item->id;
        }
        $this->options = 'Edit';
    }
}
