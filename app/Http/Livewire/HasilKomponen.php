<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kriteria;
use App\Models\Alternatif;

class HasilKomponen extends Component
{

    public $alternatif, $kriteria, $nbobot, $vektor_s;
    public $hasil, $hasilranking;
    public function mount()
    {
        // MENGAMBIL DATA ALTERNATIF DAN KRITERIA
        $this->alternatif = Alternatif::has('subkriteria')->get();
        $this->kriteria = Kriteria::all();

        // MENORMALISASIKAN BOBOT
        foreach ($this->kriteria as $key => $each) {
            $this->kriteria[$key]['nbobot'] = $each->bobot / $this->kriteria->sum('bobot');
        }

        //  MENENTUKAN NILAI VEKTOR S
        foreach ($this->alternatif as $key => $item) {
            $this->vektor_s[$key] = 1;
            foreach ($item->subkriteria as $i => $each) {
                if ($this->kriteria[$i]['atribut'] == 'benefit') {
                    $this->vektor_s[$key] = $this->vektor_s[$key] * (pow($each->bobot, $this->kriteria[$i]['nbobot']));
                } else {
                    $this->vektor_s[$key] = $this->vektor_s[$key] * (pow($each->bobot, -$this->kriteria[$i]['nbobot']));
                }
            }
        }

        // MENENTUKAN NILAI VEKTOR V
        foreach ($this->alternatif as $key => $item) {
            $this->hasil[$key] = [
                'id' => $item->id,
                'nama' => $item->nama,
                'hasil' => $this->vektor_s[$key] / array_sum($this->vektor_s),
            ];
        }
        $this->hasilranking = $this->hasil;
        array_multisort(array_column($this->hasilranking, 'hasil'), SORT_DESC, $this->hasilranking);

        foreach ($this->hasilranking as $key => $item) {
            $rank = Alternatif::find($item['id']);
            $rank->nilai = $item['hasil'];
            $rank->ranking = $key + 1;
            $rank->save();
        }
    }
    public function render()
    {
        return view('livewire.hasil-komponen')->extends('layouts.app')->section('content');
    }
}
